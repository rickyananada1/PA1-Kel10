<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('berita.index') -> with([
            'berita' => berita::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        $berita = new berita;
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->save();

        return to_route('berita.index') -> with('succes', 'Berita berhasil DiTambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('berita.edit')->with([
            'berita'=>berita::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request -> validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        $berita = berita::find($id);
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->save();

        return to_route('berita.index')->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berita = berita::find($id)->where('id',$id)->delete();
        return redirect('/berita');
    }
}
