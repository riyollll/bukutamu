<?php

namespace Tests\Feature;

use App\Models\Pegawai;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PegawaiControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_valid_details_create_a_pegawai_and_redirect_to_index(): void
    {
        $details = [
            'nama_pegawai' => 'Andi Wijaya',
            'jabatan' => 'Kepala Bagian',
        ];

        $response = $this->post(route('pegawai.store'), $details);

        $response->assertRedirect(route('pegawai.index'));
        $this->assertDatabaseHas('pegawai', $details);
    }

    public function test_pegawai_can_be_updated_and_deleted_using_its_custom_primary_key(): void
    {
        $pegawai = Pegawai::create([
            'nama_pegawai' => 'Pegawai Lama',
            'jabatan' => 'Staf',
        ]);
        $updatedDetails = [
            'nama_pegawai' => 'Pegawai Baru',
            'jabatan' => 'Kepala Bagian',
        ];

        $updateResponse = $this->put(route('pegawai.update', $pegawai), $updatedDetails);

        $updateResponse->assertRedirect(route('pegawai.index'));
        $this->assertDatabaseHas('pegawai', $updatedDetails);

        $deleteResponse = $this->delete(route('pegawai.destroy', $pegawai));

        $deleteResponse->assertRedirect(route('pegawai.index'));
        $this->assertDatabaseMissing('pegawai', ['id_pegawai' => $pegawai->id_pegawai]);
    }
}
