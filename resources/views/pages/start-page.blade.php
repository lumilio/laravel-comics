@extends('layouts.app')
@section('page-title','welcome')

<!-- @section('custom-css')
<link href="{{asset('css/appN.css')}}" rel="stylesheet">
@endsection -->

@section('content')
<div class="container-fluid"></div>
<div class="container-fluid bg-dark d-flex flex-column align-items-center">
    <div class="container d-flex flex-wrap justify-content-center">
        @foreach($fumetti_arrey as $card)
            @if($card['series'] == "Action Comics")
                <a class="card-box" href="{{  route('1')  }}">
                    <img src="{{$card['thumb']}}" alt="">
                    <p>{{strtoupper($card['series'])}}</p>
                </a>
            @elseif($card['series'] == "American Vampire 1976")
                <a class="card-box" href="{{  route('2')  }}">
                    <img src="{{$card['thumb']}}" alt="">
                    <p>{{strtoupper($card['series'])}}</p>
                </a>
            @elseif($card['series'] == "Aquaman")
                <a class="card-box" href="{{  route('3')  }}">
                    <img src="{{$card['thumb']}}" alt="">
                    <p>{{strtoupper($card['series'])}}</p>
                </a>
            @else 
                <div class="card-box">
                    <img src="{{$card['thumb']}}" alt="">
                    <p>{{strtoupper($card['series'])}}</p>
                </div>
            @endif
        @endforeach
    </div>
    <button>LOAD MORE</button>
</div>
<div class="container-fluid d-flex justify-content-center banner">
    <div class="container d-flex justify-content-center ">
        <ul class='d-flex align-items-center justify-content-center' id='banner-list'>
            @foreach($banner_arrey as $item)
                <li>  <a><img src="{{ asset('/img/'.$item['image']) }}"  alt="">{{$item['label']}}</a></li> 
            @endforeach
        </ul>
    </div>
</div>
@endsection


