<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\Masyarakat;
use App\Models\News;
use App\Models\Pengumuman;
use App\Models\Saran;
use App\Models\Structure;
use App\Models\Surat;
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

        $total_masyarakat = Masyarakat::count();

        $total_saran = Saran::get();

        return view('admin.dashboard.index', compact(
            'nama_admin',
            'total_berita',
            'total_structure',
            'total_galery',
            'total_pengumuman',
            'total_masyarakat',
            'total_saran'
        ));
    }

        public function saran()
        {
            $saran = Saran::orderBy('created_at','desc')->get();
            return view('saran.index', compact('saran'));
        }
        public function surat()
        {
            $surat = Surat::orderBy('created_at','desc')->get();
            return view('surat.index', compact('surat'));
        }
        public function viewSurat($id)
        {
            $surat = Surat::find($id);
            return view('surat.viewSurat', compact('surat'));
        }

        public function suratapprove(Request $request, $id)
        {
            $item = Surat::find($id);
            if ($request->has('status')) {
                $status = $request->status;
                if ($status == 'approve') {
                    $item->status = 1;
                } elseif ($status == 'reject') {
                    $item->status = 2;
                } else {
                    $item->status = 0;
                }
                $item->save();
            }
            return redirect()->back();
        }

}
