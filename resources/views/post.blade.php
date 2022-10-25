@extends('layouts.main')

@section('container')
<h2>{{ $post->title }}</h2>

<p>By. Dikz in
  <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

{!! $post->body !!}
<a href="/blog">back to Posts</a>
@endsection


