<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles'; // sesuaikan dengan nama tabel di database kamu
    protected $fillable = ['nama', 'alamat', 'telepon', 'email']; // contoh kolom
}
