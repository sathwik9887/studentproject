@extends('layouts')
@section('content')

<div class="card">
  <div class="card-header">Add Payout</div>
  <div class="card-body">

      <form action="{{ url('payouts') }}" method="post">
        {!! csrf_field() !!}


            <label for="teacher_id">Teacher Name</label>
            <select id="teacher_id" name="teacher_id" class="form-control" required>
                <option value="">--- Select teacher ---</option>
                @foreach ($teacher as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select></br>



        <label>Payout</label></br>
        <input type="number" name="price" id="price" class="form-control" placeholder="Payout" required></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
