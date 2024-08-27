@extends('layouts')
@section('content')

<div class="card">
  <div class="card-header">Edit Course</div>
  <div class="card-body">

      <form action="{{ url('course/' .$course->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$course->id}}" id="id" />
        <label>Course Name</label></br>
        <input type="text" name="course_name" id="course_name" value="{{$course->course_name}}" class="form-control" placeholder="Course Name" required></br>
        <label>Course Name</label></br>
        <input type="text" name="course_code" id="course_code" value="{{$course->course_code}}" class="form-control" placeholder="Course Code" required></br>
        <label>Price</label></br>
        <input type="number" name="price" id="price" value="{{ $course->price }}" class="form-control" min="0" placeholder="Price" required></br>

        <input type="submit" value="Update" class="btn btn-success">
        <a href="{{ route('course.index') }}" class="btn btn-danger">Back</a>

    </form>

  </div>
</div>

@stop
