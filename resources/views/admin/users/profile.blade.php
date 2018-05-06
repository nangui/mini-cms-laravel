@extends('layouts.app')
@section('content')
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $error }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endforeach
@endif

<div class="card">
    <div class="card-header">
        Edit your profile
    </div>
    <div class="card-body">
        <form action="{{ route('user.profile.update') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" class="form-control" value="{{Auth::user()->name}}" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="text" class="form-control" value="{{Auth::user()->email}}" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="name">Upload new avatar</label>
                <input type="file" class="form-control" name="avatar" id="email">
            </div>
            <div class="form-group">
                <label for="facebook">Facebook profile</label>
                <input type="text" id="facebook" class="form-control" name="facebook" value="{{Auth::user()->profile->facebook}}">
            </div>
            <div class="form-group">
                <label for="youtube">Youtube profile</label>
                <input type="text" id="youtube" class="form-control" name="youtube" value="{{Auth::user()->profile->youtube}}">
            </div>
            <div class="form-group">
                <label for="github">Github profile</label>
                <input type="text" id="github" class="form-control" name="github" value="{{Auth::user()->profile->github}}">
            </div>
            <div class="form-group">
                <label for="about">About you</label>
                <textarea cols="5" rows="5" name="about" id="about" class="form-control">{{Auth::user()->profile->about}}</textarea>
            </div>
            <div class="form-group">
                <label for="password">New password</label>
                <input type="text" class="form-control" name="password" id="email">
            </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Update profile</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop