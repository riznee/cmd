
@extends('layouts.site')
@section('content')
<section class="hero is-black">
	<div class="hero-body">
		<div class="container">
		<br>
		<nav class="breadcrumb" aria-label="breadcrumbs">
			<ul>
				<li><a href="{{route('home')}}">Home Page</a></li>
				@if($page->parent != [])
				<li><a href="{{route('page',$page->parent->slug)}}">{{$page->parent->title}}</a></li>
				@endif
				<li><a href="#">{{$page->title}}</a></li>
			</ul>
		</nav>
			<h1 class="title">{{$page->title}}</h1>	
		</div>
	</div>
	<div class="tabs is-boxed is-centered main-menu" id="nav">
		<ul>
		@if(empty($page->childrean))
			@foreach ($page->children as $child)
			<li data-target="{{$child->title}}" id="{{$child->id}}">
				<a  class="button is-info" href="{{route('page',$child->slug)}}">
					&nbsp; {{$child->title}}
				</a>
			</li>
			@endforeach
    	@endif
		</ul>
	</div>
	<div class="card">
	
			<div class="colums">
				<div class="container">
					@if(!empty($articles))
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
							</div>
							<br/>
							<div class="card-content">
								{!!$article->content!!}
							</div>
						@endforeach
					@else					
					sdfdkjshfkjdshfkjh
					@endif
				</div>
			</div>
		
	</div>

</section>
 
@stop