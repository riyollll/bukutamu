<?php

namespace Tests\Feature;

use App\Models\Jurusan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class JurusanPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_dashbord_displays_jurusan_data_in_loop(): void
    {
        Jurusan::create([
            'id_jurusan' => '1',
            'nama_jurusan' => 'Teknik Komputer dan Jaringan',
            'singkatan' => 'TKJ',
        ]);

        $response = $this->get('/dashbord');

        $response->assertStatus(200)
            ->assertSee('Teknik Komputer dan Jaringan')
            ->assertSee('TKJ');
    }
}
