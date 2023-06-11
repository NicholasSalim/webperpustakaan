<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use App\Models\User;
use App\Models\Profile;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ReportBukuController extends Controller
{
    //
    public function index(){
        $report = Buku::all();
        $iduser = Auth::id();
        $profile = Profile::where('users_id',$iduser)->first();
        $peminjam = Peminjaman::with(['user','buku'])->orderBy('updated_at','desc')->get();
        $pinjamanUser = Peminjaman::where('users_id',$iduser)->get();

        return view('buku.report', compact('report','profile','peminjam'));
    }

    public function dipinjam(){
        $report = Buku::all();
        $iduser = Auth::id();
        $profile = Profile::where('users_id',$iduser)->first();
        $peminjam = Peminjaman::with(['user','buku'])->orderBy('updated_at','desc')->get();
        $pinjamanUser = Peminjaman::where('users_id',$iduser)->get();
        $status = Buku::select('id','kode_buku', 'judul', 'pengarang','penerbit','tahun_terbit','deskripsi','gambar','status','created_at','updated_at')
        ->where('status', 'Dipinjam')
        ->get();

        return view('buku.laporanbukudipinjam', compact('report','profile','peminjam','status'));
    }

    public function instock(){
        $report = Buku::all();
        $iduser = Auth::id();
        $profile = Profile::where('users_id',$iduser)->first();
        $peminjam = Peminjaman::with(['user','buku'])->orderBy('updated_at','desc')->get();
        $pinjamanUser = Peminjaman::where('users_id',$iduser)->get();
        $instock = Buku::select('id','kode_buku', 'judul', 'pengarang','penerbit','tahun_terbit','deskripsi','gambar','status','created_at','updated_at')
        ->where('status', 'In Stock')
        ->get();

        return view('buku.laporanbukuinstock', compact('report','profile','peminjam','instock'));
    }
}
