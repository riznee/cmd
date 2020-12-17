@extends('layouts.admin')
@section('content')
<div class="container is-fluid">
	<div class="wrapper">
		<head class="p-6">
		
		</head>
		<section class="columns">
			<div class="column is-one-fifth">
			
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
							Pages
						  </p>
						</header>
						<div class="card-content">
                            @if(Request::is('pages/create'))
                            <form method="post" action="{{route('pages.store')}}">
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
                                            <label class="label">Icon</label>
                                            <input name='icon' type="text" class="input" placeholder="icon name">
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="control">
                                            <label class="label" > Parent </label>
                                            <div class="select">
                                                <select name="parent_id">
                                                    <option value='' selected>NULL</option>
                                                    @foreach($pages as $page)
                                                    <option value="{{$page->id}}">{{$page->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="column">
                                        <div class="control">
                                            <label class="label"> Depth</label>
                                            <div class="select">
                                                <select name="depth">
                                                    <option value='' selected>NULL</option>
                                                    <option value='1'>1</option>
                                                    <option value='2'>2</option>
                                                    <option value='3'>3</option>
                                                    <option value='4'>4</option>
                                                    <option value='5'>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                <hr> 

                                <div class="feild">
                                    <label class="label"> Descriptions</label>
                                    <textarea id ="editor" name='description' class="textarea" rows="3" placeholder="Post descriptions"></textarea>
                                </div>
                                <hr> 
                                 
                                <div class="field is-grouped">
                                    <div class="control">
                                        <button  type="submit" class="button is-link">Save</button>
                                    </div>
                                </div>
                            </form>
                            @elseif(Request::is('pages/*'))
                            <form method="post" action="{{route('pages.update', $page->id)}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}{{ method_field('PATCH') }}
                                <div class="feild">
                                    <label class="label">Title</label>
                                    <input name='title' type="text" class="input" value="{{$page->title}}">
                                </div>
                                <hr>

                                <div class="columns">

                                    <div class ="column">
                                        <div class="feild">
                                            <label class="label">Slug</label>
                                            <input name='slug' type="text" class="input" value="{{$page->slug}}">
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="feild">
                                            <label class="label">Icon</label>
                                            <input name='icon' type="text" class="input" value="{{$page->icon}}">
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="control">
                                            <label class="label" > Parent </label>
                                            <div class="select">
                                                <select name="parent_id">
                                                <option value='' selected>NULL</option>
                                                    @foreach($pages as $page)
                                                        @if($page->parent_id == $page->id)
                                                            <option value="{{$page->id}}" selected >{{$page->title}}</option>
                                                        @else
                                                            <option value="{{$page->id}}">{{$page->title}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="column">
                                        <div class="control">
                                            <label class="label"> Depth</label>
                                            <div class="select">
                                                <select name="depth">
                                                    <option value="{{$page->depth}}" selected>{{$page->depth}}</option>
                                                    <option value='1'>1</option>
                                                    <option value='2'>2</option>
                                                    <option value='3'>3</option>
                                                    <option value='4'>4</option>
                                                    <option value='5'>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                <hr> 
                                <div class="feild">
                                    <label class="label"> descriptions</label>
                                    <textarea id ="editor" name='description' class="textarea" rows="3" >{{$page->description}}</textarea>
                                </div>
                                <hr> 
                                
                                <div class="field is-grouped">
                                    <div class="control">
                                        <button  type="submit" class="button is-link">Update</button>
                                    </div>
                                </div>
                            </form>
                            @endif

                        </div>
					</div>
				</div>
			</div>
        </section>			  
		
	</div>
</div>
@stop