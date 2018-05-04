@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

<div class="card">
    <div class="card-header">
        Create a new post
    </div>
    <div class="card-body">
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="featured">Image featured</label>
                <input type="file" class="form-control" name="featured">
            </div>
            <div class="form-group">
                <label for="content">Post content</label>
                <textarea class="form-control" name="content" id="content" cols="30" rows="6"></textarea>
            </div>
            <div class="form-group">
                <label for="category">Select a Category</label>
                <select name="category_id" id="category" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Store post</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop