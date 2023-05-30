@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center py-5">
        <h1 class="fw-bold"> Admin Comics</h1>
        <a href="{{route('admin.comics.create')}}" class="btn btn-dark d-block">
            <i class="fas fa-plus-circle fa-sm fa-fw"></i>
            New Comic
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover table-borderless table-secondary align-middle">
            <thead class="table-light">
                <caption>Table Name</caption>
                <tr>
                    <th>ID</th>
                    <th>Thumb</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Series</th>
                    <th style="width: 8%">sale_date</th>
                    <th style="width: 10%">Type</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @forelse ($comics as $comic)
                <tr class="table-primary">
                    <td scope="row">{{$comic->id}}</td>
                    <td><img height="100" src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td>
                        <a class="btn btn-primary mb-1" href="{{route('admin.comics.show', $comic->id )}}" title="View" role="button">
                            <i class="fas fa-eye fa-sm fa-fw"></i>
                        </a>

                        <a class="btn btn-secondary text-light mb-1" href="{{route('admin.comics.edit', $comic->id )}}" title="Edit" role="button">
                            <i class="fas fa-pencil fa-sm fa-fw"></i>
                        </a>

                        <form action="{{route('admin.comics.destroy', $comic->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" title="Delete">
                                <i class="fas fa-trash fa-sm fa-fw"></i>
                            </button>
                        </form>

                    </td>
                </tr>
                @empty
                <tr scope="row">
                    <td>No records in the db yet.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection