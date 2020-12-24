@extends('layouts.app')


@section('title', 'home')


@section('content')

    @foreach($products as $product)

    <li>{{$product->name}}</li>

    @endsection
