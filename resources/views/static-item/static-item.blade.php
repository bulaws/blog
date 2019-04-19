@extends('layouts.app')

@section('content')
    <div class="container">

        @can('view-post')
        <p>Hello word!</p>
        @endcan

        @can('delete-post')
            <button class="btn btn-danger">Delete</button>
        @endcan

        @can('create-post')
            <a href="" class="btn btn-primary">Item</a>
        @endcan


    </div>
@endsection