@extends('layouts.frontend')

@section('content')

<h1>Tag: {{$tag->tag}}</h1>
<div>
    @foreach($tag->posts as $post)       
        <img src="{{$post->featured}}" alt="our case">
         <h6 class="case-item__title"><a href="{{route('post.single',['slug' => $post->slug])}}">{{$post->title}}</a></h6>
    @endforeach
</div>

@endsection