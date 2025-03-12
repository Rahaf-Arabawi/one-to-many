<?php

namespace App\Http\Controllers;

use App\Models\coachs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoachsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coachs = coachs::all();
        return view('coachs.index', compact('coachs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('coachs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/coaches', 'public');
        }

        $coach = coachs::create([
            'name' => $request->name,
            'image' => $imagePath ?? null, 
        ]);

        return redirect()->route('coachs.index'); 
    
    }

    /**
     * Display the specified resource.
     */
    public function show(coachs $coachs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $coachs = coachs::where('id',$id)->first();
        return view('coachs.edit', compact('coachs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $coachs = coachs::findOrFail($id);
        $coachs -> name = $request -> name;
        $coachs -> image = $request -> image;
        $coachs -> save();
        return redirect()->route('coachs.index');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       coachs::destroy($id);
        return redirect()->route('coachs.index');
    }
}
