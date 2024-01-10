<!-- 
@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($zgloszenia as $zgloszenie)
            <div class="card mb-3">
                <div class="card-header">{{ $zgloszenie->wlasciciel }}</div>
                <div class="card-body">
                    <p>Marka pojazdu: {{ $zgloszenie->marka_pojazdu }}</p>
                    <p>Model pojazdu: {{ $zgloszenie->model_pojazdu }}</p>
                    <p>Usterka: {{ $zgloszenie->usterka }}</p>
                    
                </div>
            </div>
        @endforeach
    </div>
@endsection
 -->

 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet">
        <title>Zgloszenia</title>
    </head>
    <bod class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="display-6 text center">Fatech Data From Database in PHP</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </bod>
</html>