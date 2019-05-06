@extends('layouts.app')

@section('content')
    <h1>My Posts</h1>
    @if (count($Posts) > 0)
    @foreach ($posts as $post)
        <div class="well">
        <h3><a href="/lsapp/public/posts/{{$post->title}}">{{$post->title}}</a></h3>
        <small>Written On {{$post->created_at}}</small>
        </div>
    @endforeach
        {{$Posts->links()}}
       @else
       <h6>No Posts Were Found Here</h6>
    @endif
@endsection
