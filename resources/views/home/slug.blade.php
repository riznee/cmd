
@extends('layouts.app')
@section('content')
<div class="container is-fluid">
	<div class="wrapper">
		<head>
			@include('partials.nav')
		</head>
		<section class="columns">
			<div class="column is-one-fifth">
				@include('partials.slugPanel')
			</div>
			<div class="column">				
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
    </section>			  
		@include('partials.footer')
	</div>
</div>
@stop