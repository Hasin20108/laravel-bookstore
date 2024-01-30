@extends('layout')

@section('page-content')
<h2>New Book</h2>
<form method="post" action="{{route('books.store')}}">
    {{-- <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">ID</label>
      <input type="text" class="form-control" name="id" aria-describedby="id"> --}}
    {{-- </div> --}}
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Enter-Title">
        <div>{{$errors->first('title')}}</div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Author</label>
        <input type="text" class="form-control" name="author"  value="{{old('author')}}" placeholder="Enter-Author">
        <div>{{$errors->first('author')}}</div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">ISBN</label>
        <input type="text" class="form-control" name="isbn"  value="{{old('isbn')}}" placeholder="Enter-isbn">
        <div>{{$errors->first('isbn')}}</div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Stock</label>
        <input type="text" class="form-control" name="stock"  value="{{old('stock')}}" placeholder="Enter-Stock">
        <div>{{$errors->first('stock')}}</div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Price</label>
        <input type="text" class="form-control" name="price"  value="{{old('price')}}" placeholder="Enter-Price">
        <div>{{$errors->first('price')}}</div>
    </div><br>
   
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('books.index')}}" type="submit" class="btn btn-danger">Back</a>
  </form>
@endsection