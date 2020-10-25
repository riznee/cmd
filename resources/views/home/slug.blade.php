
@extends('layouts.site')
@section('content')
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
			  
@stop