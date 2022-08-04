@extends('dashboard.layouts.main')
@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Transaction </h1>
</div>    
@if (session()->has('success'))
<div class="alert alert-secondary" role="alert">
  {{ session('success') }}
</div>
@endif
<div class="table-responsive">
  <a href="/dashboard/transaction/create" class="btn btn-primary mb-3"> Create New Transaction </a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        
        <th scope="col">#</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Count</th>
        <th scope="col">Unit</th>
        <th scope="col">Category</th>
        <th scope="col">Price</th>
        <th scope="col">Created at</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($transaction as $tf)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $tf->post->title }}</td>
        <td>{{ $tf->count }}</td>
        <td>{{ $tf->unit }}</td>
        <td>{{ $tf->post->category->name }}</td>
        <td>Rp.{{ $tf->price }}</td>
        <td>{{ $tf->created_at }}</td>
        <td>
          <a href="/dashboard/transaction/{{ $tf->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
          {{-- <button href="" class="share-btn badge bg-info border-0"><span data-feather="eye"></span></button> --}}
          <form action="/dashboard/transaction/{{ $tf->id }}" class="d-inline" method="post">
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
  
  <script>
    const btn_share = document.querySelector('.share-btn');
    const modal = document.querySelector('.modal-content');

    // show
    btn_share.addEventListener('click',()=> {
        modal.classList.add('show-modal');
    })
    // close modal
    modal.addEventListener('click', (e) => {
        if (e.target.classList.contains('modal-content')) {
            modal.classList.remove('show-modal');
        }
    })
    
  </script>
@endsection