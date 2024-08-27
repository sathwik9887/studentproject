@extends('layouts')
@section('content')

<div class="card">
  <div class="card-header">View Payout</div>
  <div class="card-body">

      <form action="{{ url('payouts/' .$payouts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$payouts->id}}" id="id" />

        <label for="teacher_id">Teacher Name</label>
        <select id="teacher_id" name="teacher_id" class="form-control" disabled>
            <option value="">--- Select teacher ---</option>
            @foreach ($teacher as $item)
                <option value="{{ $item->id }}" {{ $item->id == $payouts->teacher_id ? 'selected' : '' }}>
                    {{ $item->name }}
                </option>
            @endforeach
        </select></br>


        <label>Payout</label></br>
        <input type="number" name="price" id="price" value="{{ $payouts->price }}" class="form-control" placeholder="Payout" disabled></br>

        <input type="submit" value="Update" class="btn btn-success">
        <a href="{{ route('payouts.index') }}" class="btn btn-danger">Back</a>

    </form>

  </div>
</div>

@stop
