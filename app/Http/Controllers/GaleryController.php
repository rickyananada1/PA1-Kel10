<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galery = Galery::latest()->get();
        return view('galery.index', compact('galery'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg',
            'nama_gambar' => 'required',
        ]);

        $gambar = $request->file('gambar');
        $namafile = $gambar->getClientOriginalName();
        $tujuan = 'build/asset/gambar';
        $gambar->move($tujuan, $namafile);

        $galery = new Galery;
        $galery->gambar = $namafile;
        $galery->nama_gambar = $request->nama_gambar;
        $galery->save();

        return redirect()->route('galery.index')->with('success', 'Gambar berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($galeryId)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($galeryId)
    {
        $galery = Galery::where('id', $galeryId)->first();
        return view('editGalery', ['galery' => $galery]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $galeryId)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg',
            'nama_gambar' => 'required',
        ]);

        Galery::where('id', $galeryId)
            ->update([
                'gambar' => $request->gambar,
                'nama_gambar' => $request->nama_gambar,
            ]);

        return redirect("/")->with('status', 'Gambar dengan id' . $galeryId . ' berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($galeryId)
    {
        Galery::where('id', $galeryId)->delete();
        return redirect("/")->with('status', 'Gambar dengan id : ' . $galeryId . "berhasil dihapus");
    }
}
