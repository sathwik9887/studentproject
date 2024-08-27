<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $course = Course::orderBy('created_at', 'desc')->get();;
        return view('course.index', ['course' => $course]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $course = Course::create($request->all());
        return redirect()->route('course.index')->with('success', 'Record Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::find($id);
        return view('course.show', ['course' => $course]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::find($id);
        return view('course.edit', ['course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $course = Course::find($id);
        $course->update($request->all());
        return redirect()->route('course.index')->with('success', 'Record Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Course::find($id)->delete();
       return redirect()->route('course.index')->with('success', 'Record Deleted Successfully');
    }
}
