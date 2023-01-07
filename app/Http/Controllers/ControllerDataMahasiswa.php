<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\DataMahasiswa;

class ControllerDataMahasiswa extends Controller
{
    public function create (Request $request)
    {
        $data = $request->all();
        $datamahasiswa = DataMahasiswa::create($data);

        return response()->json($datamahasiswa);
    }

    public function index ()
    {
        $datamahasiswa = DataMahasiswa::all();
        return response()->json($datamahasiswa);
    }

    public function detail($id)
    {
        $datamahasiswa = DataMahasiswa::find($id);
        return response()->json($datamahasiswa);
    }

    public function update (Request $request,$id)
    {
        $datamahasiswa = DataMahasiswa::whereId($id)->update([
            'Nama_Lengkap' => $request->input('Nama_Lengkap'),
            'NIK' => $request->input('NIK'),
            'JenisKelamin' => $request->input('JenisKelamin'),
            'TempatLahir' => $request->input('TempatLahir'),
            'TglLahir' => $request->input('TglLahir'),
            'Berat' => $request->input('Berat'),
            'Tinggi' => $request->input('Tinggi'),
            'Agama' => $request->input('Agama'),
            'Goldarah' => $request->input('Goldarah'),
            'NoTlp' => $request->input('NoTlp'),
            'Fakultas' => $request->input('Fakultas'),
            'Prodi' => $request->input('Prodi'),
            'AsalSekolah' => $request->input('AsalSekolah'),
            'Jurusan' => $request->input('Jurusan'),
            'Nilai' => $request->input('Nilai'),
            'Tahun' => $request->input('Tahun'),
            'AlamatSekolah' => $request->input('AlamatSekolah'),
            'NamaOrtu' => $request->input('NamaOrtu'),
            'TempatLahirOrtu' => $request->input('TempatLahirOrtu'),
            'TglLahirOrtu' => $request->input('TglLahirOrtu'),
            'AgamaOrtu' => $request->input('AgamaOrtu'),
            'Hubungan' => $request->input('Hubungan'),
            'NoTlpOrtu' => $request->input('NoTlpOrtu'),
            'AlamatOrtu' => $request->input('AlamatOrtu'),
            'PekerjaanOrtu' => $request->input('PekerjaanOrtu'),
            'Penghasilan' => $request->input('Penghasilan'),
        ]);
        if ($datamahasiswa) {
            // code...
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil Diupdate',
                'data' => $datamahasiswa
            ],201);
        }else {
            return response()->json([
                'success' => false,
                'message' => "data Gagal Diupdate",
            ],400);
        }
    }
    public function delete($id)
    {
    $dataMahasiswa = DataMahasiswa::whereId($id)->first();
    $dataMahasiswa->delete();
         if ($dataMahasiswa) {
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil DiDelete'
        ],200);    
        }
    }

}
