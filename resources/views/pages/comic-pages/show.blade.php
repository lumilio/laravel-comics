@extends('layouts.app')
@section('page-title','comic page')


@section('content')
 <a class="card-box" href="#">
    <img src="{{$item_fumetti_arrey['thumb']}}" alt="">
    <p>{{strtoupper($item_fumetti_arrey['series'])}}</p>
    <!-- {{ddd($item_fumetti_arrey)}} -->
</a>
@endsection