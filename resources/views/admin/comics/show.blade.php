@extends('layouts.app')

@section('page_title', 'Show')

@section('content')

<div class="container py-5">
    <h1 class="py-3">{{$comic->title}}</h1>
    <div class="row justify-content-center">
        <div class="col-3">
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="img-fluid">
        </div>
        <div class="col-6">
            <div>
                <strong>Price: </strong>
                <span>${{$comic->price}}</span>
            </div>
            <div>
                <strong>Series: </strong>
                <span>{{$comic->series}}</span>
            </div>
            <div>
                <strong>Sale data: </strong>
                <span>{{$comic->sale_date}}</span>
            </div>
            <div>
                <strong>Type: </strong>
                <span>{{$comic->type}}</span>
            </div>
            <div>
                <strong>Description:</strong>
                <span>{{$comic->description}}</span>
            </div>
            <div>
                <strong>Writers: </strong>
                <span>{{$comic->writers}}</span>
            </div>
            <div>
                <strong>Artists: </strong>
                <span>{{$comic->artists}}</span>
            </div>
        </div>
    </div>
</div>


@endsection