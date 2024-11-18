@extends('profile.onlyheader')

@section('profile.onlyheader')
    <!-- resources/views/products/show.blade.php -->

<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>
<p>Price: ${{ $product->price }}</p>

<a href="{{ route('products.index') }}">Back to List</a>

@endsection
