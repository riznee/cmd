@extends('layouts.site')
@section('content')
<section class="hero is-medium">
	<div class="hero-body">
	  <div class="container">
		<h1 class="title is-1 ">Enol</h1>
		<h2 class="subtitle">We makes things easy  <br>to bond with technoloy.</h2>
		<a href="#" class="button is-white is-medium is-inverted">Learn More&ensp;<i class="fad fa-chevron-right"></i></a>
	  </div>
	</div>
  </section>
  <section id="parallax-1" class="hero is-large ">
	<div class="hero-body">
	  <div class="container">
		<div class="columns">
		  <div class="column is-6 is-offset-6">
			<h1 class="title is-1 ">Real time Help</h1>
			<hr class="content-divider">
			<h2 class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit explicabo amet magni illum eum voluptate! Eveniet voluptatem nam magnam necessitatibus.</h2>
			<a href="#" class="button is-white is-inverted">Next&ensp;<i class="fad fa-chevron-right"></i></a>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <section id="parallax-2" class="hero is-large ">
	<div class="hero-body">
	  <div class="container">
		<div class="columns">
		  <div class="column is-6">
			<h1 class="title is-1 ">Our Sevices</h1>
			<hr class="content-divider">
			<h2 class="subtitle">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque veritatis sequi natus minima distinctio ullam deleniti quasi quisquam autem deserunt.</h2>
			<a href="#" class="button is-white is-inverted">Next&ensp;<i class="fad fa-chevron-right"></i></a>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <section id="parallax-3" class="hero is-large ">
	<div class="hero-body">
	  <div class="container">
		<div class="columns">
		  <div class="column is-6 is-offset-6">
			<h1 class="title is-1 ">About us</h1>
			<hr class="content-divider">
			<h2 class="subtitle">We welcome you inquire about our service</h2>
			<a href="#" class="button is-white is-inverted">Next&ensp;<i class="fad fa-chevron-right"></i></a>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <section class="cta va">
	<div class="container">
	  <div class="columns">
		<div class="column is-6">
		  <h1 class="title is-1 ">Contact us</h1>
		  <hr class="content-divider">
		  <h2 class="subtitle">Please select topic below to relate you inquiry  if you dont find out what you need , fill the contact form. Our team is ready to answer all questions </h2>
		  <a class="button is-primary" href="{{route('login')}}"> Inquire About your project </a>
		  <a class="button is-primary" href="{{route('login')}}"> Live Chat </a>
		</div>
		<div class="column is-6">

			<form method="post" action="{{route('contactus.send')}}">
				{{ csrf_field() }}		
				<div class="field">
					<label class="label">Name</label>
					<div class="control">
					<input class="input is-medium" name="name" type="text" placeholder="Ahmed Mohamed">
					</div>
				</div>
				<br>

				<div class="field">
					<label class="label">Email</label>
					<div class="control">
					<input class="input is-medium" name="email" type="email" placeholder="Ahmed@enol.mv">
					</div>
				</div>
				<br>
				
				<div class="field">
					<label class="label">Message</label>
					<div class="control">
					<textarea class="textarea is-medium" name="message" placeholder="your inquery"></textarea>
					</div>
				</div>
				<br>

				<div class="field is-grouped">
					<div class="control">
					<button class="button is-white is-rounded is-outlined">Submit</button>
					</div>
				</div>
			</form>

		</div>
	  </div>
	</div>
</section>
@stop