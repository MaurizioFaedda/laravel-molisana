@extends('layout.app')

@section('title', 'Dettagli - La Molisana')

@section('content')
    <div class="section-dettagli">
        <div class="text-titolo-pasta">
            <h1>{{$pasta['titolo']}}</h1>

        </div>
        <div class="img-title-pasta">
            <img src="{{ $pasta['src-h'] }}" alt="{{ $pasta['titolo'] }}">
        </div>
        <div class="main-pasta">
            <img src="{{ $pasta['src-p'] }}" alt="{{ $pasta['titolo'] }}">
        </div>
    </div>
    <div class="info-section">

        <div class="container">
            <div class="infos-pasta">
                <h4>Peso: {{$pasta['peso']}}</h4>
                <h4>Cottura: {{$pasta['cottura']}}</h4>
            </div>
            <div class="descrizione">{!! $pasta['descrizione'] !!}</div>
        </div>
    </div>
@endsection
