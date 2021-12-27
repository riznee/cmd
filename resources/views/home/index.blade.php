<?php
$index = 0; 

?>

@extends('layouts.site')
@section('content')


    <div id="banner" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="banner" data-slide-to="{{ $index }}"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                    <rect width="100%" height="100%" fill="#777" />
                </svg>
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                            at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<hr>


    <div class="container">
        <div class="row">
            @if (!empty($pages))
                @foreach ($pages as $page)
                    @if ($page->slug != 'contactus' && $page->slug !='home')
                        <div class="col-md-4 homepage">
                            <h2>{{ $page->title }}</h2>
                            <p>{{ $page->description }}</p>
                            @if ($page->children != [])
                                @foreach ($page->children as $child)
                                    <p>
                                        <a class="btn btn-secondary" href="{{ route('page', $child->slug) }}"
                                            role="button">{{ $child->title }} &raquo;</a>
                                    </p>
                                @endforeach
                            @endif
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
		

    </div>

    <br>
@stop
