@extends('layouts.app')
@section('title', 'home')

@section('content')

    <div>
        @if(session()->has('message'))
            {{session()->get('message')}}
        @endif
    </div>

<h1 class="my-5 text-center">PRODUCTS</h1>
    <ul>
    @foreach($products as $product)

        <li class="list-group-item m-2"><a  href="">{{$product->name}}</a>
        </li>

@endforeach
    </ul>

    <div class="pt-5">
        {{$products->links()}}
    </div>
    @endsection
