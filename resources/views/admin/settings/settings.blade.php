@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

<div class="card">
    <div class="card-header">
        Create a new post
    </div>
    <div class="card-body">
        <form action="{{ route('settings.update') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="site_name">Site name</label>
                <input type="text" class="form-control" value="{{$settings->site_name}}" name="site_name" id="site_name">
            </div>
            <div class="form-group">
                <label for="contac_number">Phone number</label>
                <input type="text" class="form-control" value="{{$settings->contact_number}}" name="contact_number">
            </div>
            <div class="form-group">
                <label for="contac_number">Email</label>
                <input type="text" class="form-control" value="{{$settings->contact_email}}" name="contact_email">
            </div>
            <div class="form-group">
                <label for="content">Address</label>
                <textarea class="form-control" name="address" id="address" cols="30" rows="6">{{$settings->address}}</textarea>
            </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Update settings</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop