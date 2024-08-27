<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Course;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {

        $batch = Batch::orderBy('created_at', 'desc')->get();;
        $course = Course::all();
        return view('batch.index', ['batch' => $batch, 'course' => $course ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $course = Course::all();
        return view('batch.create', ['course' => $course ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $course = Batch::create($request->all());
        return redirect()->route('batch.index')->with('success', 'Record Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $batch = Batch::find($id);
        $course = Course::all();
        return view('batch.show', ['batch' => $batch, 'course' => $course]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $batch = Batch::find($id);
        $course = Course::all();
        return view('batch.edit', ['batch' => $batch, 'course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $batch = Batch::find($id);
        $batch->update($request->all());
        return redirect()->route('batch.index')->with('success', 'Record Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $batch = Batch::find($id);
       $batch->delete();
       return redirect()->route('batch.index')->with('success', 'Record Deleted Successfully');
    }
}
