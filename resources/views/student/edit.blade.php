@extends('layouts')
@section('content')

<div class="card">
  <div class="card-header">Edit Student</div>
  <div class="card-body">

      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control" placeholder="Name" required></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control" placeholder="Address" required></br>
        <label>Mobile</label></br>
        <input type="number" name="mobile" id="mobile" value="{{ $students->mobile }}" class="form-control" pattern="\d{10}" placeholder="Mobile" required></br>

        <input type="submit" value="Update" class="btn btn-success">
        <a href="{{ route('student.index') }}" class="btn btn-danger">Back</a>

    </form>

  </div>
</div>

@stop
