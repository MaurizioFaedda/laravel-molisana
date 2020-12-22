@extends('layout.app')

@section('title', 'Prodotti - La Molisana')

@section('content')
    <div class="section-prodotti" style="background-image: url({{asset('images/sfondo-la-molisana.jpg')}});">
        <div class="container">

            <div class="cards-box">

                <h1> Le lunghe </h1>
                <div class="card-box-type">
                    @foreach ($pasta as $value)
                        @if ($value['tipo'] === 'lunga')
                            <div class="card">
                                <div class="img-pasta">
                                    <img src="{{$value["src"]}}" alt="">
                                </div>

                            </div>
                        @endif
                    @endforeach
                </div>

                <h1> Le corte </h1>
                <div class="card-box-type">
                    @foreach ($pasta as $value)
                        @if ($value['tipo'] === 'corta')
                            <div class="card">
                                <div class="img-pasta">
                                    <img src="{{$value["src"]}}" alt="">
                                </div>

                            </div>
                        @endif
                    @endforeach
                </div>

                <h1> Le cortissime </h1>
                <div class="card-box-type">
                    @foreach ($pasta as $value)
                        @if ($value['tipo'] === 'cortissima')
                            <div class="card">
                                <div class="img-pasta">
                                    <img src="{{$value["src"]}}" alt="">
                                </div>

                            </div>
                        @endif
                    @endforeach
                </div>

            </div>

        </div>
    </div>
@endsection
