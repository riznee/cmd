<?php
$index = 0; ?>

@extends('dark.layouts.site')
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
                    @if ($page->slug != 'contactus')
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
		<hr>
        <div class="row" id="">
            <div class="col-md-6">
                <h2>Contact Us</h2>

                <hr>
                <p>Please select topic below to relate you inquiry if you dont find out what you need , fill the contact
                    form. Our team is ready to answer all questions </p>
                <a class="btn btn-secondary" href="{{ route('login') }}"> Inquire About your project </a>
                <a class="btn btn-secondary" href="{{ route('login') }}"> Live Chat </a>
            </div>
            <div class="col-md-6" id="contactus">
                <form method="post" action="{{ route('contactus.send') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Name</label>
                        <div class="control">
                            <input class="form-control" name="name" type="text" placeholder="Ahmed Mohamed">
                            <small id="emailHelp" class="form-text text-muted">We will never share your email with anyone
                                else.</small>
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <label class="label has-text-white">Email</label>
                        <div class="control">
                            <input class="form-control" name="email" type="email" placeholder="Ahmed@enol.mv">
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <label class="label has-text-white">Message</label>
                        <div class="control">
                            <textarea class="form-control" name="message" placeholder="your inquery"></textarea>
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <div class="control">
                            <button class="button is-primary is-rounded">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>





    </div>




@stop
