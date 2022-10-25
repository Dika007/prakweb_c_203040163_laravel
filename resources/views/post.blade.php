@extends('layouts.main')

@section('container')
<h2>{{ $post->title }}</h2>

<p>By. <a href="/authors/{{ $post->author->usernmae }}" class="text-decoration-none">{{ $post->author->name }}</a> in
  <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

{!! $post->body !!}
<a href="/blog" class="text-decoration-none mt-3">back to Posts</a>
@endsection


