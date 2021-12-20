@extends('layouts.app')
@section('page-title','welcome')

<!-- @section('custom-css')
<link href="{{asset('css/appN.css')}}" rel="stylesheet">
@endsection -->

@section('content')
<div class="container-fluid d-flex flex-column align-items-center">
    <div class="container d-flex flex-wrap justify-content-center">
        @foreach($fumetti_arrey as $card)
            <div class="card-box">
                <img src="{{$card['thumb']}}" alt="">
                <p>{{$card['title']}}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection


