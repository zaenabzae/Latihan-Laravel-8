<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Luas extends Model
{
    use HasFactory;
    protected $table = 'luas'; //isi nama tabel

    protected $primaryKey = 'id'; // isi primary key table, sytax ini dipakai ketika primary key bukan id

    protected $fillable = ['tahun', 'kecamatan_id', 'tanaman_perkebunan_id','nilai']; //isi dari tabel ditulis
}
