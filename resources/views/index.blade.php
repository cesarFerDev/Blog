@extends('layout')
@section('title')
Post
@endsection
@section('content')
<section class="blog__cards__container">
    @foreach($posts as $post)
        <a href="/post/{{$post->id}}"><div class = "blog__card">
            <h3 class="text title">{{$post->title}}</h3>
            <div class="blog__card__img">
            <img src="{{$post->photo}}" alt="blog-photo">
            </div>
            <div class="blog__card__text">
                <p class="text content"><i>{{$post->subtitle}}</i></p>
                <p class="text content"><strong>Written By: </strong>{{$post->author}}</p>
            </div>
        </div></a>
    @endforeach
</section>
@endsection