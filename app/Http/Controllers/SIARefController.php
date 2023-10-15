<?php

namespace App\Http\Controllers;

use App\Models\SIARef;
use Illuminate\Http\Request;

class SIARefController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sIARefs = SIARef::all();
        return view('sia.index', compact('sIARefs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sia.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'siaRef_kod' => 'required',
            'siaRef_desc' => 'required',
            'created_at' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
            
        ]);

        SIARef::create($validatedData);

        return redirect()->route('sia.index')->with('success', 'SIA created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(SIARef $sIARef)
    {
        return view('sia.show', compact('sIARef'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SIARef $sIARef)
    {
        return view('sia.edit', compact('sIARef'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SIARef $sIARef)
    {
        $validatedData = $request->validate([
            'siaRef_kod' => 'required',
            'siaRef_desc' => 'required',
        ]);

        $sIARef->update($validatedData);

        return redirect()->route('sia.index')->with('success', 'SIA updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SIARef $sIARef)
    {
        $sIARef->delete();

        return redirect()->route('sia.index')->with('success', 'SIA deleted successfully!');
    }
}
