@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Zgłoś naprawę') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="Właściciel" class="col-md-4 col-form-label text-md-end">{{ __('Właściciel') }}</label>

                            <div class="col-md-6">
                                <input id="Właściciel" type="text" class="form-control " name="Właściciel" required autofocus>

                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="MarkaPojazdu" class="col-md-4 col-form-label text-md-end">{{ __('Marka pojazdu') }}</label>

                            <div class="col-md-6">
                                <input id="MarkaPojazdu" type="text" class="form-control"  value required  autofocus onkeydown="return /[a-z]/i.test(event.key)">

                               
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="ModelPojazdu" class="col-md-4 col-form-label text-md-end">{{ __('Model Pojazdu') }}</label>

                            <div class="col-md-6">
                                <input id="ModelPojazdu" type="text" class="form-control " name="ModelPojazdu" required autofocus>

                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Usterka" class="col-md-4 col-form-label text-md-end">{{ __('Usterka') }}</label>

                            <div class="col-md-6">
                                <input id="Usterka" type="text" class="form-control " name="Usterka" required autofocus>

                                
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