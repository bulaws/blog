@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Posts
                        @can('posts.create')
                            <a class="pull-right btn btn-sm btn-primary" href="{{ route('create_post') }}">New</a>
                        @endcan
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            @foreach($posts as $post)
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail">
                                        <div class="caption">
                                            <h3><a href="{{ route('edit_post', ['id' => $post->id]) }}">{{ $post->title }}</a></h3>
                                            <p>{{ str_limit($post->body, 50) }}</p>
                                            @can('edit-post', $post)
                                                <p>
                                                    <a href="{{ route('edit_post', ['id' => $post->id]) }}" class="btn btn-sm btn-default btn-primary" role="button">Edit</a>
                                                </p>
                                            @endcan
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection