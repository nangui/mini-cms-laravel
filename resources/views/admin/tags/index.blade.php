@extends('layouts.app') 
@section('content')
<div class="card text-center">
    <div class="card-header">
        Tags
    </div>
    <div class="card-body">
        <table class="table">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">Name</th>
                    <th scope="col">Editing</th>
                    <th scope="col">Deleting</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tags as $tag)
                <tr class="text-center">
                    <td> {{ $tag->tag }} </td>
                    <td>
                        <a class="btn btn-sm btn-warning" href=" {{ route('tag.edit', ['id' => $tag->id]) }} ">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('tag.destroy', ['id' => $tag->id]) }}" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop