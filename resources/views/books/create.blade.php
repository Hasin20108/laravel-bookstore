@extends('layout')

@section('page-content')
<h2>New Book</h2>
<form>
    {{-- <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">ID</label>
      <input type="text" class="form-control" name="id" aria-describedby="id"> --}}
    {{-- </div> --}}
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input type="text" class="form-control" name="tittle" aria-describedby="title">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Author</label>
        <input type="text" class="form-control" name="author" aria-describedby="author">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">ISBN</label>
        <input type="text" class="form-control" name="isbn" aria-describedby="isbn">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Stock</label>
        <input type="text" class="form-control" name="stock" aria-describedby="stock">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Price</label>
        <input type="text" class="form-control" name="price" aria-describedby="price">
    </div><br>
   
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('books.index')}}" type="submit" class="btn btn-danger">Back</a>
  </form>
@endsection