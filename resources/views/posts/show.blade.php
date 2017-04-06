@extends('layout')

@section('content')

    <h1>{{ $post->title }}</h1>
    发布于：<em>{{ $post->published_at->toDateString() }}</em>
    <hr>
    <p>{!! nl2br($post->content) !!}</p>
    <button class="btn btn-primary" onclick="history.go(-1)">
        « Back
    </button>
@endsection