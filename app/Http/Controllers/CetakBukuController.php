<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \PDF;


class CetakBukuController extends Controller
{
    //
    public function __invoke(Request $request)
    {
        $laporanbuku = Buku::all();

        $pdf =PDF::loadView('buku.laporan_pdf',['laporanbuku'=>$laporanbuku]);

        return $pdf->download('laporan_buku.pdf');
    }
}
