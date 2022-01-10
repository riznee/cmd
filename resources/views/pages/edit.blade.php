@extends('layouts.admin')
@section('content')


<div class="card has-background-success"style=" margin: 10px">
	<header class="card-header has-text-info-light">
		<a  href="{{url()->previous()}}" class="card-header-icon" aria-label="more options">
		  <span class="icon">
			<i class="fas fa-arrow-left" aria-hidden="true"></i>
		  </span>
	  	</a>
		<p class="card-header-title">
            Edit Page
		</p>		

	</header>
</div>

<section class=" section ">
    <form method="post" action="{{route('pages.update', $page->id)}}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}{{ method_field('PATCH') }}
        <div class="field">
            <label class="label">Title</label>
            <div class="control">
                <input class="input"  name="title"  id="email" type="text" placeholder="Your Page Name"  value="{{$page->title}}"required>
            </div>
        </div>

        <div class="columns">
            <div class="column">
                <div class="field">
                    <label class="label">Slug</label>
                    <div class="control">
                        <input class="input"name="slug"  id="name" type="text" placeholder="enter page slug" value="{{$page->slug}}"required>
                    </div>
                </div>
            </div>

            <div class="column">
                <label class="label">Icon</label>
                <div class="select">
                    <select name="icon" id="selectIcon">
                        <option value="{{$page->icon}}" selected >{{$page->icon}}</option>
                        
                    </select>
                </div>
            </div>

            <div class="column">
                <label class="label" > Parent </label>
                    <div class="select">
                        <select name="parent_id">>
                            <option value='' selected>NULL</option>
                            @foreach($pageList as $page)
                                @if($page->parent_id == $page->id)
                                    <option value="{{$page->id}}" selected >{{$page->title}}</option>
                                @else
                                    <option value="{{$page->id}}">{{$page->title}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
            </div>
            <div class="column">             
                <label class="label"> Order</label>
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

        <div class="field">
            <label class="label">Descriptions</label>
            <div class="control">
                <textarea class="textarea"name="description"  id="message" type="text" row="10" required> {{$page->description}}</textarea>
            </div>
        </div>
 
        
        
        <div style="align-content: center">
            <button class="button is-primary" type="submit">Save</button>
        </div>
       
    </form>

</section>




                            {{-- @elseif(Request::is('pages/*'))
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
</div> --}} 
@stop