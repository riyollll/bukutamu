<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pengunjung extends Model
{
    protected $table = 'pengunjung';

    protected $primaryKey = 'id_pengunjung';

    public $timestamps = false;

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'no_hp',
        'email',
        'alamat',
        'instansi',
    ];

    public function kunjungan(): HasMany
    {
        return $this->hasMany(Kunjungan::class, 'id_pengunjung', 'id_pengunjung');
    }
}
