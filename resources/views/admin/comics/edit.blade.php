@extends('layouts.dashboard')
@section('content')
     <h1>Edit {{ $comic['title'] }}</h1>
     <form action="{{route('admin.comics.update', $comic['id'])}}" method="post">
         @csrf
         @method('PUT')
         <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" id="title" class="form-control" value="{{ $comic->title }}">
         </div>
         
         <div class="form-group">
              <label for="body">Description</label>
              <textarea name="description" id="description" class="form-control" rows="6">{{ $comic->description }}</textarea>
         </div>
         
         <button type="submit" class="btn btn-primary">Submit</button>
     </form>
@endsection