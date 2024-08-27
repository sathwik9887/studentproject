@extends('layouts')
@section('content')

<div class="card">
  <div class="card-header">Add Student</div>
  <div class="card-body">

      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" placeholder="Name" required></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control" placeholder="Address" required></br>
        <label>Mobile</label></br>
        <input type="number" name="mobile" id="mobile" class="form-control" placeholder="Mobile" pattern="\d{10}" maxlength="10" minlength="10" required></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
