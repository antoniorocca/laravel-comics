@extends('layouts.dashboard')

@section('content')

     <h1>Add a new comic</h1>
  @include('partials.errors')
     <form action="{{route('admin.comics.store')}}" method="post">
         @csrf
         <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
         </div>
         @error('title')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror   
         <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" id="description" class="form-control" rows="5">{{ old('description') }}</textarea>
         </div>       
         @error('description')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <button type="submit" class="btn btn-primary">Submit</button>
     </form>
@endsection