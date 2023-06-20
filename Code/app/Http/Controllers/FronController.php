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
use PDF;
use Auth;
use Illuminate\Support\Facades\Storage;

class FronController extends Controller
{
    public function dashboard()
    {

        $news = News::orderBy('created_at', 'desc')->take(6)
            ->get();
        return view('welcome', compact('news'));
    }

    public function galeri()
    {
        $galeri = Galery::orderBy('created_at', 'desc')
            ->paginate(9);
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
            ->paginate(6);
        return view('masyarakat.pengumuman', compact('pengumuman'));
    }

    public function beritadetail($id)
    {
        $beritadetail = News::findOrFail($id);
        $berita = News::all();
        return view('masyarakat.beritadetail', compact('beritadetail', 'berita'));
    }

    public function semuaBerita()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(10);
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
        $masyarakat = Auth::guard('masyarakat')->id();
        $saran = Saran::where('masyarakat_id', $masyarakat)->paginate(5);
        return view('masyarakat.saran', compact('saran'));
    }

    public function saranStore(Request $request)
    {
        $alert = [
            'saran' => 'required|max:400|min:20',
        ];
        $message = [
            'saran.required' => 'Silahkan isi saran Anda Terlebih Dahulu',
            'saran.max' => 'Saran Tidak boleh lebih dari 400 karakter',
            'saran.min' => 'Saran Tidak boleh kurang Dari 20 Karakter'
        ];
        $this->validate($request, $alert, $message);
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

    public function saranUpdate(Request $request, $id)
    {
        $validatedData = $request->validate([
            'saran' => 'required',
            'masyarakat_id' => 'required',
        ]);

        $saran = Saran::find($id);
        $saran->saran = $validatedData['saran'];
        $saran->masyarakat_id = $validatedData['masyarakat_id'];
        $saran->update();

        return redirect('masyarakat/saran');
    }

    public function saranEdite($id)
    {
        $saran = Saran::find($id);
        return view('masyarakat.saranEdite', compact('saran'));
    }
    public function saranDelete($id)
    {
        $saran = Saran::find($id)->delete();
        return redirect()->back();
    }

    public function surat()
    {
        $surat = Surat::orderBy('created_at', 'desc')->paginate(2);

        return view('masyarakat.surat', compact('surat'));
    }
    public function suratIndex()
    {
        $surat = Surat::orderBy('created_at', 'desc')->get();

        return view('masyarakat.suratIndex', compact('surat'));
    }

    public function suratStore(Request $request)
    {
        $alert = [
            'kk' => 'required|mimes:pdf',
            'name' => 'required',
            'tempatlahir' => 'required',
            'tgllahir' => 'required',
            'jeniskelamin' => 'required',
            'pekerjaan' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
        ];
        $message = [
            'kk.required' => 'Silahkan Upload file KK anda',
            'kk.mimes' => 'File KK harus berupa PDF',
            'name.required'=> 'Silahkan Isi kolom nama',
            'name.string' => 'Nama Harus brupa Huruf',
            'tempatlahir.required' => 'Silahkan Isi kolom Tempat Lahir',
            'tgllahir.required' => 'Silahkan Isi kolom Tanggal Lahir',
            'jeniskelamin.required' => 'Silahkan Isi kolom Jenis Kelamin',
            'pekerjaan.required' => 'Silahkan Isi kolom Pekerjaan',
            'agama.required' => 'Silahkan Isi kolom Agama',
            'alamat.required' => 'Silahkan Isi kolom Alamat',
        ];
        $this->validate($request, $alert, $message);
        $validatedData = $request->validate([
            'kk' => 'required|mimes:pdf',
            'name' => 'required',
            'tempatlahir' => 'required',
            'tgllahir' => 'required',
            'jeniskelamin' => 'required',
            'pekerjaan' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
        ]);

        $file = time() . '.' . $request->kk->getClientOriginalExtension();
        $request->kk->move(public_path('FileKK'), $file);

        $surat = new Surat;
        $surat->masyarakat_id = Auth::guard('masyarakat')->user()->id;
        $surat->name = $request->name;
        $surat->tempatlahir = $request->tempatlahir;
        $surat->tgllahir = $request->tgllahir;
        $surat->jeniskelamin = $request->jeniskelamin;
        $surat->pekerjaan = $request->pekerjaan;
        $surat->agama = $request->agama;
        $surat->alamat = $request->alamat;
        $surat->kk = $file;
        $surat->save();

        return redirect()->route('suratIndex')->with('flash_message', 'Surat Ditambah!');
    }

    function cetak($id)
    {
        $data = Surat::find($id);

        if (!$data) {
            return redirect()->back()->with('error', 'Surat tidak ditemukan');
        }

        $pdf = PDF::loadView('masyarakat.surat-pdf', compact('data'));
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream('surat.pdf');
    }

}
