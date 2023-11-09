@extends('layouts.app')
  
@section('title', 'Dashboard - Laravel Admin Panel With Login and Registration')
  
@section('contents')
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Products</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-danger stretched-link" href="{{ route('products.create') }}">Add Products</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection