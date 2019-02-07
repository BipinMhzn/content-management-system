@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            Create a new tag
        </div>

        <div class="panel-body">
            <form action="{{route('tag.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="tag">Tag</label>
                    <input type="text" name='tag' class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-success form-control" type="submit">Store Tag</button>
                </div>
            </form>
        </div>
    </div>
@endsection
