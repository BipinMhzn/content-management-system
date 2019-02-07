@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Trashed Posts
        </div>
        
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Restore</th>
                    <th scope="col">Destroy</th>
                    </tr>
                </thead>
                <tbody>
                    @if($posts->count()>0)
                        @foreach($posts as $post)
                            <tr>        
                                <td>
                                    <img src="{{$post->featured}}" alt="{{$post->title}}" width="90px" height="50px">
                                </td>
            
                                <td>
                                    {{$post->title}} 
                                </td>
                                    
                                <td>
                                    <a 
                                        href="{{route('post.edit',['id' => $post->id])}}" 
                                        class="glyphicon glyphicon-pencil btn btn-outline-info"></a>
                                </td>

                                <td>
                                    <a 
                                        href="{{route('post.restore',['id' => $post->id])}}" 
                                        class="glyphicon glyphicon-repeat btn btn-outline-success"></a>
                                </td>

                                <td>
                                    <a 
                                        href="{{route('post.destroy',['id' => $post->id])}}" 
                                        class="glyphicon glyphicon-trash btn btn-outline-danger"></a>
                                </td>
            
            
                            </tr>
                        @endforeach
                    @else
                            <tr>
                                <th colspan="5" class="text-center">No trashed posts</th>
                            </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>   
@endsection
