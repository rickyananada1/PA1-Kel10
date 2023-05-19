<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\News;
use App\Models\Pengumuman;
use App\Models\Structure;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $nama_admin = User::all();

        $total_berita  = News::count();

        $total_structure = Structure::count();

        $total_galery = Galery::count();

        $total_pengumuman = Pengumuman::count();

        return view('admin.dashboard.index', compact(
            'nama_admin',
            'total_berita',
            'total_structure',
            'total_galery',
            'total_pengumuman'
        ));
    }
}
