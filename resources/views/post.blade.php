@extends('layout')
@section('title')
Post
@endsection
@section('content')
<section class="blog__container">
    <div class="blog__header">
        <div class="blog__header__content">
            <h3 class="text title">{{$post->title}}</h3>
            <h4 class="text content"><i>{{$post->subtitle}}</i></h4>
        </div>
        <img src="{{$post->photo}}" alt="blog-photo">
    </div>
    <div class="blog__body">
        <p class="text content">{{$post->body}}</p>
        
    </div>
    <hr class="blog__separator">
    <div class="blog__header__author">
        <img src="{{$post->author_photo}}" alt="author">
        <p class="text content"><strong>Written by: </strong>{{$post->author}}</p>
    </div>
        
</section>
@endsection