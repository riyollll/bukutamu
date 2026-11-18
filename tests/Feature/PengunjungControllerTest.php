<?php

namespace Tests\Feature;

use App\Models\Pengunjung;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PengunjungControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_valid_details_create_a_pengunjung_and_redirect_to_index(): void
    {
        $details = [
            'nama' => 'Siti Rahmawati',
            'jenis_kelamin' => 'Perempuan',
            'no_hp' => '082345678901',
            'email' => 'siti@example.test',
            'alamat' => 'Jl. Merdeka No. 1',
            'instansi' => 'SMK PGRI Wlingi',
        ];

        $response = $this->post(route('pengunjung.store'), $details);

        $response->assertRedirect(route('pengunjung.index'));
        $this->assertDatabaseHas('pengunjung', $details);
        $this->assertSame(1, Pengunjung::query()->count());
    }

    public function test_invalid_gender_does_not_create_a_pengunjung(): void
    {
        $response = $this->from(route('pengunjung.create'))
            ->post(route('pengunjung.store'), [
                'nama' => 'Tamu Uji',
                'jenis_kelamin' => 'Lainnya',
                'no_hp' => '081234567890',
                'email' => 'tamu@example.test',
                'alamat' => 'Jl. Merdeka No. 1',
                'instansi' => 'Perorangan',
            ]);

        $response->assertRedirect(route('pengunjung.create'))
            ->assertSessionHasErrors(['jenis_kelamin']);
        $this->assertDatabaseCount('pengunjung', 0);
    }

    public function test_pengunjung_can_be_updated_and_deleted_using_its_custom_primary_key(): void
    {
        $pengunjung = Pengunjung::create([
            'nama' => 'Tamu Lama',
            'jenis_kelamin' => 'Laki-laki',
            'no_hp' => '081111111111',
            'email' => 'lama@example.test',
            'alamat' => 'Jl. Lama No. 1',
            'instansi' => 'Instansi Lama',
        ]);
        $updatedDetails = [
            'nama' => 'Tamu Baru',
            'jenis_kelamin' => 'Perempuan',
            'no_hp' => '082222222222',
            'email' => 'baru@example.test',
            'alamat' => 'Jl. Baru No. 2',
            'instansi' => 'Instansi Baru',
        ];

        $updateResponse = $this->put(route('pengunjung.update', $pengunjung), $updatedDetails);

        $updateResponse->assertRedirect(route('pengunjung.index'));
        $this->assertDatabaseHas('pengunjung', $updatedDetails);

        $deleteResponse = $this->delete(route('pengunjung.destroy', $pengunjung));

        $deleteResponse->assertRedirect(route('pengunjung.index'));
        $this->assertDatabaseMissing('pengunjung', ['id_pengunjung' => $pengunjung->id_pengunjung]);
    }
}
