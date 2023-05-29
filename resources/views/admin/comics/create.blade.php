@extends('layouts.app')

@section('content')

<div class="container">
    <h5 class="text-uppercase text-muted my-4">Add a new Comic</h5>
    <form action="{{route('comics.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Saber title here " aria-describedby="titleHelper" required>
            <small id="titleHelper" class="text-muted">Type the name of the comic max 50 characters</small>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Saber thumb here " aria-describedby="thumbHelper">
            <small id="thumbHelper" class="text-muted">Type the image of the comic max 50 characters</small>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" placeholder="Saber price here " aria-describedby="priceHelper">
            <small id="priceHelper" class="text-muted">Type the price of the comic max 50 characters</small>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input type="number" step="0.01" name="series" id="series" class="form-control" placeholder="Saber series here " aria-describedby="seriesHelper">
            <small id="seriesHelper" class="text-muted">Type the series of the comic max 50 characters</small>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">sale_date</label>
            <input type="number" step="0.01" name="sale_date" id="sale_date" class="form-control" placeholder="Saber sale_date here " aria-describedby="sale_dateHelper">
            <small id="sale_dateHelper" class="text-muted">Type the sale_date of the comic max 50 characters</small>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input type="number" step="0.01" name="type" id="type" class="form-control" placeholder="Saber type here " aria-describedby="typeHelper">
            <small id="typeHelper" class="text-muted">Type the type of the comic max 50 characters</small>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="Saber description here " aria-describedby="descriptionHelper">
            <small id="descriptionHelper" class="text-muted">Type the description of the comic max 50 characters</small>
        </div>
        <button type="submit" class="btn btn-dark w-100 my-4">Save</button>
    </form>
</div>
@endsection