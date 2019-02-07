@extends('layouts.frontend')

@section('content')

    {{-- post title --}}
    <div>
       <h1 class="stunning-header-title">{{$post->title}}</h1>
    </div>

    <div>
        {{-- post image --}}
        <img src="{{$post->featured}}" alt="">

        {{-- show post created time --}}
        <label for="time">
            {{$post->created_at->toFormattedDateString()}}
        </label>

        {{-- category name --}}
        <a href="{{route('category.single', ['id' => $post->category->id])}}">{{$post->category->name}}</a>

        {{-- content of the post --}}
        <p> {{$post->content}} </p>

        {{-- post related tag --}}
        @foreach ($post->tags as $tag)
            <a href="{{route('tag.single',['id'=> $tag->id])}}" class="w-tags-item">{{$tag->tag}}</a>
        @endforeach

        <div>
            {{-- next post and previous post button --}}

            @if($next)
            <a href="{{ route('post.single', ['slug' => $next->slug]) }}" class="btn-prev-wrap">
                    <div>Previous Post</div>
                    <p>{{$next->title}}</p>
            </a>
            @endif
    
            @if($prev)
            <a href="{{ route('post.single', ['slug' => $prev->slug]) }}" class="btn-next-wrap">
                <div>Next Post</div>
                <p >{{$prev->title}}</p>
            </a>
            @endif
        </div>
    </div>
@endsection