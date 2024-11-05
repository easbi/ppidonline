<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keberatan extends Model
{
    use HasFactory;
    public $table = "transaksi_berat_info";
    protected $fillable = [
        'id_pendaftaran',
        'id_reg_keberatan',
        'tujuan_info',
        'nama_pemohon',
        'alamat_pemohon',
        'pekerjaan_pemohon',
        'no_telp_pemohon',
        'email_pemohon',
        'nama_kuasa',
        'alamat_kuasa',
        'telp_kuasa',
        'alasan_keberatan',
        'kasus_posisi',
        'timestamp',
        'id_pelayanan_ppid',
        'verifikasi_pemohon'
    ];
}
