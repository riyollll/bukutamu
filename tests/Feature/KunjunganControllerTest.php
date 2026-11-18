<?php

namespace Tests\Feature;

use App\Models\Kunjungan;
use App\Models\Pegawai;
use App\Models\Pengunjung;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class KunjunganControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_valid_details_create_a_kunjungan_with_its_relationships(): void
    {
        $pengunjung = Pengunjung::create([
            'nama' => 'Ahmad Fauzi',
            'jenis_kelamin' => 'Laki-laki',
            'no_hp' => '081234567890',
            'email' => 'ahmad@example.test',
            'alamat' => 'Jl. Merdeka No. 2',
            'instansi' => 'PT Maju Jaya',
        ]);
        $pegawai = Pegawai::create([
            'nama_pegawai' => 'Andi Wijaya',
            'jabatan' => 'Kepala Bagian',
        ]);
        $details = [
            'id_pengunjung' => $pengunjung->id_pengunjung,
            'id_pegawai' => $pegawai->id_pegawai,
            'tanggal_kunjungan' => '2026-11-11',
            'jam_masuk' => '08:30',
            'jam_keluar' => '09:15',
            'tujuan' => 'Kepala Bagian',
            'keperluan' => 'Kunjungan kerja',
            'status' => 'Selesai',
        ];

        $response = $this->post(route('kunjungan.store'), $details);

        $response->assertRedirect(route('kunjungan.index'));
        $persistedDetails = $details;
        unset($persistedDetails['tanggal_kunjungan']);
        $this->assertDatabaseHas('kunjungan', $persistedDetails);

        $kunjungan = Kunjungan::query()->firstOrFail();
        $this->assertSame('2026-11-11', $kunjungan->tanggal_kunjungan->format('Y-m-d'));
        $this->assertSame('Ahmad Fauzi', $kunjungan->pengunjung->nama);
        $this->assertSame('Andi Wijaya', $kunjungan->pegawai->nama_pegawai);
    }

    public function test_unknown_foreign_keys_do_not_create_a_kunjungan(): void
    {
        $response = $this->from(route('kunjungan.create'))
            ->post(route('kunjungan.store'), [
                'id_pengunjung' => 999,
                'id_pegawai' => 999,
                'tanggal_kunjungan' => '2026-11-11',
                'jam_masuk' => '08:30',
                'jam_keluar' => '',
                'tujuan' => 'Kepala Bagian',
                'keperluan' => 'Kunjungan kerja',
                'status' => 'Menunggu',
            ]);

        $response->assertRedirect(route('kunjungan.create'))
            ->assertSessionHasErrors(['id_pengunjung', 'id_pegawai']);
        $this->assertDatabaseCount('kunjungan', 0);
    }

    public function test_kunjungan_can_be_updated_and_deleted_using_its_custom_primary_key(): void
    {
        $pengunjung = Pengunjung::create([
            'nama' => 'Ahmad Fauzi',
            'jenis_kelamin' => 'Laki-laki',
            'no_hp' => '081234567890',
            'email' => 'ahmad@example.test',
            'alamat' => 'Jl. Merdeka No. 2',
            'instansi' => 'PT Maju Jaya',
        ]);
        $pegawai = Pegawai::create([
            'nama_pegawai' => 'Andi Wijaya',
            'jabatan' => 'Kepala Bagian',
        ]);
        $kunjungan = Kunjungan::create([
            'id_pengunjung' => $pengunjung->id_pengunjung,
            'id_pegawai' => $pegawai->id_pegawai,
            'tanggal_kunjungan' => '2026-11-11',
            'jam_masuk' => '08:30',
            'jam_keluar' => null,
            'tujuan' => 'Kepala Bagian',
            'keperluan' => 'Kunjungan kerja',
            'status' => 'Menunggu',
        ]);
        $updatedDetails = [
            'id_pengunjung' => $pengunjung->id_pengunjung,
            'id_pegawai' => $pegawai->id_pegawai,
            'tanggal_kunjungan' => '2026-11-12',
            'jam_masuk' => '09:00',
            'jam_keluar' => '09:30',
            'tujuan' => 'Kepala Bagian',
            'keperluan' => 'Konsultasi',
            'status' => 'Selesai',
        ];

        $updateResponse = $this->put(route('kunjungan.update', $kunjungan), $updatedDetails);

        $updateResponse->assertRedirect(route('kunjungan.index'));
        $this->assertDatabaseHas('kunjungan', [
            'id_kunjungan' => $kunjungan->id_kunjungan,
            'keperluan' => 'Konsultasi',
            'status' => 'Selesai',
        ]);

        $deleteResponse = $this->delete(route('kunjungan.destroy', $kunjungan));

        $deleteResponse->assertRedirect(route('kunjungan.index'));
        $this->assertDatabaseMissing('kunjungan', ['id_kunjungan' => $kunjungan->id_kunjungan]);
    }
}
