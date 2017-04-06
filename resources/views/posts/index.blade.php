@extends('layout')

@section('title', '首页')

@section('content')

    <h1>{{ config('blog.title') }}</h1>

    <hr>

    <ul>
        @foreach($posts as $post)
            <li>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                <em>{{ $post->published_at->diffForHumans() }}</em>
                <p>{!! str_limit($post->content) !!}</p>
            </li>
        @endforeach
    </ul>
    <hr>
    {!! $posts->render() !!}
@endsection