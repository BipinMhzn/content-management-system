@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            Update Category: {{$category->name}}
        </div>

        <div class="panel-body">
            <form action="{{route('category.update',['id' => $category->id])}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name='name' class="form-control" value="{{$category->name}}">
                </div>

                <div class="form-group">
                    <button class="btn btn-success form-control" type="submit">Update Category</button>
                </div>
            </form>
        </div>
    </div>
@endsection
