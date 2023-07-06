@extends('layout')
@section('title')
New Post
@endsection
@section('content')
<section>
        
    <form class="blog__form__container" method="POST">
        @csrf
        <!-- <h2 class="text title">New Post</h2> -->
        <label class="text form__label__text" for="title">Title</label>
        <input class="text form-text blog__input" name="title" type="text" required>
        <label class="text form__label__text" for="subtitle">Subtitle</label>
        <textarea class="text form-text blog__input" name="subtitle" type="text" rows="2" required></textarea>
        <label class="text form__label__text" for="body">Body</label>
        <textarea class="text form-text blog__input" name="body" type="text" rows="10" required></textarea>
        <label class="text form__label__text" for="photo">Post Main Photo (url)</label>
        <input class="text form-text blog__input" name="photo" type="text">
        <label class="text form__label__text" for="author">Author</label>
        <input class="text form-text blog__input" name="author" type="text" required>
        <label class="text form__label__text" for="author-pic">Author picture (url)</label>
        <input class="text form-text blog__input" name="author-pic" type="text">
        <button type="submit" class="text form__btn">Create</button>
    </form>
</section>
@endsection