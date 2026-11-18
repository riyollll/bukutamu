<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kunjungan extends Model
{
    protected $table = 'kunjungan';

    protected $primaryKey = 'id_kunjungan';

    public $timestamps = false;

    protected $fillable = [
        'id_pengunjung',
        'id_pegawai',
        'tanggal_kunjungan',
        'jam_masuk',
        'jam_keluar',
        'tujuan',
        'keperluan',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'tanggal_kunjungan' => 'date',
        ];
    }

    public function pengunjung(): BelongsTo
    {
        return $this->belongsTo(Pengunjung::class, 'id_pengunjung', 'id_pengunjung');
    }

    public function pegawai(): BelongsTo
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai', 'id_pegawai');
    }
}
