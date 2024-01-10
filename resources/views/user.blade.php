@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Zgłoś naprawę') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('zapisz.zgloszenie') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="wlasciciel" class="col-md-4 col-form-label text-md-end">{{ __('Właściciel') }}</label>

                            <div class="col-md-6">
                                <input id="wlasciciel" type="text" class="form-control " name="wlasciciel" required autofocus>  
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="markaPojazdu" class="col-md-4 col-form-label text-md-end">{{ __('Marka pojazdu') }}</label>

                            <div class="col-md-6">
                                <input id="markaPojazdu" type="text" class="form-control" name="markaPojazdu" value required  autofocus onkeydown="return /[a-z]/i.test(event.key)">   
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="modelPojazdu" class="col-md-4 col-form-label text-md-end">{{ __('Model Pojazdu') }}</label>

                            <div class="col-md-6">
                                <input id="modelPojazdu" type="text" class="form-control " name="modelPojazdu" required autofocus>

                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="usterka" class="col-md-4 col-form-label text-md-end">{{ __('Usterka') }}</label>

                            <div class="col-md-6">
                                <input id="usterka" type="text" class="form-control " name="usterka" required autofocus>

                                
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Potwierdź') }}
                                </button>

                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- strona usera -->