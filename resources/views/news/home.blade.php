@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    
    <div class="row mt-5">
        <div class="col s12 m7">
            <img 
                src="{{ asset('assets/paradise.jpeg') }}" 
                alt=""
                class="responsive-img col s12"
                id="img-main"
            />
            <div class="center-align">
                <p>CATEGORIA</h5>
                <p>Manchete</h3>
                <p>Por Pessoa Silva</p>
            </div>
        </div>

        <div class="col s12 m5">
            <p>Em alta</p>
        </div>
    </div>
@endsection

@section('scripts')

@endsection