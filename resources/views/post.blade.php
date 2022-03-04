@extends('layouts.main')

@section('container')
<div class="container">
	<div class="row justify-content-center mb-5">
		<div class="col-md-8">
			<h2>{{ $post->title }}</h2>
			<p>By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->username }}</a> in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>

			<img src="http://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">

			<article class="my-3 fs-5 mb-3">
				{!! $post->body !!}
			</article>
			<a href="/blog" class="d-block mt-4">Back to post</a>
		</div>
	</div>
</div>

@endsection

