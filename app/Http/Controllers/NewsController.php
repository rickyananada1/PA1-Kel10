<?php

namespace App\Http\Controllers;

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
        return view('berita.index')->with('berita', $news);
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
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/images', $fileName);
            $requestData['image'] = 'storage/images/' . $fileName;
        }
        News::create($requestData);
        return redirect('berita')->with('flash_message', 'Berita Ditambah!');
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
            'news'=>News::find($id),
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
            'image' => 'required',
        ]);

        $news = News::find($id);
        $news->judul = $request->judul;
        $news->isi = $request->isi;
        $news->image = $request->image;
        $news->save();

        return to_route('berita.index')->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::find($id)->where('id',$id)->delete();
        return redirect('/berita');
    }
}
