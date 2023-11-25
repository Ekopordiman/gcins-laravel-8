<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Casts;

class CastController extends Controller
{
    public function index()
    {
        $casts = Casts::all();
        return view('cast.index', compact('casts'));
    }

    public function create()
    {
        return view('cast.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'bio' => 'required',
        ]);

        Casts::create([
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
            'bio' => $request->input('bio'),
        ]);

        return redirect('/cast')->with('success', 'Data pemain film berhasil disimpan');
    }

    public function show($cast_id)
    {
        $cast = Casts::findOrFail($cast_id);
        return view('cast.show', compact('cast'));
    }

    public function edit($cast_id)
    {
        $cast = Casts::findOrFail($cast_id);
        return view('cast.edit', compact('cast'));
    }

    public function update(Request $request, $cast_id)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'bio' => 'required',
        ]);

        $cast = Casts::findOrFail($cast_id);
        $cast->update([
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
            'bio' => $request->input('bio'),
        ]);

        return redirect('/cast')->with('success', 'Data pemain film berhasil diperbarui');
    }

    public function destroy($cast_id)
    {
        $cast = Casts::findOrFail($cast_id);
        $cast->delete();

        return redirect('/cast')->with('success', 'Data pemain film berhasil dihapus');
    }
}