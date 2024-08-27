@extends('layouts')

@section('content')
<div class="container mt-2">
    <div class="row">
        <!-- First Box -->
        <div class="col-md-12">
            <div class="card text-center bg-primary text-white mb">
                <div class="card-body">
                    <h2 class="card-title">Hello</h2>

                </div>
            </div>
        </div>

        <!-- Second Box -->

        <!-- Fourth Box -->
    </div>
</div>
    <div class="container mt-5">
        <div class="row">
            <!-- First Box -->
            <div class="col-md-3">
                <div class="card text-center bg-primary text-white mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Students</h5>
                        <p class="card-text">Total: {{ $student }}</p>
                    </div>
                </div>
            </div>

            <!-- Second Box -->
            <div class="col-md-3">
                <div class="card text-center bg-success text-white mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Teachers</h5>
                        <p class="card-text">Total: {{ $teacher }}</p>
                    </div>
                </div>
            </div>

            <!-- Third Box -->
            <div class="col-md-3">
                <div class="card text-center bg-warning text-white mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Batches</h5>
                        <p class="card-text">Total: {{ $batch }}</p>
                    </div>
                </div>
            </div>

            <!-- Fourth Box -->
            <div class="col-md-3">
                <div class="card text-center bg-danger text-white mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Payouts</h5>
                        <p class="card-text">Total: {{ $payouts }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
