@extends('layouts.app')
@section('content')
<div class="container is-fluid">
	<div class="wrapper">
		<head>
			@include('partials.nav')
		</head>
		<section class="section">
			<div class="container">
				@if(!empty($article))
					<h1 class="{{$article->category->description}}">{{$article->title}}</h1>
					<span class="tag {{$article->category->color}}"> Type:  &nbsp; {{$article->category->title}} Updated:  &nbsp; {{$article->category->created_at}}</span>
					<nav class="breadcrumb" aria-label="breadcrumbs">
						<li><a href="{{route('page', $article->page->slug )}}">{{$article->page->title}}</a></li>
					</nav>
					{!!$article->content!!}
				@endif
			</div>
		</section>
		@include('partials.footer')
	</div>
</div>
@stop