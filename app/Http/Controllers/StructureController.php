<?php

namespace App\Http\Controllers;

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
        $requestData = $request->all();
        if ($request->hasFile('photo')) {
            $fileName = time() . '_' . $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('public/images', $fileName);
            $requestData['photo'] = 'storage/images/' . $fileName;
        }
        Structure::create($requestData);
        return redirect('structure')->with('flash_message', 'Employee Added!');
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
            'address' => 'required',
            'mobile' => 'required',
            'photo' => 'required',
        ]);

        $structure = Structure::find($id);
        $structure->name = $request->name;
        $structure->address = $request->address;
        $structure->mobile = $request->mobile;
        $structure->photo = $request->photo;
        $structure->save();

        return to_route('structure.index')->with('succes', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $structure = Structure::find($id)->where('id', $id)->delete();
        return redirect('/structure');
    }
}
