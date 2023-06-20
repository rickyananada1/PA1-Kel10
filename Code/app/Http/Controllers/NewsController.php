<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::All();
        return view('berita.index', compact('news'));
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
        $alert = [
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg',
        ];
        $message = [
            'judul.required' => 'Kolom Judul Harus Di Isi',
            'isi.required' => 'Isi Berita Harus Di Isi',
            'image.required' => 'Image Harus Di Isi',
            'image.mimes' => 'Harus Berupa JPG,PNG,JPEG',
        ];
        $this->validate($request, $alert, $message);
        $file = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/berita'), $file);

        $news = new News;

        $news->judul = $request->judul;
        $news->image = $file;
        $news->isi = $request->isi;

        $news->save();
        return redirect('/berita')->with('flash_message', 'Berita Ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $berita = News::findOrFail($id);

        return view('berita.show', compact('berita'));
    }

    public function edit(string $id)
    {
        $news = News::find($id);
        return view('berita.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);
        $news = News::find($id);
        if ($request->has('image')) {
            $path = 'images/berita/';
            File::delete($path . $news->image);
            $file = time() . '.' . $request->image->extension();

            $request->image->move(public_path('images/berita'), $file);

            $news->image = $file;
            $news->save();
        }

        $news->judul = $request['judul'];
        $news->isi = $request['isi'];
        $news->update();

        return redirect('/berita')->with('success', 'Data Berhasil Diubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::find($id);
        $path = 'images/berita';
        File::delete($path . $news->image);
        $news->delete();
        return redirect('/berita');
    }
}
