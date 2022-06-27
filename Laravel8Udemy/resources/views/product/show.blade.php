@extends('layouts.master')

@section('content')
    <p>{{ $product->id }}</p>
    <p>{{ $product->title }}</p>
    <p>{{ $product->description }}</p>
    <p>{{ $product->price }}</p>
    <p>{{ $product->stock }}</p>
    <p>{{ $product->status }}</p>

@endsection
