<!-- resources/views/admin.blade.php -->

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
                @foreach($zgloszenie as $zgloszenia)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Właściciel: {{$zgloszenia -> wlasciciel}}</p>
                            <p class="card-text">Marka Pojazdu: {{$zgloszenia -> markaPojazdu}}</p>
                            <p class="card-text">Model Pojazdu: {{$zgloszenia -> modelPojazdu}}</p>
                            <p class="card-text">Usterka: {{$zgloszenia -> usterka}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    <div>
@endsection


