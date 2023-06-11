<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \PDF;


class CetakBukuInstockController extends Controller
{
    //
    public function __invoke(Request $request)
    {
        $laporanbukuinstock = Buku::select('id','kode_buku', 'judul', 'pengarang','penerbit','tahun_terbit','deskripsi','gambar','status','created_at','updated_at')
        ->where('status', 'In Stock')
        ->get();

        $pdf =PDF::loadView('buku.laporanbukuinstock_pdf',['laporanbukuinstock'=>$laporanbukuinstock]);

        return $pdf->download('laporan_buku.pdf');
    }
}