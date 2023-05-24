<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\News;
use App\Models\Pengumuman;
use App\Models\Structure;
use App\Models\Visimisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FronController extends Controller
{
    public function dashboard()
    {

        $news = News::orderBy('created_at', 'desc')
        ->get();

        return view('welcome', compact('news'));
    }

    public function galeri(){
        $galeri =Galery::orderBy('created_at', 'desc')
        ->get();
        return view('masyarakat.galery', compact('galeri'));
    }
    public function structure(){
        $structure = Structure::get();
        return view('masyarakat.structure', compact('structure'));
    }
    public function visimisi(){
        $visimisi = Visimisi::get();
        return view('masyarakat.visimisi', compact('visimisi'));
    }
    public function pengumuman(){
        $pengumuman = Pengumuman::orderBy('created_at', 'desc')
        ->get();
        return view('masyarakat.pengumuman', compact('pengumuman'));
    }

}
