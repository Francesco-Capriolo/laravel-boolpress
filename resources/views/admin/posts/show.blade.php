@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11 col-md-9 col-lg-6">
                    <div class="card mb-3">
                        @if(str_starts_with($post->image_url, 'https://') || str_starts_with($post->image_url, 'http://'))
                            <img class="rounded w-100" src="{{ $post->image_url }}" alt="image of {{$post->title}}">
                        @else
                            <img class="rounded w-100" src="{{ asset('/storage') . '/' . $post->image_url }}" alt="image of {{$post->title}}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->author}}</p>
                            <p class="card-text">{{$post->content}}</p>
                            <p class="card-text"><small class="text-muted">{{$post->created_at}}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
