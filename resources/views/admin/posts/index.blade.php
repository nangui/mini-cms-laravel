@extends('layouts.app')

@section('content')
    <table class="table">
        <thead class="thead-dark">
            <tr class="text-center">
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Editing</th>
                <th scope="col">Deleting</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr class="text-center">
                    <td> {{ $post->title }} </td>
                    <td>
                        <img class="img img-responsive" width="90" height="50" src="{{ $post->featured }}" alt="featured">
                    </td>
                    <td>
                        <a class="btn btn-sm btn-warning" href=" {{ route('post.edit', ['id' => $post->id]) }} ">
                            <i class="fas fa-edit"></i>
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