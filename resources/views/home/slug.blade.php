
@extends('layouts.site')
@section('content')
<section class=" section">
	<div>
		<div class="container">
			<br>
			<nav class="breadcrumb has-arrow-separator" aria-label="breadcrumbs">				
				<ul>
					<li><a href="{{route('home')}}">Back</a></li>
					@if(!empty($grandParent))
						@foreach(array_reverse($grandParent) as $parent)
							<li><a href="{{route('page',$parent->slug)}}">{{$parent->title}}</a></li>
						@endforeach
					@endif
					
				</ul>
			</nav>
			<h1 class="title">{{$page->title}}</h1>	
			<div class="tabs is-right">
				<ul>
			
					@if(empty($page->childrean))
						@foreach ($page->children as $child)		
							<li> <a class=" button is-normal  is-outlined" href="{{route('page',$child->slug)}}">
								&nbsp; {{$child->title}}
							</a></li>
						@endforeach
					@endif
				</ul>
				
			</div>
		</div>
	</div>
</section>
<section class="section">
<div class="columns">	
		<nav class="column   panenl is-one-fifth menu">
			
			@if(!$articleList->isEmpty())
			<p class="panel-heading">
				Document Availble
			</p>
			  	@foreach($articleList as $item)
					<a class="panel-block" href="{{route('article',$item->slug)}}">
						{{$item->title}}
					</a>
				@endforeach
			
			@else
			<p class="panel-heading">
				No Content Availble
			</p>			
			@endif
		</nav>
		<div class=" column  slugArticle container">
	
			@if(!$articles->isEmpty())
				@foreach($articles as $article)
					<div class="card">
						<div class="card-header">
							<h1 class="title">
								{{$article->title}}
							</h1>
						</div>
						<div class="card-content">
							<span class="tag is-white">Type: &nbsp; 
								<a class="tag {{$article->category->color}}"> {{$article->category->title}} </a>
							</span>
							<span class="tag is-white"> Updated &nbsp; 
								{{$article->category->created_at}}
							</span>
						</div>
					</div>
					<br/>
					<div class="card-content">
						{!!$article->content!!}
					</div>				
				@endforeach
				@if ($articles->hasPages())
					<nav class="pagination is-centered is-small">
						@if ($articles->onFirstPage())
							<a class="pagination-previous" disabled>Previous Article</a>
						@else
							<a href="{{ $articles->previousPageUrl() }}" rel="prev" class="pagination-previous">Previous Article</a>
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
				<br/>
				<div class="card-content">
			
				</div>
			@endif
		</div>
</div>
		

</section>
 
@stop