
@extends('layouts.main')

@section('container')
<article class="mb-5">
<h1>Post Categories</h1>
	@foreach($categories as $category )
	<ul>
	<li>
		<h2>
			<a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
		</h2>
	</li>
	</ul>
	
	@endforeach
</article>
@endsection