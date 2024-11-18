@extends('layout')
@section('content')
<div class="card">
    <div class="card-body">
        <h3>Testing for: {{ $product->Test_Name }}</h3>
        <p><strong>Rate:</strong> {{ $product->Rate }}</p>
        <p><strong>Sample Required:</strong> {{ $product->Sample_Required }}</p>
        <p><strong>Unique Test ID:</strong> {{ $testId }}</p>
        <!-- Add additional testing fields here -->
    </div>
</div>
@endsection
