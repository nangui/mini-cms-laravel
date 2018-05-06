@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

<div class="card">
    <div class="card-header">
        Edit post N° {{ $post->id }}
    </div>
    <div class="card-body">
        <form action="{{ route('post.update', ['id' => $post->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" value="{{$post->title}}" class="form-control" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="featured">Image featured</label>
                <input type="file" class="form-control" name="featured">
            </div>
            <div class="form-group">
                <label for="category">Select a Category</label>
                <select name="category_id" id="category" class="form-control">
                    @foreach($categories as $category)
                        <option 
                        @if($post->category_id == $category->id)
                            selected="selected"
                        @endif
                        value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <label for="tags">Select tags</label>
            <div class="form-group">
                @foreach($tags as $tag)
                <div class="checkbox">
                        <label><input type="checkbox" name="tags[]" value="{{$tag->id}}"
                        @foreach($post->tags as $t)
                            @if($tag->id == $t->id)
                                checked="checked"
                            @endif
                        @endforeach
                        > {{$tag->tag}}</label>
                    </div>
                @endforeach
            </div>
            <div class="form-group">
                <label for="content">Post content</label>
                <textarea class="form-control" name="content" id="content" cols="30" rows="6">{{$post->content}}</textarea>
            </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Update post</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop