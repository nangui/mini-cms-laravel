@extends('layouts.app')

@section('content')
<div class="card text-center">
    <div class="card-header">
        Categories
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
            @foreach($categories as $c)
                <tr class="text-center">
                    <td> {{ $c->name }} </td>
                    <td>
                        <a class="btn btn-sm btn-warning" href=" {{ route('category.edit', ['id' => $c->id]) }} ">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('category.destroy', ['id' => $c->id]) }}" class="btn btn-sm btn-danger">
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