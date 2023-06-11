<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \PDF;


class CetakBukuDipinjamController extends Controller
{
    //
    public function __invoke(Request $request)
    {
        $laporanbukudipinjam = Buku::select('id','kode_buku', 'judul', 'pengarang','penerbit','tahun_terbit','deskripsi','gambar','status','created_at','updated_at')
        ->where('status', 'Dipinjam')
        ->get();

        $pdf =PDF::loadView('buku.laporanbukudipinjam_pdf',['laporanbukudipinjam'=>$laporanbukudipinjam]);

        return $pdf->download('laporan_buku.pdf');
    }
}
