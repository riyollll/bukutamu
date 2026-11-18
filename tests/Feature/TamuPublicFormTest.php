<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TamuPublicFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_public_form_renders_with_local_bootstrap_assets(): void
    {
        $this->get(route('tamu.create'))
            ->assertOk()
            ->assertSee('Form Data Diri Tamu')
            ->assertSee('template/assets/css/bootstrap.min.css')
            ->assertSee('name="nama"', false)
            ->assertDontSee('Admin Hasan');
    }

    public function test_valid_public_submission_creates_a_guest_record(): void
    {
        $response = $this->post(route('tamu.store'), [
            'nama' => 'Nadia Putri',
            'jenis_kelamin' => 'Perempuan',
            'no_hp' => '081234567890',
            'email' => 'nadia@example.test',
            'alamat' => 'Jl. Merdeka No. 10',
            'instansi' => 'Perorangan',
        ]);

        $response->assertRedirect(route('tamu.create'))
            ->assertSessionHas('success', 'Data diri tamu berhasil dikirim.');

        $this->assertDatabaseHas('pengunjung', [
            'nama' => 'Nadia Putri',
            'jenis_kelamin' => 'Perempuan',
            'no_hp' => '081234567890',
            'email' => 'nadia@example.test',
            'alamat' => 'Jl. Merdeka No. 10',
            'instansi' => 'Perorangan',
        ]);
    }

    public function test_invalid_public_submission_returns_to_the_form_without_creating_a_guest(): void
    {
        $response = $this->from(route('tamu.create'))
            ->post(route('tamu.store'), []);

        $response->assertRedirect(route('tamu.create'))
            ->assertSessionHasErrors([
                'nama',
                'jenis_kelamin',
                'no_hp',
                'email',
                'alamat',
                'instansi',
            ]);

        $this->assertDatabaseCount('pengunjung', 0);
    }

    public function test_public_form_escapes_guest_input_after_validation_failure(): void
    {
        $this->from(route('tamu.create'))
            ->post(route('tamu.store'), [
                'nama' => '<script>alert(1)</script>',
                'jenis_kelamin' => 'Perempuan',
                'no_hp' => '081234567890',
                'email' => 'invalid-email',
                'alamat' => 'Jl. Merdeka No. 10',
                'instansi' => 'Perorangan',
            ])
            ->assertSessionHasErrors('email');

        $this->get(route('tamu.create'))
            ->assertSee('&lt;script&gt;alert(1)&lt;/script&gt;', false)
            ->assertDontSee('<script>alert(1)</script>', false);
    }
}
