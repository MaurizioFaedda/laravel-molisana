@extends('layout.app')

@section('title', 'Dettagli - La Molisana')

@section('content')
    <div class="section-dettagli">
        <div class="text-titolo-pasta">
            <h2>{{$pasta['titolo']}}</h2>

        </div>
        <div class="img-title-pasta">
            <img src="{{ $pasta['src-h'] }}" alt="{{ $pasta['titolo'] }}">
        </div>
        <div class="main-pasta">
            <img src="{{ $pasta['src-p'] }}" alt="{{ $pasta['titolo'] }}">
        </div>

    </div>
@endsection
