<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\News;
use App\Models\Pengumuman;
use App\Models\Saran;
use App\Models\Structure;
use App\Models\Surat;
use App\Models\Visimisi;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Storage;

class FronController extends Controller
{
    public function dashboard()
    {

        $news = News::orderBy('created_at', 'desc')->take(6)
            ->get();
        if (!Auth::guard('masyarakat')->check() && !Auth::guard('admin')->check()) {
            return redirect('masyarakat/login');
        }

        return view('welcome', compact('news'));
    }

    public function galeri()
    {
        $galeri = Galery::orderBy('created_at', 'desc')
            ->get();
        return view('masyarakat.galery', compact('galeri'));
    }
    public function structure()
    {
        $structure = Structure::get();
        return view('masyarakat.structure', compact('structure'));
    }
    public function visimisi()
    {
        $visimisi = Visimisi::get();
        return view('masyarakat.visimisi', compact('visimisi'));
    }
    public function pengumuman()
    {
        $pengumuman = Pengumuman::orderBy('created_at', 'desc')
            ->get();
        return view('masyarakat.pengumuman', compact('pengumuman'));
    }

    public function beritadetail($id)
    {
        $beritadetail = News::findOrFail($id);
        return view('masyarakat.beritadetail', compact('beritadetail'));
    }

    public function semuaBerita()
{
    $news = News::orderBy('created_at','desc')->get();
    return view('masyarakat.semuaBerita', ['news' => $news]);
}

    public function contact()
    {
        return view('masyarakat.contact');
    }
    public function profilDesa()
    {
        return view('masyarakat.profilDesa');
    }

    public function saran()
    {
        $saran = Saran::get();

        return view('masyarakat.saran', compact('saran'));
    }

    public function saranStore(Request $request)
    {
        $validatedData = $request->validate([
            'saran' => 'required',
            'masyarakat_id' => 'required',
        ]);

        $saran = new Saran;
        $saran->saran = $validatedData['saran'];
        $saran->masyarakat_id = $validatedData['masyarakat_id'];
        $saran->save();

        return redirect()->back()->with('message', 'Saran sudah Terkirim');
    }

    public function surat()
    {
        $surat = Surat::get();

        return view('masyarakat.surat', compact('surat'));
    }

    public function suratStore(Request $request)
    {
        $validatedData = $request->validate([
            'kk' => 'required|mimes:pdf',
            'name' => 'required',
        ]);

        $file = time() . '.' . $request->kk->getClientOriginalExtension();
        $request->kk->move(public_path('File KK'), $file);

        $surat = new Surat;
        $surat->masyarakat_id = Auth::guard('masyarakat')->user()->id;
        $surat->name = $request->name;
        $surat->kk = $file;
        $surat->save();

        return redirect('surat')->with('flash_message', 'Surat Ditambah!');
    }


}
