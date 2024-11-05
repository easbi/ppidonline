<?php

namespace App\Http\Controllers;

use App\Models\Keberatan;
use Illuminate\Http\Request;

class KeberatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //utk publik/umum tampilkan halaman index sederhana yg memuat tombol utk input permohonan keberatan
        //tampilkan dashboard sederhana yg nampilin 3 indikator, jumlah permohonan hari ini, jumlah permohonan keberatan bulan ini, dan jumlah permohoann keberatan total tahun ini

        //jika admin yg masuk, tampilkan tabel2 datatabel keberatan yang masuk disertai aksi edit/delete/tindaklanjuti
        return view('keberatan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('keberatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_reg_keberatan'=> 'required',
            'tujuan_info'=> 'required',
            'nama_pemohon'=> 'required',
            'alamat_pemohon'=> 'required',
            'pekerjaan_pemohon'=> 'required',
            'no_telp_pemohon'=> 'required',
            'email_pemohon'=> 'required',
            'nama_kuasa'=> 'required',
            'alamat_kuasa'=> 'required',
            'telp_kuasa'=> 'required',
            'alasan_keberatan'=> 'required',
            'kasus_posisi'=> 'required',
            'id_pelayanan_ppid'=> 'required',
            'verifikasi_pemohon' => 'required'
        ]);

        $result = Keberatan::create([
                'id_reg_keberatan'=> $request->id_reg_keberatan,
                'tujuan_info'=> $request->tujuan_info,
                'nama_pemohon'=> $request->nama_pemohon,
                'alamat_pemohon'=> $request->alamat_pemohon,
                'pekerjaan_pemohon'=> $request->pekerjaan_pemohon,
                'no_telp_pemohon'=> $request->no_telp_pemohon,
                'email_pemohon'=> $request->email_pemohon,
                'nama_kuasa'=> $request->nama_kuasa,
                'alamat_kuasa'=> $request->alamat_kuasa,
                'telp_kuasa'=> $request->telp_kuasa,
                'alasan_keberatan'=> $request->alasan_keberatan,
                'kasus_posisi'=> $request->kasus_posisi,
                'id_pelayanan_ppid'=> $request->id_pelayanan_ppid,
                'verifikasi_pemohon' => $request->verifikasi_pemohon
            ]);

         return redirect()->route('keberatan.index')
                        ->with('success','Informasi Keberatan Sukses Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Keberatan $keberatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Keberatan $keberatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Keberatan $keberatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Keberatan $keberatan)
    {
        //
    }
}
