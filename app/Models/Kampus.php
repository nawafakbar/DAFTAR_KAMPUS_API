<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{

    protected $table = 'kampus';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'nama_kampus', 'alamat', 'no_telp', 'kategori', 'lat', 'lng', 'jurusan'
    ];

}