@extends('layout')

@section('page-content')
<h2>Update Book</h2>
<form method="post" action="{{route('books.update')}}">
    {{-- <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">ID</label>
      <input type="text" class="form-control" name="id" aria-describedby="id"> --}}
    {{-- </div> --}}
    @csrf
    <input type="hidden" name = "id", value = "{{$book->id}}">
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" value="{{old('title',$book->title)}}" placeholder="Enter-Title">
        <div>{{$errors->first('title')}}</div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Author</label>
        <input type="text" class="form-control" name="author"  value="{{old('author',$book->author)}}" placeholder="Enter-Author">
        <div>{{$errors->first('author')}}</div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">ISBN</label>
        <input type="text" class="form-control" name="isbn"  value="{{old('isbn', $book->isbn)}}" placeholder="Enter-isbn">
        <div>{{$errors->first('isbn')}}</div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Stock</label>
        <input type="text" class="form-control" name="stock"  value="{{old('stock',$book->stock)}}" placeholder="Enter-Stock">
        <div>{{$errors->first('stock')}}</div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Price</label>
        <input type="text" class="form-control" name="price"  value="{{old('price',$book->price)}}" placeholder="Enter-Price">
        <div>{{$errors->first('price')}}</div>
    </div><br>
   
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{route('books.index')}}" type="submit" class="btn btn-danger">Back</a>
  </form>
@endsection