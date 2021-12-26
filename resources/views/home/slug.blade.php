@extends('layouts.site')
@section('content')

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('home') }}">Back</a></li>
		@if (!empty($grandParent))
				@foreach (array_reverse($grandParent) as $parent)
					<li class="breadcrumb-item active" aria-current="page"> <a href="{{ route('page', $parent->slug)}}">{{ $parent->title }}</a></li>
				@endforeach
			@endif
		</ol>
	</nav>
	<div class="jumbotron">
		<h1 class="display-4">{{$page->title}}</h1>
		@if(empty($page->childrean))
			@foreach ($page->children as $child)		
				<a class="btn btn-primary" href="{{route('page',$child->slug)}}">&nbsp; {{$child->title}}</a>
			@endforeach
		@endif
	</div>
	<br/>

	<div class="container">
		<div class="row">
		<div class="col-3">
			<div class="list-group">
				@if(!$articleList->isEmpty())
					@foreach($articleList as $item)
						<a class="list-group-item list-group-item-action" href="{{route('article',$item->slug)}}">{{$item->title}}</a>
					@endforeach
				@else
					<a class="list-group-item list-group-item-action"  href="#">No Content Availble</a>			
				@endif
			</div>
		</div>
		<div class="col">
			@if (!$articles->isEmpty())
				@foreach ($articles as $article)
					<div class="card">
						<div class="card-header">
							<h1 class="title">
								{{ $article->title }}
							</h1>
						</div>
						<div class="card-content">
							<span class="tag is-white">Type: &nbsp;
								{{-- <a class="tag {{ $article->category->color }}"> {{ $article->category->title }} </a> --}}
							</span>
							<span class="tag is-white"> Updated &nbsp;
								{{-- {{ $article->category->created_at }} --}}
							</span>
						</div>
					</div>
					<br/>
					<div class="card-content">
						{!! $article->content !!}
					</div>
				@endforeach
				@if ($articles->hasPages())
					<nav class="pagination is-centered is-small">
						@if ($articles->onFirstPage())
							<a class="pagination-previous" disabled>Previous Article</a>
						@else
							<a href="{{ $articles->previousPageUrl() }}" rel="prev" class="pagination-previous">Previous
								Article</a>
						@endif

						@if ($articles->hasMorePages())
							<a class="pagination-next" href="{{ $articles->nextPageUrl() }}" rel="next">Next Article</a>
						@else
							<a class="pagination-next" disabled>Next page Article</a>
						@endif
					</nav>
				@endif

			@else
				<div class="card">
					<div class="card-header">
						<h1 class="title">
							No conetent Available
						</h1>
					</div>
					<div class="card-content">
						under construction
					</div>
				</div>
				<br />
				<div class="card-content">

				</div>
			@endif
		</div>
	</div>

	<br/>

@stop





	