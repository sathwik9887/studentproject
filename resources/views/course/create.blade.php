@extends('layouts')
@section('content')

<div class="card">
  <div class="card-header">Add Course</div>
  <div class="card-body">

      <form action="{{ url('course') }}" method="post">
        {!! csrf_field() !!}
        <label>Course Name</label></br>
        <input type="text" name="course_name" id="course_name" class="form-control" placeholder="Course Name" required></br>
        <label>Course Code</label></br>
        <input type="text" name="course_code" id="course_code" class="form-control" placeholder="Course Code" required></br>
        <label>Price</label></br>
        <input type="number" name="price" id="price" class="form-control" placeholder="Price" min="0" required></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
