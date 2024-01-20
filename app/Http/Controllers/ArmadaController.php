<?php

namespace App\Http\Controllers;

use App\Models\Armada;
use Illuminate\Http\Request;

class ArmadaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $armadas = Armada::all();
        return view('armada.index', ['armadas'=>$armadas]);
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
        // echo "storing armada";
    }

    /**
     * Display the specified resource.
     */
    public function show(Armada $armada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Armada $armada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Armada $armada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Armada $armada)
    {
        //
    }
}
