@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

<div class="card">
    <div class="card-header">
        Edit category N°{{ $category->id }}
    </div>
    <div class="card-body">
        <form action="{{ route('category.update', ['id' => $category->id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" value="{{$category->name}}" name="name" id="name">
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