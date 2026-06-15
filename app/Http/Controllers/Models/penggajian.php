<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class penggajian extends Model
{
    protected $table = 'penggajian';
    protected $primaryKey = 'nip';
    public $incrementing = false;   // primary key bukan auto increment
    protected $keyType = 'string';  // primary key bertipe string (CHAR)
    public $timestamps = false;

    protected $fillable = ['nip', 'gajipokok', 'potongan'];
}
