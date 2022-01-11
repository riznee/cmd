@extends('layouts.admin')
@section('content')

    <div class="card has-background-success" style=" margin: 10px">
        <header class="card-header has-text-info-light">
            <a href="{{ url()->previous() }}" class="card-header-icon" aria-label="more options">
                <span class="icon">
                    <i class="fas fa-arrow-left" aria-hidden="true"></i>
                </span>
            </a>
            <p class="card-header-title">
                Create Articles
            </p>

        </header>
    </div>

    <section class=" section ">
        <form method="post" action="{{ route('articles.store') }}">
            {{ csrf_field() }}

            <div class="field">
                <label class="label">Title</label>
                <div class="control">
                    <input class="input" name="title" id="email" type="text" placeholder="Your Page Name" required>
                </div>
            </div>

            <div class="columns">

                <div class="column">
                    <div class="field">
                        <label class="label">Slug</label>
                        <div class="control">
                            <input class="input"name="slug"  id="name" type="text" placeholder="enter page slug"required>
                        </div>
                    </div>
                </div>
    
               
                <div class="column">
                    <label class="label" > Parent </label>
                        <div class="select">
                            <select name="parent_id">
                                <option value='' selected>null</option>
                                    @foreach($pages as $page)
                                        <option value="{{$page->id}}">{{$page->title}}</option>
                                    @endforeach
                            </select>
                        </div>
                </div>

            </div>

            <div class="field">
                <label class="label">Descriptions</label>
                <div class="control">
                    <textarea class="textarea"name="description"  id="message" type="text" row="10" required></textarea>
                </div>
            </div>

            <div class="feild">
                <label class="label"> Content</label>
                <textarea id ="summary-ckeditor" name='content' class="textarea" rows="3" placeholder="Content"></textarea>
            </div>
    
            <div style="align-content: center">
                <button class="button is-primary" type="submit">Save</button>
            </div>

        </form>
    </section>

    <script>
        CKEDITOR.replace('summary-ckeditor', {
            filebrowserUploadUrl: "{{ route('upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
    </script>


    {{-- <div class="container is-fluid">
	<div class="wrapper">
		<head class="p-6">
			{{-- @include('partials.admiNav') --}}
    {{-- </head>
		<section class="columns">
			<div class="column is-one-fifth"> --}}
    {{-- @include('partials.adminPanel') --}}
    {{-- </div>
			<div class="column">
				<div class="hero is-fullheight">
					<div class="card">
						<header class="card-header">
						  <p class="card-header-title">
                            <a href="{{route('articles.index')}}" class="card-header-icon" aria-label="more options">
                                <span class="icon">
                                  <i class="fas fa-arrow-left" aria-hidden="true"></i>
                                </span>
                              </a>
                            @if (Request::is('articles/create'))
                                Create
                            @elseif(Request::is('articles/*'))
                                Edit
                            @endif
							Articles
						  </p>
						</header>
						<div class="card-content">
                            @if (Request::is('articles/create'))
                            <form method="post" action="{{route('articles.store')}}">
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

                                    <div class="column">
                                        <div class="control">
                                            <label class="label" > Page </label>
                                            <div class="select">
                                                <select name="page_id">
                                                    @foreach ($pages as $page)
                                                    <option value="{{$page->id}}">{{$page->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="column">
                                        <div class="control">
                                            <label class="label" > Category </label>
                                            <div class="select">
                                                <select name="category_id">
                                                    @foreach ($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>  
                                <hr>
                                <div class="feild">
                                    <label class="label"> Descriptions</label>
                                    <textarea id ="editor" name='description' class="textarea" rows="3" placeholder=" Descriptions"></textarea>
                                </div>
                                <hr> 
                                <hr>
                                <div class="feild">
                                    <label class="label"> Content</label>
                                    <textarea id ="summary-ckeditor" name='content' class="textarea" rows="3" placeholder="Content"></textarea>
                                </div>
                                <hr> 
                                 
                                <div class="field is-grouped">
                                    <div class="control">
                                        <button  type="submit" class="button is-link">Save</button>
                                    </div>
                                </div>
                            </form>
                            @elseif(Request::is('articles/*'))
                            <form method="post" action="{{route('articles.update', $article->id)}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}{{ method_field('PATCH') }}
                                <div class="feild">
                                    <label class="label">Title</label>
                                    <input name='title' type="text" class="input" value="{{$article->title}}">
                                </div>
                                <hr>

                                <div class="columns">
                                    <div class ="column">
                                        <div class="feild">
                                            <label class="label">Slug</label>
                                            <input name='slug' type="text" class="input" value="{{$article->slug}}">
                                        </div>
                                    </div>

                                    <div class="column">
                                        <div class="control">
                                            <label class="label" > Page </label>
                                            <div class="select">
                                                <select name="page_id">
                                                    @foreach ($pages as $page)
                                                    <option value="{{$page->id}}">{{$page->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="column">
                                        <div class="control">
                                            <label class="label" > Category </label>
                                            <div class="select">
                                                <select name="category_id">
                                                    @foreach ($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>  
                                <hr>
                                <div class="feild">
                                    <label class="label"> Descriptions</label>
                                    <textarea id ="editor" name='description' class="textarea" rows="3">{{$article->description}}</textarea>
                                </div>
                                <hr> 
                                <hr>
                                <div class="feild">
                                    <label class="label"> Content</label>
                                    <textarea id ="summary-ckeditor" name='content' class="textarea" rows="3">{{$article->content}}</textarea>
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
	</div>
</div> --}}
  
@stop
