@extends('layouts.app')


@section('title', 'Create post')


@section('content')

    <form method="POST" action="{{route('products.store')}}" class="mt-5">

        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" name="name">
        </div>
        @include('partials.error-message', ['field' => 'name'])
        <div class="form-group mt-2">
            <label for="description">Description</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" rows="10"
                      cols="30" placeholder="Content" name="description"></textarea>
        </div>
        @include('partials.error-message', ['field' => 'description'])

        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>

@endsection
