<!-- strona glowna  -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                Strona Główna
            </div>
           <div class="card">
           <img src="{{ asset('images/mechanik.jpg') }}" />
        </div>
    </div>
</div>
@endsection
