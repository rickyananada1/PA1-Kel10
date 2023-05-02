<?php

namespace App\Http\Controllers;

use App\Models\News;
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

        return view('admin.dashboard.index', compact(
            'nama_admin',
            'total_berita',
            'total_structure',
        ));
    }
}
