<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //tampilkan tombol utk aduan saja --arahkan ke pengaduan.create
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('pengaduan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelapor' => 'required',
            'perihal_detail' => 'required',
            'bukti_dukung' => 'required'            
        ]);

        $result = Permohonan::create([           
                'nama_pelapor' => $request->nama_pelapor,
                'perihal_detail' => $request->perihal_detail,
                'bukti_dukung' => $request->bukti_dukung,
            ]);

         return redirect()->route('pengaduan.index')
                        ->with('success','Kegiatan Sukses Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengaduan $pengaduan)
    {
        //
    }
}
