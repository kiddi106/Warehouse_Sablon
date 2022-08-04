@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Users </h1>
  </div>    
  @if (session()->has('success'))
  <div class="alert alert-secondary col-lg-6" role="alert">
    {{ session('success') }}
  </div>
  @endif
  <div class="table-responsive col-lg-8">
    <a href="/register" class="btn btn-primary mb-3"> Create New User </a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          
          <th scope="col">#</th>
          <th scope="col">User Name</th>
          <th scope="col">User Email</th>
          <th scope="col">User Role</th>
          <th scope="col">User Created_at</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          @if ($user->role == 'user')
              <td>Petugas</td>
          @else
              <td>Admin</td>
          @endif
          <td>{{ $user->created_at }}</td>
          
          
          
          <td>
            <a href="/dashboard/users/{{ $user->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/dashboard/users/{{ $user->id }}" class="d-inline" method="post">
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