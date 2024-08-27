@extends('layouts')
@section('content')

<div class="card">
  <div class="card-header">view Batch</div>
  <div class="card-body">

      <form action="{{ url('batch/' .$batch->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$batch->id}}" id="id" />
        <label>Batch Name</label></br>
        <input type="text" name="batch_name" id="batch_name" value="{{$batch->batch_name}}" class="form-control" placeholder="Batch Name" disabled></br>
        <label for="course_id">Course Name</label>
        <select id="course_id" name="course_id" class="form-control" disabled>
            <option value="">--- Select course ---</option>
            @foreach ($course as $item)
                <option value="{{ $item->id }}" {{ $batch->course_id == $item->id ? 'selected' : '' }}>
                    {{ $item->course_name }}
                </option>
            @endforeach
        </select><br>
        <label>Start Date</label></br>
        <input type="date" name="start_date" id="start_date" value="{{ $batch->start_date }}" class="form-control" placeholder="Start Date" disabled></br>

        <input type="submit" value="Update" class="btn btn-success">
        <a href="{{ route('batch.index') }}" class="btn btn-danger">Back</a>

    </form>

  </div>
</div>

@stop
