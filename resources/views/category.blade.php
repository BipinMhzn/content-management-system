@extends('layouts.frontend')

@section('content')
    <h1>Category: {{$category->name}}</h1>
    <div>
        @foreach($category->posts as $post)
            <img src="{{$post->featured}}" alt="our case">
            <h6 class="case-item__title"><a href="{{route('post.single',['slug' => $post->slug])}}">{{$post->title}}</a></h6>
        @endforeach

    </div>
@endsection