@extends('layouts.app')

@section('content')
        <div class="panel-default">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif              
            </div>

            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    Posts
                </div>
                <div class="panel-body">
                    <h1 class="text-center">{{$posts_count}}</h1>
                </div>
            </div>

            <div class="panel panel-danger">
                <div class="panel-heading text-center">
                    Trashed Posts
                </div>
                <div class="panel-body">
                    <h1 class="text-center">{{$trashed_count}}</h1>
                </div>
            </div>

            <div class="panel panel-success">
                <div class="panel-heading text-center">
                    Users
                </div>
                <div class="panel-body">
                    <h1 class="text-center">{{$users_count}}</h1>
                </div>
            </div>

            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    Categories
                </div>
                <div class="panel-body">
                    <h1 class="text-center">{{$categories_count}}</h1>
                </div>
            </div>
        </div>
@endsection
