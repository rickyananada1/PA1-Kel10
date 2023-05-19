<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengumuman = Pengumuman::all();
        return view('pengumuman.index', compact('pengumuman'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengumuman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $pengumuman = new Pengumuman;
        $pengumuman->title = $request->title;
        $pengumuman->description = $request->description;
        $pengumuman->save();

        return redirect('/pengumuman')->with('success', 'Pengumuman Sudah Ditambah');
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
        return view('pengumuman.edit')->with([
            'pengumuman' => Pengumuman::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request -> validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $pengumuman = Pengumuman::find($id);
        $pengumuman->title = $request->title;
        $pengumuman->description = $request->description;
        $pengumuman->save();

        return to_route('pengumuman.index')->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengumuman = Pengumuman::find($id)->where('id',$id)->delete();

        return redirect('/pengumuman');
    }
}
