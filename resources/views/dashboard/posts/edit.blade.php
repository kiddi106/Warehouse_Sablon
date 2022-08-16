@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"> Edit Supply </h1>
</div> 
<div class="col-lg-8">
    <form method="post" action="/dashboard/posts/{{ $post->slug }}">
      @method('put')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label ">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title',$post->title) }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"required value="{{ old('slug',$post->slug) }}">
          @error('slug')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
      @enderror
        </div>
        <div class="mb-3">
          <label for="count" class="form-label">Count</label>
          <input type="text" class="form-control @error('count') is-invalid @enderror" id="count" name="count"required value="{{ old('count',$post->count) }}">
          @error('count')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
      @enderror
        </div>
        <div class="mb-3">
          <label for="count" class="form-label">Price</label>
          <input type="text" class="form-control @error('count') is-invalid @enderror" id="price" name="price"required value="{{ old('price',$post->price) }}">
          @error('price')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
      @enderror
        </div>
        <div class="mb-3">
          <label for="unit" class="form-label">Unit</label>
          <select class="form-select" name="unit" @error('unit') is-invalid @enderror" id="unit" name="unit"required value="{{ old('unit',$post->unit) }}">
              <option value="pcs"selected>pcs</option>
              <option value="pack">pack</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-select" name="category_id">
              @foreach ($categories as $category)
              @if (old('category_id', $post->category_id) == $category->id)
              <option value="{{ $category->id }}"selected>{{ $category->name }}</option>
              @else
              <option value="{{ $category->id }}">{{ $category->name }}</option>

              @endif
                  
              @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="body" class="form-label">Description</label>
          @error('body')
             <p class="text-danger"> {{ $message }}</p>
          @enderror
          <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
          <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Update Project</button>
    </form>

</div>
@endsection