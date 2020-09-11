@extends('layouts.app')
@section('content')
<div class="container is-fluid">
	<div class="wrapper">
		<head>
			@include('partials.admiNav')
		</head>
		<br>
		<div class="hero is-fullheight">
			<div class="column is-one-third">
				side menu
			</div>
			<div class="column">
				content
			</div>
		</div>	  
		@include('partials.footer')
	</div>
</div>
@stop