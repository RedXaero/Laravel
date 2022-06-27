@extends('layouts.master')

@section('content')
<h1>Create a new product</h1>
    <form action="{{ route('products.update', ['product' => $product]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
            <label>Title</label>
            <input class="form-control" type="text" name="title" value="{{ $product->title }}" required>
        </div>

        <div class="form-row">
            <label>Description</label>
            <input class="form-control" type="text" name="description" value="{{ $product->description }}" required>
        </div>

        <div class="form-row">
            <label>Price</label>
            <input class="form-control" type="number" name="price" min="1.00" step="0.01" value="{{ $product->price }}" required>
        </div>

        <div class="form-row">
            <label>Stock</label>
            <input class="form-control" type="number" name="stock" min="0" value="{{ $product->stock }}" required>
        </div>

        <div class="form-row">
            <label>Status</label>
            <select class="custom-select" name="status" required>
                <option {{ $product->status == 'available' ? 'selected' : '' }}value='available'>Available</option>
                <option {{ $product->status == 'unavailable' ? 'selected' : '' }}value='unavailable'>Unavailable</option>
            </select>
        </div>

        <div class="form-row">
            <button type="submit" class="btn btn-primary btn-lg">Edit Product</button>
        </div>
    </form>

@endsection
