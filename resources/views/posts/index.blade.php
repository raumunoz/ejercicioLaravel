@extends('layouts.app')
@section('content')
@if(count($posts)>1)

@foreach($posts as $post)
    <div class="well">
        <h3><a href="http://localhost/LARAVEL/lsapp/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
    
    
        <small>creado en{{$post->body}}</small>
    </div>
    @endforeach
    @else
        <p>No encontrado</p>
@endif
@endsection