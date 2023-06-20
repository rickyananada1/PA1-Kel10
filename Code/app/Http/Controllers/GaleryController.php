<?php

namespace App\Http\Controllers;

use File;
use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galery = Galery::All();
        return view('galery.index')->with('galery',$galery);
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
        $alert = [
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,png,jpeg',
        ];
        $message = [
            'name.required' => 'Kolom Nama Harus Di Isi',
            'image.required' => 'Image Harus Di Isi',
            'image.mimes' => 'Harus Berupa JPG,PNG,JPEG',
        ];
        $this->validate($request, $alert, $message);
        $file = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/galery'),$file);

        $galery = new Galery;

        $galery->name = $request->name;
        $galery->image = $file;

        $galery->save();
        return redirect('galery')->with('flash_message', 'Berita Ditambah!');
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
        return view("galery.edit")->with([
            'galery'=>Galery::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request -> validate([
            'name' => 'required'
        ]);

        $galery = Galery::find($id);
        if ($request->has('image')) {
            $path = 'images/galery/';
            File::delete($path . $galery->image);
            $file = time() . '.' . $request->image->extension();

            $request->image->move(public_path('images/galery'), $file);

            $galery->image = $file;
            $galery->save();
        }

        $galery->name = $request['name'];
        $galery->update();

        return to_route('galery.index')->with('succes','Galery Sudah Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galery = Galery::find($id);
        $path = 'images/galery/';
        File::delete($path. $galery->image);
        $galery->delete();
        return redirect('/galery');
    }
}
