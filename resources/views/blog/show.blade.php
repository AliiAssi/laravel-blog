@extends('layouts.app')
@section('content')
<br>
<p class="mission_completed">
    {{ session()->get('updated_completed') }}
</p>

    <div>
        title: {{$blog->title}}
        <br>
        description : {{$blog->description}}
        <br>
        image : <img src="/uploaded_img/{{$blog->image_path}}" alt="" srcset=""
        width="200px" height="100px">
        <br>
        from : {{$blog->user->name}}
        <br>
        at : {{
            date('d-m-Y',strtotime($blog->updated_at))
            }}
    </div>
@endsection