<?php

namespace App\Http\Controllers;

use App\Models\Armada;
use Illuminate\Http\Request;

class ArmadaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kendaraan=$request->input('param1');
        $ketersediaan=$request->input('param2');
        $armadas = Armada::search([
            'kendaraan'=>$kendaraan, 
            'ketersediaan'=>$ketersediaan,
        ])->get();
        return view('armada.index', [
            'armadas'=>$armadas, 
            'kendaraan'=>$kendaraan, 
            'ketersediaan'=>$ketersediaan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('armada.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kendaraan' => 'required',
            'ketersediaan' => 'required',
            'kapasitas' => 'required|integer',
        ]);

        Armada::create($validatedData);
        return redirect(route('armada.index'))->with('success', 'New file has been added');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Armada $armada)
    {
        return view('armada.edit', ['armada'=>$armada]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Armada $armada)
    {
        $validatedData = $request->validate([
            'kendaraan' => 'required',
            'ketersediaan' => 'required',
            'kapasitas' => 'required|integer',
        ]);

        Armada::where('id', $armada->id)->update($validatedData);
        return redirect(route('armada.index'))->with('success', 'Armada '.$armada->id.' has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Armada $armada)
    {
        Armada::destroy($armada->id);
        return redirect(route('armada.index'))->with('success', 'Armada '.$armada->id.' has been deleted');
    }
}
