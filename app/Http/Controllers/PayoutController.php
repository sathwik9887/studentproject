<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payouts;
use App\Models\Teacher;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $payout = Payouts::orderBy('created_at', 'desc')->get();;
        $teacher = Teacher::all();
        return view('payouts.index', ['payout' => $payout, 'teacher' => $teacher]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $teacher = Teacher::all();
        return view('payouts.create', ['teacher' => $teacher ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $payouts = Payouts::create($request->all());
        return redirect()->route('payouts.index')->with('success', 'Record Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payouts = Payouts::find($id);
        $teacher = Teacher::all();
        return view('payouts.show', ['payouts' => $payouts, 'teacher' => $teacher]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $payouts = Payouts::find($id);
        $teacher = Teacher::all();
        return view('payouts.edit', ['payouts' => $payouts, 'teacher' => $teacher]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $payouts = Payouts::find($id);
        $payouts->update($request->all());
        return redirect()->route('payouts.index')->with('success', 'Record Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Payouts::find($id)->delete();
       return redirect()->route('payouts.index')->with('success', 'Record Deleted Successfully');
    }
}
