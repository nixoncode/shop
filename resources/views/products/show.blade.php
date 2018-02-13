@extends('layouts.app')

@section('title', 'The Product')

@section('content')


<div class="content">
    <div class="product">
        <div class="product-image">
            <img src="{{ asset('uploads') }}/{{ $product->image }}" alt="Product Image">
        </div>
        <div class="product-content">
            <h1 class="product-title">{{ $product->name }}</h1>
            <div class="product-meta">
                <span class="price"><b>Ksh</b> {{ $product->price }}</span>
                <button class="btn">Buy Now <span class="mdi mdi-cart-plus"></span></button>
                <a href="#" class="favourite"><span class="mdi mdi-star"></span> Add to Favourites</a>
                
                
            </div>
            <p class="product-description">{{ $product->description }}</p>
        </div>
    </div>
</div>
<link rel="stylesheet" href="//cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">

@endsection()