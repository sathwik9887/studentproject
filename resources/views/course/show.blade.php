@extends('layouts')
@section('content')

<div class="card">
    <div class="card-header">View Course</div>
    <div class="card-body">
        <!-- Display data without a form -->
        <div>
            <label>Course Name</label></br>
            <input type="text" name="course_name" id="course_name" value="{{ $course->course_name }}" class="form-control" placeholder="Course Name" disabled></br>
        </div>
        <div>
            <label>Course Code</label></br>
            <input type="text" name="course_code" id="course_code" value="{{ $course->course_code }}" class="form-control" placeholder="Course Code" disabled></br>
        </div>
        <div>
            <label>Price</label></br>
            <input type="number" name="price" id="price" value="{{ $course->price }}" class="form-control" min="0"   placeholder="Price" disabled></br>
        </div>
        <!-- Back and Edit Buttons -->
        <a href="{{ route('course.index') }}" class="btn btn-danger">Back</a>

    </div>
</div>

@stop
