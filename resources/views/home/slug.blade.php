
@extends('layouts.site')
@section('content')
<section class="hero is-black">
	<div class="hero-body">
		<div class="container">
		<br>
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
	<div class="tab-content">
		<div class="tab-panel">
			<div class="colums">
				<div class="container">
					@if(!empty($articles))
						@foreach($articles as $article)
							<header class="bd-header">
								<div class="bd-header-title">
									<h1 class="title">
										{{$article->title}}
									</h1>
									<div class="control">
										<span class="tag is-white">Type: &nbsp; 
											<a class="tag {{$article->category->color}}"> {{$article->category->title}} </a>
										</span>
										<span class="tag is-white"> Updated &nbsp; 
											{{$article->category->created_at}}
										</span>
									</div>
								</div>
							</header>
							<br/>
							<div class="bd-content">
								{!!$article->content!!}
							</div>
						@endforeach
					@else					
					<div class="tile is-ancestor">
						<div class="tile is-vertical is-8">
							<div class="tile">
							<div class="tile is-parent is-vertical">
								<article class="tile is-child notification is-primary">
								<p class="title">Vertical...</p>
								<p class="subtitle">Top tile</p>
								</article>
								<article class="tile is-child notification is-warning">
								<p class="title">...tiles</p>
								<p class="subtitle">Bottom tile</p>
								</article>
							</div>
							<div class="tile is-parent">
								<article class="tile is-child notification is-info">
								<p class="title">Middle tile</p>
								<p class="subtitle">With an image</p>
								<figure class="image is-4by3">
									<img src="https://bulma.io/images/placeholders/640x480.png">
								</figure>
								</article>
							</div>
							</div>
							<div class="tile is-parent">
							<article class="tile is-child notification is-danger">
								<p class="title">Wide tile</p>
								<p class="subtitle">Aligned with the right tile</p>
								<div class="content">
								<!-- Content -->
								</div>
							</article>
							</div>
						</div>
						<div class="tile is-parent">
							<article class="tile is-child notification is-success">
							<div class="content">
								<p class="title">Tall tile</p>
								<p class="subtitle">With even more content</p>
								<div class="content">
								<!-- Content -->
								</div>
							</div>
							</article>
						</div>
					</div>
										
					@endif
				</div>
			</div>
		</div>
	</div>

</section>
 
@stop