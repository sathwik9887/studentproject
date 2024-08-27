@extends('layouts')
@section('content')

<div class="card">
  <div class="card-header">Add Batch</div>
  <div class="card-body">

      <form action="{{ url('batch') }}" method="post">
        {!! csrf_field() !!}
        <label>Batch Name</label></br>
        <input type="text" name="batch_name" id="batch_name" class="form-control" placeholder="Batch Name" required></br>

            <label for="course_id">Course Name</label>
            <select id="course_id" name="course_id" class="form-control" required>
                <option value="">--- Select course ---</option>
                @foreach ($course as $item)
                    <option value="{{ $item->id }}">{{ $item->course_name }}</option>
                @endforeach
            </select></br>



        <label>Start Date</label></br>
        <input type="date" name="start_date" id="start_date" class="form-control" placeholder="Start Date" required></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
