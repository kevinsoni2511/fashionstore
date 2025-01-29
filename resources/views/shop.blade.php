@extends('layout')

@section('content')
    <h1 class="text-center my-4">Shop</h1>

    <div class="container">
        <div class="row justify-content-center">
            <!-- Product 1 -->
            <div class="col-md-3">
                <div class="card shadow-lg p-3 mb-4 bg-white rounded">
                    <img src="{{ asset('Assets/1.jpg') }}" class="card-img-top img-fluid" alt="Product 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Product 1</h5>
                        <p class="card-text">Price: $20</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-md-3">
                <div class="card shadow-lg p-3 mb-4 bg-white rounded">
                    <img src="{{ asset('Assets/1.jpg') }}" class="card-img-top img-fluid" alt="Product 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Product 2</h5>
                        <p class="card-text">Price: $25</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-md-3">
                <div class="card shadow-lg p-3 mb-4 bg-white rounded">
                    <img src="{{ asset('Assets/1.jpg') }}" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Product 3</h5>
                        <p class="card-text">Price: $55</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="col-md-3">
                <div class="card shadow-lg p-3 mb-4 bg-white rounded">
                    <img src="{{ asset('Assets/1.jpg') }}" class="card-img-top img-fluid" alt="Product 4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Product 4</h5>
                        <p class="card-text">Price: $30</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
