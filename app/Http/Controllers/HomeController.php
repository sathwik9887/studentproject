<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Payouts;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index() : View
{


    $teacher = Teacher::count();
    $student = Student::count();
    $batch = Batch::count();
    $payouts = Payouts::count();



    return view('home.index', [
        'teacher' => $teacher,
        'student' => $student,
        'batch' => $batch,
        'payouts' => $payouts
    ]);
}

}

