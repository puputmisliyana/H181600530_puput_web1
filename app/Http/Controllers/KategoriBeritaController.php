<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

class KategoriBeritaController extends Controller
{
    public function index(){
        $listKategoriBerita=KategoriBerita::all();
        return view('kategori_berita.index',compact('listKategoriBerita'));
    }
}
