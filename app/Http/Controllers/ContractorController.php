<?php

namespace App\Http\Controllers;

use App\Models\Contractor;
use Illuminate\Http\Request;

class ContractorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contractors = Contractor::all();
        return view('contractors.index', compact('contractors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contractors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'contact_person' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255|unique:contractors',
        ]);

        Contractor::create($request->all());

        return redirect()->route('contractors.index')
                         ->with('success', 'Müteahhit başarıyla eklendi.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contractor $contractor)
    {
        return view('contractors.show', compact('contractor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contractor $contractor)
    {
        return view('contractors.edit', compact('contractor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contractor $contractor)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'contact_person' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255|unique:contractors,email,'.$contractor->id,
        ]);

        $contractor->update($request->all());

        return redirect()->route('contractors.index')
                         ->with('success', 'Müteahhit başarıyla güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contractor $contractor)
    {
        $contractor->delete();

        return redirect()->route('contractors.index')
                         ->with('success', 'Müteahhit başarıyla silindi.');
    }
}
