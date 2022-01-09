@extends('layouts.app')
@section('page-title','comic page')


@section('content')
<div class="container-fluid d-flex justify-content-center fluid3">
    <div class="container d-flex justify-content-center align-items-center card-box-show">
        <p class='big-text margineextra '>{{$menu_item_arrey['testo']}}</p>
    </div>
</div>
@endsection