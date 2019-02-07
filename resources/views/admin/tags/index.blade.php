@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Tags
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Tag Name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @if($tags->count()>0)
                        @foreach($tags as $tag)
                            <tr>        
                                <td>{{$tag->tag}}</td>
            
                                <td>
                                    <a 
                                        href="{{route('tag.edit',['id' => $tag->id])}}" 
                                        class="glyphicon glyphicon-pencil btn btn-outline-info"></a>
                                </td>
            
                                <td>
                                    <a 
                                        href="{{route('tag.delete',['id' => $tag->id])}}" 
                                        class="glyphicon glyphicon-trash btn btn-outline-danger"></a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <th colspan="3" class="text-center">No Tags yet</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>   
@endsection
