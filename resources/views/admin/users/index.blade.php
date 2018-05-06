@extends('layouts.app')

@section('content')

<div class="card text-center">
    <div class="card-header">
        Posts
    </div>
    <div class="card-body">
        <table class="table">
        <thead class="thead-dark">
            <tr class="text-center">
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Permissions</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @if($users->count() > 0)
                @foreach($users as $user)
                    <tr class="text-center">
                        <td>
                            <img class="img img-responsive" style="border-radius: 50%;" width="90" height="50" src="{{ asset($user->profile->avatar) }}" alt="featured">
                        </td>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            @if($user->admin)
                                <a href="{{route('user.not.admin', ['id' => $user->id])}}" class="btn btn-sm btn-danger">Remove permissions</a>
                            @else
                                <a href="{{route('user.admin', ['id' => $user->id])}}" class="btn btn-sm btn-success">Make admin</a>
                            @endif
                        </td>
                        <td>
                            <a href="" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <th colspan="5" class="text-center">No users</th>
                </tr>
            @endif
        </tbody>
    </table>
    </div>
</div>
@stop