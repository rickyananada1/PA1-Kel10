<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use App\Models\Structure;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $structures = Structure::All();
        return view('structure.index')->with('structures', $structures);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('structure.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/structure'),$file);

        $structure = new Structure;

        $structure->name = $request->name;
        $structure->jabatan = $request->jabatan;
        $structure->address = $request->address;
        $structure->mobile = $request->mobile;
        $structure->image = $file;

        $structure->save();
        return redirect('structure')->with('flash_message', 'Data Sudah Ditambah!');
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
        return view('structure.edit')->with([
            'structure' => Structure::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'jabatan' => 'required',
            'address' => 'required',
            'mobile' => 'required',
        ]);

        $structure = Structure::find($id);
        if ($request->has('image')) {
            $path = 'images/structure/';
            File::delete($path . $structure->image);
            $file = time() . '.' . $request->image->extension();

            $request->image->move(public_path('images/structure'), $file);

            $structure->image = $file;
            $structure->save();
        }

        $structure->name = $request['name'];
        $structure->jabatan = $request['jabatan'];
        $structure->address = $request['address'];
        $structure->mobile = $request['mobile'];
        $structure->update();

        return to_route('structure.index')->with('succes', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $structure = Structure::find($id);
        $path = 'images/structure/';
        File::delete($path. $structure->image);
        $structure->delete();
        return redirect('/structure');
    }
}
