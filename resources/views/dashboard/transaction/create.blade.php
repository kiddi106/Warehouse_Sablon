@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"> Create New Supply </h1>
</div> 
<div class="col-lg-8">
    <form method="post" action="/dashboard/transaction">
        @csrf
        <div class="mb-3">
            <label for="post_id" class="form-label">Nama Barang</label>
            <select class="form-select" name="post_id">
                @foreach ($posts as $post)
                @if (old('post') == $post->title)
                <option value="{{ $post->id }}"selected>{{ $post->title }}</option>
                @else
                <option value="{{ $post->id }}">{{ $post->title }}</option>
  
                @endif
                    
                @endforeach
            </select>
        </div>
        
        
        <div class="mb-3">
          <label for="unit" class="form-label ">Count</label>
          <input type="number" class="form-control @error('count') is-invalid @enderror" id="count" name="count" required autofocus value="{{ old('count') }}">
            @error('count')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="unit" class="form-label @error('unit') is-invalid @enderror" id="unit" name="unit" required autofocus value="{{ old('unit') }}">Unit</label>
          <select class="form-select" name="unit">
              <option value="pcs"selected>pcs</option>
              <option value="pack">pack</option>
          </select>
        </div>
        <div class="mb-3">
            <label for="customer" class="form-label ">Name Customer</label>
            <input type="text" class="form-control @error('customer') is-invalid @enderror" id="customer" name="customer" required autofocus value="{{ old('customer') }}">
              @error('customer')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
          </div>
        
        <button type="submit" class="btn btn-primary">Create Project</button>
    </form>

</div>
@endsection 