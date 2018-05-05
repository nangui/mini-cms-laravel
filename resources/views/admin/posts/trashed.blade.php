@extends('layouts.app')

@section('content')
    <table class="table">
        <thead class="thead-dark">
            <tr class="text-center">
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Trashed date</th>
                <th scope="col">Restore</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr class="text-center">
                    <td> {{ $post->title }} </td>
                    <td>
                        <img class="img img-responsive" width="90" height="50" src="{{ $post->featured }}" alt="featured">
                    </td>
                    <td>{{ $post->deleted_at }}</td>
                    <td>
                        <a href="{{ route('post.restore', ['id' => $post->id]) }}" class="btn btn-sm btn-success">
                            <i class="fas fa-reply"></i>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('post.destroy', ['id' => $post->id]) }}" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop