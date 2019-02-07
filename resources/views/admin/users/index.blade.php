@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Users
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Permission</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @if($users->count()>0)
                        @foreach($users as $user)
                            <tr>        
                                <td>
                                    <img src="{{ asset($user->profile->avatar)}}" alt="" width="60px" height="60px" style="border-radius: 50%;">
                                </td>

                                <td>
                                    {{$user->name}}
                                </td>

                                <td>
                                    @if($user->admin)
                                        <a href="{{route('user.not_admin', ['id'=> $user->id])}}" class="btn btn-xs btn-danger">Remove Permissions</a>
                                    @else
                                        <a href="{{route('user.admin', ['id'=> $user->id])}}" class="btn btn-xs btn-success">Make Admin</a>
                                    @endif
                                </td>
                                <td>
                                    @if(Auth::id() !== $user->id)
                                        <a href="{{route('user.delete', ['id'=> $user->id])}}" class="btn btn-xs btn-danger">Delete</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <th colspan="5" class="text-center">No published posts</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>   
@endsection
