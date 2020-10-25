
@extends('layouts.site')
@section('content')
<<<<<<< HEAD
<section class="hero">
	<div class="hero-body is-info">
		<div class="container">
			<h1 class="title">
			Page Name
			</h1>
		</div>
	</div>
	
	<div class="tabs is-toggle is-toggle-rounded is-centered main-menu" id="nav">
		<ul>
			<li data-target="pane-1" id=1>
				<a>
					<span>Subpage</span>
				</a>
			</li>

			<li data-target="pane-2" id=2 class="is-active">
				<a>
					<span>subpage</span>
				</a>
			</li>
		</ul>
	</div>
	<div class="tab-content">
		<div class="tab-pane" id="pane-1">
			<p>
				sdhfkjsdhfkjsdhfkjhsdkfjdhskfjhsdkfjhksdhf
			</p>
		</div>
		<div class="tab-pane" id="pane-2">
			<p>
				sdhfkjsdhfkjsdhfkjhsdkfjdhskfjhsdkfjhksdhf
			</p>
		</div>
	</div>
</section>
			  
=======
<section class="hero is-info">
	<div class="hero-body">
		<div class="container">
			<h1 class="title">{{$page->title}}</h1>	
		</div>
	</div>
	<div class="tabs is-boxed is-centernd main-menu" id="nav">
		<ul>
		@if(empty($page->childrean))
			@foreach ($page->children as $child)
			<li data-target="{{$child->title}}" id="{{$child->id}}">
				<a  href="{{route('page',$child->slug)}}">
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
					@endif
				</div>
			</div>
		</div>
	</div>

</section>
 
>>>>>>> ba0249a14fe7e772911c34393518b68dbf39f09f
@stop