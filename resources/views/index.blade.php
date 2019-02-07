<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>{{ $title}}</title>

        {{-- jQuery Scripts --}}
        <script src="{{asset('js/jQuery.min.js')}}"></script>
        
        {{-- bootstrap scripts --}}
        <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>

        {{-- bootstrap styles --}}
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">

    </head>


    <body>    
        @include('includes.header')

        {{-- first post --}}
        <div>
            <img src="{{ $first_post->featured}}" alt="{{$first_post->title}}">
            
            <h2>
                <a href="{{route('post.single', ['slug' => $first_post->slug])}}">{{$first_post->title}}</a>
            </h2>

            <label for="time">
                {{$first_post->created_at->toFormattedDateString()}}
            </time>
    
            <a href="{{route('category.single', ['id' => $first_post->category->id ] )}}">{{$first_post->category->name}}</a>

        </div>
        
        {{-- second post --}}
        <div>
            <div>
            <img src="{{$second_post->featured}}" alt="{{$second_post->title}}">    
            </div>     
            
            <a href="{{route('post.single', ['slug' => $second_post->slug])}}">{{$second_post->title}}</a>
            
            <label for="time">
                {{ $second_post->created_at->toFormattedDateString()}}
            </label>                
            
            <a href="{{route('category.single', ['id' => $second_post->category->id ] )}}">{{$second_post->category->name}}</a>
        
        </div>
                    
        
        {{-- third-post --}}
        <div>
            <img src="{{$third_post->featured}}" alt="{{$third_post->title}}">       
                            
            <a href="{{route('post.single', ['slug' => $third_post->slug])}}">{{$third_post->title}}</a>
            
            <label for="time">
                {{ $third_post->created_at->toFormattedDateString()}}
            </label>
            
            <a href="{{route('category.single', ['id' => $third_post->category->id ] )}}">{{ $third_post->category->name}}</a>
        
        </div>


        
        {{-- show category category --}}
        <div>
            <h4>{{$career->name}}</h4>
            <div>
                @foreach($career->posts()->orderBy('created_at','desc')->take(3)->get() as $post)
                    <img src="{{$post->featured}}" alt=""">
                    <h6><a href="#">{{$post->title}}</a></h6>                
                @endforeach
            </div>
        </div>
        
        <div>
            <h4 class="h1 heading-title">{{$tutorials->name}}</h4>
                
            @foreach($tutorials->posts()->orderBy('created_at','desc')->take(3)->get() as $post)
                <img src="{{$post->featured}}" alt="">                           
                <h6><a href="#">{{$post->title}}</a></h6>
            @endforeach
        </div>

    @include('includes.footer')

    </body>
</html>
