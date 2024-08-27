<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
{
    $students = Student::all();
    return view('student.index', ['students' => $students]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
{

    $student = Student::create($request->all());
    return redirect()->route('student.index')->with('success', 'Record Added Successfully');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $students = Student::find($id);
        return view('student.show', ['students' => $students]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $students = Student::find($id);
        return view('student.edit', ['students' => $students]);
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
        $student = Student::find($id);
        $student->update($request->all());
        return redirect()->route('student.index')->with('success', 'Record Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Student::find($id)->delete();
       return redirect()->route('student.index')->with('success', 'Record Deleted Successfully');
    }
}
