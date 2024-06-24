<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $primaryKey = 'no_uji';
    public $incrementing = false;

    protected $fillable = ['no_uji','no_kendaraan','pemilik','jenis_kendaraan','no_chasis','no_mesin','lokasi_uji','masa_berlaku','status_uji','no_buku','jbb'];
}
