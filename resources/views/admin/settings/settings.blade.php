@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit Blog Setting
        </div>

        <div class="panel-body">
            <form action="{{route('setting.update')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Site Name</label>
                    <input type="text" name='site_name' class="form-control" value=" {{$settings->site_name}}">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name='address' class="form-control" value="{{ $settings->address}}">
                </div>

                <div class="form-group">
                    <label for="phone">Contact Phone</label>
                    <input type="text" name='contact_number' class="form-control" value="{{ $settings->contact_number}}">
                </div>

                <div class="form-group">
                        <label for="phone">Contact Email</label>
                        <input type="text" name='contact_email' class="form-control" value="{{ $settings->contact_email}}">
                    </div>

                <div class="form-group">
                    <button class="btn btn-success form-control" type="submit">Update Site Settings</button>
                </div>
            </form>
        </div>
    </div>
@endsection
