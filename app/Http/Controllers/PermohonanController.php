<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use DB;
use Carbon\Carbon;


class PermohonanController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('permohonan.index');
        //utk publik/umum tampilkan halaman index sederhana yg memuat tombol utk input permohonan informasi
        //tampilkan dashboard sederhana yg nampilin 3 indikator, jumlah permohonan hari ini, jumlah permohonan informasi bulan ini, dan jumlah permohoann informasi total tahun ini

        //jika admin yg masuk, tampilkan tabel2 datatabel informasi yang masuk disertai aksi edit/delete/tindaklanjuti
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('permohonan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bukti_identitas_diri' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'pekerjaan',
            'no_telp' => 'required',
            'email' => 'required',
            'rincian_info' => 'required',
            'tujuan_info' => 'required',
            'cara_peroleh_info' => 'required',
            'cara_dapat_salinan_info' => 'required',
            'id_pelayanan_ppid' => 'required',
            'verifikasi_pemohon' => 'required',
            'tgl'=> 'required',
        ]);

        $result = Permohonan::create([
                'bukti_identitas_diri' => $request->bukti_identitas_diri,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'pekerjaan' => $request->pekerjaan,
                'no_telp' => $request->no_telp,
                'email' => $request->email,
                'rincian_info' => $request->rincian_info,
                'tujuan_info' => $request->tujuan_info,
                'cara_peroleh_info' => $request->cara_peroleh_info,
                'cara_dapat_salinan_info' => $request->cara_dapat_salinan_info,
                'id_pelayanan_ppid' => $request->id_pelayanan_ppid,
                'verifikasi_pemohon' => $request->verifikasi_pemohon,
            ]);

         return redirect()->route('permohonan.index')
                        ->with('success','Kegiatan Sukses Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
