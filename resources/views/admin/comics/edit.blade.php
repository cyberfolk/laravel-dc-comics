@extends('layouts.app')

@section('page_title', 'Edit')

@section('content')

<div class="container">
    <h5 class="text-uppercase text-muted my-4">Add a new Comic</h5>
    <form action="{{route('admin.comics.update', $comic->id)}}" method="post">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Comic title here" value="{{$comic->title}}" aria-describedby="titleHelper" required>
            <small id="titleHelper" class="text-muted">Type the title of the comic max 100 characters</small>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Comic thumb here" value="{{$comic->thumb}}" aria-describedby="thumbHelper">
            <small id="thumbHelper" class="text-muted">Type the source image of the comic max 200 characters</small>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" placeholder="Comic price here" value="{{$comic->price}}" aria-describedby="priceHelper" required>
            <small id="priceHelper" class="text-muted">Type the price of the comic max 10 characters</small>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="Comic series here" value="{{$comic->series}}" aria-describedby="seriesHelper" required>
            <small id="seriesHelper" class="text-muted">Type the series of the comic max 100 characters</small>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Comic sale_date here" value="{{$comic->sale_date}}" aria-describedby="sale_dateHelper">
            <small id="sale_dateHelper" class="text-muted">Type the sale date of the comic max 10 characters</small>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="Comic type here" value="{{$comic->type}}" aria-describedby="typeHelper" required>
            <small id="typeHelper" class="text-muted">Type the type of the comic max 100 characters</small>
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Writers</label>
            <input type="text" name="writers" id="writers" class="form-control" placeholder="Comic writers here" value="{{$comic->writers}}" aria-describedby="writersHelper">
            <small id="writersHelper" class="text-muted">Type the writers of the comic separate with ","</small>
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Artists</label>
            <input type="text" name="artists" id="artists" class="form-control" placeholder="Comic artists here" value="{{$comic->artists}}" aria-describedby="artistsHelper">
            <small id="artistsHelper" class="text-muted">Type the artists of the comic separate with ","</small>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="textarea" name="description" id="description" class="form-control" placeholder="Comic description here" value="{{$comic->description}}" aria-describedby="descriptionHelper" row="4">
            <small id="descriptionHelper" class="text-muted">Type the description of the comic max 1000 characters</small>
        </div>
        <button type="submit" class="btn btn-dark w-100 my-4">Save</button>
    </form>
</div>
@endsection