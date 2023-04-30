<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $nama_admin = User::all();

        $total_berita  = Berita::count();

        return view('admin.dashboard.index', compact(
            'nama_admin',
            'total_berita',
        ));
    }
}
