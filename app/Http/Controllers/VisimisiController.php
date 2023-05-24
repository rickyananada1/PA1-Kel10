<?php

namespace App\Http\Controllers;

use App\Models\Visimisi;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visimisi = Visimisi::all();
        return view('VisiMisi.index',compact('visimisi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('VisiMisi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'visi' => 'required',
            'misi' => 'required'
        ]);

        $visimisi = new Visimisi;
        $visimisi ->visi = $request->visi;
        $visimisi ->misi = $request->misi;
        $visimisi->save();

        return redirect('/VisiMisi')->with('success','Data Berhasil Ditambah');
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
        return view('VisiMisi.edit')->with([
            'visimisi' => Visimisi::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required'
        ]);

        $visimisi = Visimisi::find($id);
        $visimisi->visi = $request->visi;
        $visimisi->misi = $request->misi;
        $visimisi->update();

        return redirect('/VisiMisi')->with('success');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $visimisi = Visimisi::find($id)->where('id',$id)->delete();

        return redirect('/VisiMisi');
    }
}
