<?php

namespace App\Http\Controllers;

use App\Models\coachs;
use App\Models\students;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = students::all();
        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $coachs = Coachs::all();
        return view('students.create',compact('coachs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'coach_id' => 'required|exists:coachs,id'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/students', 'public');
        }

        $students = students::create([
            'name' => $request->name,
            'image' => $imagePath ?? null, 
            'coach_id' => $request->coach_id,
        ]);

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $students = students::where('id',$id)->first();
        return view('students.index',compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $students = coachs::findOrFail($id);
        $students -> name = $request -> name;
        $students -> image = $request -> image;
        $students -> coach_id = $request -> coach_id;
        $students-> save();
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        students::destroy($id);
        return redirect()->route('students.index');
    }
}
