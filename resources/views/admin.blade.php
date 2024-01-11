<!-- resources/views/admin.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <ul>
                @foreach($zgloszenie as $zgloszenia)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <li class="card-text">Właściciel: {{$zgloszenia -> wlasciciel}}</li>
                            <li class="card-text">Marka Pojazdu: {{$zgloszenia -> markaPojazdu}}</li>
                            <li class="card-text">Model Pojazdu: {{$zgloszenia -> modelPojazdu}}</li>
                            <li class="card-text">Usterka: {{$zgloszenia -> usterka}}</li>
                        </div>
                    </div>
                </div>
                @endforeach
            </ul>
        </div>
    <div>
@endsection


