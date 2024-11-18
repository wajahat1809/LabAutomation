@extends('footer')
@section('footer')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <center><h2 class="card-title mt-6 mb-6"><b>Tests</b></h2></center>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Test Name</th>
                            <th>Rate</th>
                            <th>Sample Required</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->Test_Name }}</td>
                            <td>{{ $product->Rate }}</td>
                            <td>{{ $product->Sample_Required }}</td>
                            <td>
                                <!-- Tester button -->
                                <form action="{{ route('products.index', $product->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Tester</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@endsection
