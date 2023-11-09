@extends('layouts.app')
@section('content')
<br>
<div class="container mt-5">
    <form
    method="post" 
    action="/blog/{{$blog->id}}"
    enctype="multipart/form-data"
    >
    @csrf
    @method("PUT")
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$blog->title}}">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4">
            {{$blog->description}}
            </textarea>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
@endsection