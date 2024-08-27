<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $teacher = Teacher::all();
        return view('teacher.index', ['teacher' => $teacher]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $teacher = Teacher::create($request->all());
        return redirect()->route('teacher.index')->with('success', 'Record Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = Teacher::find($id);
        return view('teacher.show', ['teacher' => $teacher]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::find($id);
        return view('teacher.edit', ['teacher' => $teacher]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'mobile' => 'required|digits:10',
            // other validation rules
        ]);
        $teacher = Teacher::find($id);
        $teacher->update($request->all());
        return redirect()->route('teacher.index')->with('success', 'Record Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Teacher::find($id)->delete();
       return redirect()->route('teacher.index')->with('success', 'Record Deleted Successfully');
    }
}
