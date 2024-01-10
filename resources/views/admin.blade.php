<!-- resources/views/strona.blade.php -->

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
                    <!-- Dodaj inne informacje, jeśli są potrzebne -->
                </div>
            </div>
        @endforeach
    </div>
@endsection
