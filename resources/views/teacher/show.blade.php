@extends('layouts')
@section('content')

<div class="card">
    <div class="card-header">View Teacher</div>
    <div class="card-body">
        <!-- Display data without a form -->
        <div>
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{ $teacher->name }}" class="form-control" disabled></br>
        </div>
        <div>
            <label>Address</label></br>
            <input type="text" name="address" id="address" value="{{ $teacher->address }}" class="form-control" disabled></br>
        </div>
        <div>
            <label>Mobile</label></br>
            <input type="text" name="mobile" id="mobile" value="{{ $teacher->mobile }}" class="form-control" disabled></br>
        </div>
        <!-- Back and Edit Buttons -->
        <a href="{{ route('teacher.index') }}" class="btn btn-danger">Back</a>

    </div>
</div>

@stop
