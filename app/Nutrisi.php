<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nutrisi extends Model
{
    protected $table = 'nutrisi';
    protected $fillable = ['judul', 'isbn', 'penerbit', 'pengarang', 'tahun_terbit', 'jumlah_buku', 'lokasi', 'deskripsi', 'cover'];

    /**
     * Method One To Many 
     */
    public function transaksi()
    {
    	return $this->hasMany(Transaksi::class);
    }
}
