@extends('layout.app')

@section('title', 'Prodotti - La Molisana')

@section('content')
    <div class="section-prodotti" style="background-image: url({{asset('images/sfondo-la-molisana.jpg')}});">
        <div class="container">

            <div class="cards-box">

                    @foreach ($pasta as $tipo => $pasta)
                        <h1> {{$tipo}} </h1>
                        <div class="card-box-type">
                            @foreach ($pasta as $indice => $value)
                                <div class="card">
                                    <img src="{{$value["src"]}}" alt="">
                                    <a href="{{ route('prodotto', ['id' => $indice])}}">
                                        <div class="overlay">
                                            <h2>{{$value['titolo']}}</h2>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                {{-- <h1> Le corte </h1>
                <div class="card-box-type">
                    @foreach ($pasta as $value)
                        @if ($value['tipo'] === 'corta')
                            <div class="card">
                                <img src="{{$value["src"]}}" alt="">
                                <a href="{{ route('prodotto', ['id' => $key])}}">
                                    <div class="overlay">
                                        <h2>{{$value['titolo']}}</h2>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
                <h1> Le cortissime </h1>
                <div class="card-box-type">
                    @foreach ($pasta as $value)
                        @if ($value['tipo'] === 'cortissima')
                            <div class="card">
                                <img src="{{$value["src"]}}" alt="">
                                <a href="{{ route('prodotto', ['id' => $key])}}">
                                    <div class="overlay">
                                        <h2>{{$value['titolo']}}</h2>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div> --}}

            </div>

        </div>
    </div>
@endsection
