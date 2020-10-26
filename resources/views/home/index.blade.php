<?php

$id = 0

?>
@extends('layouts.site')
@section('content')
<section class="hero is-medium">
	<div class="hero-body">
	  <div class="container">
	  	@if(!empty($article))
			<h1 class="title is-1">{{$article->title}}</h1>
			<h2 class="subtitle">{{$article->description}}</h2>
			<a href="{{route('page',$article->page->slug)}}" class="button is-white is-medium is-inverted">Learn More &ensp; ....<i class="fad fa-chevron-right"></i></a>
		@endif
	  </div>
	</div>
  </section>
  @if(!empty($pages)) 
  @foreach($pages as $page)
  
  	<?php $id=$id+1 ?>
		<section id="parallax-{{$id}}" class="hero is-medium ">
			<div class="hero-body">
				<div class="container">
					<div class="columns">
						<div class="column is-6 is-offset-6">
							<h1 class="title is-1 ">{{$page->title}}</h1>
							<hr class="content-divider">
							<h2 class="subtitle"> {{$page->description}}</h2>
							@if($page->children != [])
								@foreach($page->children as $child)
									<a href="{{route('page', $child->slug)}}" class="button is-white is-inverted">{{$child->title}}&ensp;<i class="fad fa-chevron-right"></i></a>
								@endforeach
							@endif
						</div>
					</div>
				</div>
			</div>
		</section>
	@endforeach
  @endif
  <section class="cta va">
	<div class="container">
	  <div class="columns">
		 
		<div class="column is-6 ">
			<br>
		  <h1 class="title is-1 has-text-white ">Contact us</h1>
		  <hr class="content-divider">
		  <h2 class="subtitle has-text-white">Please select topic below to relate you inquiry  if you dont find out what you need , fill the contact form. Our team is ready to answer all questions </h2>
		  <a class="button is-primary" href="{{route('login')}}"> Inquire About your project </a>
		  <a class="button is-primary" href="{{route('login')}}"> Live Chat </a>
		</div>
		<div class="column is-6">
			<br>
			<form method="post" action="{{route('contactus.send')}}">
				{{ csrf_field() }}		
				<div class="field">
					<label class="label has-text-white">Name</label>
					<div class="control">
					<input class="input is-medium" name="name" type="text" placeholder="Ahmed Mohamed">
					</div>
				</div>
				<br>

				<div class="field">
					<label class="label has-text-white">Email</label>
					<div class="control">
					<input class="input is-medium" name="email" type="email" placeholder="Ahmed@enol.mv">
					</div>
				</div>
				<br>
				
				<div class="field">
					<label class="label has-text-white">Message</label>
					<div class="control">
					<textarea class="textarea is-medium" name="message" placeholder="your inquery"></textarea>
					</div>
				</div>
				<br>

				<div class="field is-grouped">
					<div class="control">
					<button class="button is-primary is-rounded">Submit</button>
					</div>
				</div>
			</form>

		</div>
	  </div>
	</div>
</section>
@stop