<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;
    public $table = "transaksi_mohon_info";
    protected $fillable = [
        'id',
        // 'bukti_identitas_diri',
        'nama',
        'alamat',
        'pekerjaan',
        'no_telp',
        // 'email',
        'rincian_info',
        'tujuan_info',
        'cara_peroleh_info',
        'cara_dapat_salinan_info',
        // 'id_pelayanan_ppid',
        // 'verifikasi_pemohon'
    ];
}
