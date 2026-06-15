<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class penggajian extends Model
{
    protected $table = 'penggajian';
    protected $primaryKey = 'nip';
    public $incrementing = false;  
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = ['nip', 'gajipokok', 'potongan'];
}
