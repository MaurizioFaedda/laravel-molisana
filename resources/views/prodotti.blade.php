@extends('layout.app')

@section('title', 'Prodotti - La Molisana')

@section('content')
    <div class="section-prodotti" style="background-image: url({{asset('images/sfondo-la-molisana.jpg')}});">
        <div class="container">

            <div class="cards-box">

                <h1> Le lunghe </h1>
                <div class="card-box-type">
                    @foreach ($pasta as $key => $value)
                        @if ($value['tipo'] === 'lunga')
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
                <h1> Le corte </h1>
                <div class="card-box-type">
                    @foreach ($pasta as $value)
                        @if ($value['tipo'] === 'corta')
                            <div class="card">
                                <img src="{{$value["src"]}}" alt="">
                                <a href="#">
                                    <div class="overlay">
                                        <h2>{{$value['titolo']}}</h2>
                                    </div>
                                </a></div>
                        @endif
                    @endforeach
                </div>
                <h1> Le cortissime </h1>
                <div class="card-box-type">
                    @foreach ($pasta as $value)
                        @if ($value['tipo'] === 'cortissima')
                            <div class="card">
                                <img src="{{$value["src"]}}" alt="">
                                <a href="#">
                                    <div class="overlay">
                                        <h2>{{$value['titolo']}}</h2>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>

            </div>

        </div>
    </div>
@endsection
