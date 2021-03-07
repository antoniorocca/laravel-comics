@extends('layouts.dashboard')

@section('content')

     <h1>Add a new comic</h1>
  @include('partials.errors')
     <form action="{{route('admin.comics.store')}}" method="post" enctype="multipart/form-data">
         @csrf
         <div class="form-group">
             <label for="cover">Cover</label>
             <input type="file" class="form-control-file" name="cover" id="cover" placeholder="Add a cover image" aria-describedby="fileHelpId">
             <small id="coverHelper" class="form-text text-muted">Add a cover image for the comic</small>
         </div>
         @error('cover')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror 
         <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
         </div>
         @error('title')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <div class="form-group">
              <label for="availability">Availability</label>
              <textarea name="availability" id="availability" class="form-control" rows="1">{{ old('availability') }}</textarea>
         </div>       
         @error('availability')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" id="description" class="form-control" rows="5">{{ old('description') }}</textarea>
         </div>       
         @error('description')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <div class="form-group">
              <label for="artists">Artists</label>
              <textarea name="artists" id="artists" class="form-control" rows="2">{{ old('artists') }}</textarea>
         </div>       
         @error('artists')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <div class="form-group">
              <label for="writers">Writers</label>
              <textarea name="writers" id="writers" class="form-control" rows="2">{{ old('writers') }}</textarea>
         </div>       
         @error('writers')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <div class="form-group">
              <label for="series">Series</label>
              <textarea name="series" id="series" class="form-control" rows="1">{{ old('series') }}</textarea>
         </div>       
         @error('series')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <div class="form-group">
              <label for="price">Price</label>
              <textarea name="price" id="price" class="form-control" rows="1">{{ old('price') }}</textarea>
         </div>       
         @error('price')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <div class="form-group">
              <label for="sale_date">Sale date</label>
              <textarea name="sale_date" id="sale_date" class="form-control" rows="1">{{ old('sale_date') }}</textarea>
         </div>       
         @error('sale_date')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <div class="form-group">
              <label for="volume">Volume</label>
              <textarea name="volume" id="volume" class="form-control" rows="1">{{ old('volume') }}</textarea>
         </div>       
         @error('volume')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <div class="form-group">
              <label for="trim_size">Trim Size</label>
              <textarea name="trim_size" id="trim_size" class="form-control" rows="1">{{ old('trim_size') }}</textarea>
         </div>       
         @error('trim_size')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <div class="form-group">
              <label for="page_count">Pages</label>
              <textarea name="page_count" id="page_count" class="form-control" rows="1">{{ old('page_count') }}</textarea>
         </div>       
         @error('page_count')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <div class="form-group">
              <label for="rated">Rated</label>
              <textarea name="rated" id="rated" class="form-control" rows="1">{{ old('rated') }}</textarea>
         </div>       
         @error('rated')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <button type="submit" class="btn btn-primary">Submit</button>
     </form>
@endsection