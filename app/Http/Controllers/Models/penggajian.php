<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeranjangBelanja extends Model
{
    protected $table = 'penggajian';
    protected $fillable = ['NIP', 'Gaji Pokok', 'Potongan','Gaji Bersih','Persentase Potongan'];
    public $timestamps = false;
}
