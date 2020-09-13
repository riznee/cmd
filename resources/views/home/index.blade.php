@extends('layouts.app')
@section('content')
<div class="container is-fluid">
	<div class="wrapper">
		<head>
			@include('partials.nav')
		</head>
		<section class="section">
			<div class="container">
				@if(!empty($articles))
					@foreach($articles as $article)
						<h1>{{$article->title}}</h1>
						{!!$article->content!!}
					@endforeach
				@endif
			</div>
		</section>
		@include('partials.footer')
	</div>
</div>
@stop