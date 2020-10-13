<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita'; //isi nama tabel

    protected $primaryKey = 'id'; // isi primary key table, sytax ini dipakai ketika primary key bukan id

    protected $fillable = ['judul','isi']; //isi dari tabel ditulis
}

