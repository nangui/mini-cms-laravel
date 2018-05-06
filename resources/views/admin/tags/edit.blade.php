@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

<div class="card">
    <div class="card-header">
        Edit tag N°{{ $tag->id }}
    </div>
    <div class="card-body">
        <form action="{{ route('tag.update', ['id' => $tag->id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" value="{{$tag->tag}}" name="tag" id="name">
            </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Update this</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop