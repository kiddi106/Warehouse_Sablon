@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Transaction </h1>
    </div> 
    
    <div class="card col-12">
        <div class="card" style="width: 80%; margin:10px;">
            
            <div class="card-body">
              <h5 class="card-title">Order Number {{ $tf->id }}</h5>
              <p class="card-text">Order Name : {{ $tf->post->title }}</p>
              <p class="card-text">Order Category : {{ $tf->post->category->name }}</p>
              <p class="card-text">Name of admin : {{ $tf->user->name }}</p>
              <p class="card-text">Order Count : {{ $tf->count }} {{ $tf->unit }}</p>
              <p class="card-text">Order Price : Rp {{ number_format($tf->price,2,',','.') }} </p>
              <p class="card-text">Order by : {{ Str::ucfirst($tf->customer) }} </p>
              <p class="card-text">Order Date : {{ $tf->created_at->format('F j, Y') }} </p>
              <p class="card-text">Order Time : {{ $tf->created_at->format('g:i a') }} </p>



              <a href="/downloadpdf/{{ $tf->id }}" target="_blank" class="btn btn-success">Download PDF <span data-feather="printer"></span></a>
            </div>
          </div>
    </div>
   
@endsection