@extends('layouts.dashboard')

@section('content')
<h1>All comics for the admin</h1>
<a href="{{ route('admin.comics.create')}}">Create a new comic</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($comics as $comic)
        <tr>
            <td scope="row">{{ $comic->id }}</td>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->description }}</td>
            <td>
                <a href="{{ route('admin.comics.show', ['comic'=> $comic->id])}}" class="btn btn-primary"><i class="fas fa-eye fa-xs fa-sw"></i> View</a>
                <a href="{{ route('admin.comics.edit', ['comic'=> $comic->id])}}" class="btn btn-warning"><i class="fas fa-pen fa-xs fa-sw"></i> Edit</a>
                <form action="{{route('admin.comics.destroy', ['comic'=> $comic->id])}}" method="post">
                 @csrf
                 @method('DELETE')
                 <button type="submit" class="btn btn-danger"><i class="fas fa-trash fa-xs fa-sw"></i> Delete</button>                      
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection