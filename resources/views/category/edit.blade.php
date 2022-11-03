@extends('layout.master')
@section('content')

<div class="container">
<form action="{{ route('categories.update', $categorie->id)}}" method="POST" >
    @method('PUT')
    @csrf
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Name</label>
  <input type="text" value="{{ $categorie->name}}" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('name')
    <div class="text text-danger">{{ $message }}</div>
    @enderror
  <div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Description</label>
  <input type="text" value="{{ $categorie->description}}" class="form-control" name="description" id="exampleInputPassword1">
  @error('description')
  <div class="text text-danger">{{ $message }}</div>
  @enderror
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>



@endsection
