@extends('layouts.app')


@section('content')

<div class="container">
    <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="img-fluid">
    <h1>{{$comic->title}}</h1>
    <span>{{$comic->price}}</span>
    <span>{{$comic->series}}</span>
    <span>{{$comic->sale_date}}</span>
    <span>{{$comic->type}}</span>
    <span>{{$comic->description}}</span>
</div>


@endsection