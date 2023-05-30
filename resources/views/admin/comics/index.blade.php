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
                    <th>Series</th>
                    <th>sale_date</th>
                    <th>Price</th>
                    <th>Type</th>
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
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->type}}</td>
                    <td>
                        <a href="{{route('admin.comics.show', $comic->id)}}" title="View" class="text-decoration-none">
                            <i class="fas fa-eye fa-sm fa-fw"></i>
                        </a>
                        <a href="" title="Edit" class="text-decoration-none">
                            <i class="fas fa-pencil fa-sm fa-fw"></i>
                        </a>
                        <a href="" title="Delete" class="text-decoration-none">
                            <i class="fas fa-trash fa-sm fa-fw"></i>
                        </a>
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