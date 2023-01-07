<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Datamahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datamaba', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Lengkap');
            $table->string('NIK');
            $table->string('JenisKelamin');
            $table->string('TempatLahir');
            $table->string('TglLahir');
            $table->integer('Berat');
            $table->integer('Tinggi');
            $table->string('Agama');
            $table->string('Goldarah');
            $table->string('NoTlp');
            $table->string('Fakultas');
            $table->string('Prodi');
            $table->string('AsalSekolah');
            $table->string('Jurusan');
            $table->integer('Nilai');
            $table->integer('Tahun');
            $table->string('AlamatSekolah');
            $table->string('NamaOrtu');
            $table->string('TempatLahirOrtu');
            $table->string('TglLahirOrtu');
            $table->string('AgamaOrtu');
            $table->string('Hubungan');
            $table->string('NoTlpOrtu');
            $table->string('AlamatOrtu');
            $table->string('PekerjaanOrtu');
            $table->string('Penghasilan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datamaba');
    }
};
