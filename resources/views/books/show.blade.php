@extends('layout')

@section('page-content')
<h1>{{$books->title}}</h1>
<table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <td>{{$books->id}}</td>
    </tr>
    <tr>
        <th>ISBN</th>
        <td>{{$books->isbn}}</td>
    </tr>
    {{-- <tr>
        <th>Title</th>
        <td>{{$books->tittle}}</td>
    </tr> --}}
    <tr>
        <th>Author</th>
        <td>{{$books->author}}</td>
    </tr>
    <tr>
        <th>Price</th>
        <td>{{$books->price}}</td>
    </tr>
    <tr>
        <th>Stock</th>
        <td>{{$books->stock}}</td>
    </tr>

    
</table>
<p>
    <a class="btn btn-success" href="{{route('books.index')}}"><i class="bi bi-caret-left"></i>Back</a>
    <a class="btn btn-danger" href="{{route('books.edit',$books->id)}}"><i class="bi bi-pencil-square"></i>Edit</a>
</p>

@endsection
