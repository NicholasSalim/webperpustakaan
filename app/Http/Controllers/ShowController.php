<?php

namespace App\Http\Controllers;

use File;
use App\Models\Buku;
use App\Models\Profile;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $buku = Buku::where('judul','like','%'.$request->search.'%')->paginate(6);
        }
        else{
            $buku = Buku::paginate(6);
        }
        $iduser = Auth::id();
        $profile = Profile::where('users_id', $iduser)->first();
        return view('home', ['buku' => $buku, 'profile' => $profile]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::find($id);
        $iduser = Auth::id();
        $profile = Profile::where('users_id', $iduser)->first();
        return view('buku.detail', ['buku' => $buku, 'profile' => $profile]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
}
