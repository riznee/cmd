@extends('layouts.app')
@section('content')
<div class="container is-fluid">
	<div class="wrapper">
		<head class="p-6">
			@include('partials.admiNav')
		</head>
		<section class="columns">
			<div class="column is-one-fifth">
				@include('partials.adminPanel')
			</div>
			<div class="column">
				<div class="hero is-fullheight">
					<div class="card">
						<header class="card-header">
						  <p class="card-header-title">
                            <a href="{{route('pages.index')}}" class="card-header-icon" aria-label="more options">
                                <span class="icon">
                                  <i class="fas fa-arrow-left" aria-hidden="true"></i>
                                </span>
                              </a>
                            @if(Request::is('pages/create'))
                                Create
                            @elseif(Request::is('pages/*'))
                                Edit
                            @endif
							Category
						  </p>
						</header>
						<div class="card-content">
                            @if(Request::is('categories/create'))
                            <form method="post" action="{{route('categories.store')}}">
                                {{ csrf_field() }}
                                <div class="feild">
                                    <label class="label">Title</label>
                                    <input name='title' type="text" class="input" placeholder="Your page name">
                                </div>
                                <hr>

                                <div class="columns">
                                    <div class ="column">
                                        <div class="feild">
                                            <label class="label">Slug</label>
                                            <input name='slug' type="text" class="input" placeholder="enter page slug">
                                        </div>
                                    </div>
                                    <div class ="column">
                                        <div class="feild">
                                            <label class="label">Color</label>
                                            <input name='color' type="text" class="input" placeholder="colorname">
                                        </div>
                                    </div>
                           
                                </div>  
                                <hr>
                                <div class="feild">
                                    <label class="label"> Descriptions</label>
                                    <textarea id ="editor" name='description' class="textarea" rows="3" placeholder="Post Descriptions"></textarea>
                                </div>
                                <hr> 
                                 
                                <div class="field is-grouped">
                                    <div class="control">
                                        <button  type="submit" class="button is-link">Save</button>
                                    </div>
                                </div>
                            </form>
                            @elseif(Request::is('categories/*'))
                            <form method="post" action="{{route('categories.update', $category->id)}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}{{ method_field('PATCH') }}
                                <div class="feild">
                                    <label class="label">Title</label>
                                    <input name='title' type="text" class="input" value="{{$category->title}}">
                                </div>
                                <hr>

                                <div class="columns">

                                    <div class ="column">
                                        <div class="feild">
                                            <label class="label">Slug</label>
                                            <input name='slug' type="text" class="input" value="{{$category->slug}}">
                                        </div>
                                    </div>
                                    <div class ="column">
                                        <div class="feild">
                                            <label class="label">Color</label>
                                            <input name='color' type="text" class="input" value="{{$category->color}}">
                                        </div>
                                    </div>
                                    
                                       
                                </div>  
                                <hr>
                                <div class="feild">
                                    <label class="label"> Descriptions</label>
                                    <textarea id ="editor" name='description' class="textarea" rows="3" >{{$category->description}}</textarea>
                                </div>
                                <hr> 
                                 
                                <div class="field is-grouped">
                                    <div class="control">
                                        <button  type="submit" class="button is-link">Save</button>
                                    </div>
                                </div>
                            </form>
                            @endif

                        </div>
					</div>
				</div>
			</div>
        </section>			  
		@include('partials.footer')
	</div>
</div>
@stop