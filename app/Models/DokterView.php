<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class DokterView extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    // public function spes(){
    //     return $this->belongsTo('App\Models\Poliklinik', 'foreign_key', 'other_key');
    // }

    public function poli()
    {
        return $this->belongsTo(Poliklinik::class, 'poliklinik_id');
    }

    public function jadwal()
    {
        return $this->belongsTo(JadwalDokter::class, 'jadwal_dokter_id');
    }

    public function jk()
    {
        return $this->belongsTo(JenisKelamin::class, 'jenis_kelamin_id');
    }
}
