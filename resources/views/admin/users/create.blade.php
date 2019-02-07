@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            Create a New User
        </div>

        <div class="panel-body">
            <form action="{{route('user.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">User</label>
                    <input type="text" name='name' class="form-control">
                </div>

                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" name='email' class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-success form-control" type="submit">Add User</button>
                </div>
            </form>
        </div>
    </div>
@endsection
