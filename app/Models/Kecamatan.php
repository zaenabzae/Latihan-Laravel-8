<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $table = 'kecamatan'; //isi nama tabel

    protected $primaryKey = 'id'; // isi primary key table, sytax ini dipakai ketika primary key bukan id

    protected $fillable = ['nama']; //isi dari tabel ditulis
}
