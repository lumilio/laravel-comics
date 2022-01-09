@extends('layouts.app')
@section('page-title','comic page')


@section('content')
<div class="container-fluid d-flex justify-content-center fluid3">
    <div class="container d-flex justify-content-center align-items-center card-box-show">
        <div>
            <img src="{{$item_fumetti_arrey['thumb']}}" alt="">
            <p>{{strtoupper($item_fumetti_arrey['series'])}}</p>
        </div>
        <p class='big-text'>{{$item_fumetti_arrey['description']}}</p>
    </div>
</div>
@endsection