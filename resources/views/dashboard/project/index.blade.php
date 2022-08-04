@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"> Project </h1>
  </div>    
  @if (session()->has('success'))
  <div class="alert alert-secondary" role="alert">
    {{ session('success') }}
  </div>
  @endif
  @if ($any == false)
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ $stock }} out of stock, please update</strong>
    <strong type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></strong>
</div>
  @endif
  <div class="table-responsive">
    <a href="/dashboard/posts" class="btn btn-primary mb-3"> Create New Project </a>
    
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          
          <th scope="col">#</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Category</th>
          <th scope="col">Created at</th>
          <th scope="col">Created by</th>
          <th scope="col">Updated at</th>
          <th scope="col">Deleted at</th>
          

          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>{{ $post->created_at }}</td>
          <td>{{ $post->user->name }}</td>
          <td>{{ $post->updated_at }}</td>
          <td>{{ $post->deleted_at }}</td>
          <td>
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/dashboard/posts/{{ $post->slug }}" class="d-inline" method="post">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
            
        @endforeach
      </tbody>
    </table>
  </div>
@endsection