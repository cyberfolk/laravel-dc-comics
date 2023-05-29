@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <img src="{{$comics->image}}" alt="{{$comics->name}}" class="img-fluid">
        </div>
        <div class="col">
            <h1>{{$comics->name}}</h1>
            <div> <strong>Price: </strong>{{$comics->price}}</div>
            <div>
                <p>{{$comics->description}}</p>
            </div>
            </div>
        </div>

    </div>


@endsection