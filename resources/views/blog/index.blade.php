@extends('layouts.app')
@section('content')

<div class=" container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-bold" >All Post</h1>
</div>

@if(Auth::check())
<div class=" container m-auto text-center pt-15 pb-5">
    <a href="/blog/create" class="btn btn-primary bg-yellow">create blog</a>
</div>
@endif




<p class="mission_completed">
    {{ session()->get('delete') }}
</p>

@if(count($posts) > 0)
<!-- Start of a blog -->
@foreach ($posts as $post)    
<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <img src="/uploaded_img/{{$post->image_path}}" class="img-fluid rounded" width="100%" height="50%" alt="/uploaded_img/{{$post->image_path}}">
        </div>
        <div class="col-md-6">
            <h2 class="text-primary font-weight-bold mb-4">
                {{$post->title}}
            </h2>
            <div class="mb-3">
                <span class="text-muted font-italic">By: {{$post->user->name}}</span>
                <span class="text-muted font-italic">created at: {{date('d-m-Y',strtotime($post->updated_at))}}</span>
            </div>
            <p class="text-muted mb-4">
                {{$post->description}}
            </p>
            <div class="d-flex flex-column justify-content-center h-100">
                @if (Auth::user() && Auth::user()->id == $post->user_id )
                <a href="/blog/{{$post->id}}/edit" class="btn btn-success">edit </a>
                <form action="{{ route('blog.destroy', ['blog' => $post->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                
                @endif                
                <a href="/blog/{{$post->id}}" class="btn btn-primary">Read more</a>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- End of a blog -->
@else
<div class="container my-5">
    <h1>no posts yet</h1>
</div>
@endif





@endsection