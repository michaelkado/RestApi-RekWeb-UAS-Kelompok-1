<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class DataMahasiswa extends Model
{

    protected $table = 'datamaba' ;

    protected $fillable = ['Nama_Lengkap','NIK','JenisKelamin','TempatLahir','TglLahir',
    'Berat', 'Tinggi','Agama','Goldarah','NoTlp','Fakultas','Prodi','AsalSekolah', 'Jurusan','Nilai','Tahun','AlamatSekolah',
    'NamaOrtu', 'TempatLahirOrtu','TglLahirOrtu','AgamaOrtu','Hubungan','NoTlpOrtu',
    'AlamatOrtu', 'PekerjaanOrtu','Penghasilan'];
}