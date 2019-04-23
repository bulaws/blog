@extends('layouts.app')

@section('content')
    <div class="container">


        <p>Hello word!</p>

        @can('posts.create')
            <button class="btn btn-danger">Delete</button>
        @endcan

        @can('create-post')
            <a href="" class="btn btn-primary">Item</a>
        @endcan


    </div>
@endsection