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
            Create Page
		</p>		

	</header>
</div>

<section class=" section ">
    <form method="post" action="{{route('pages.store')}}">
        {{ csrf_field() }}
        {{ method_field('POST') }}
        <div class="field">
            <label class="label">Title</label>
            <div class="control">
                <input class="input"  name="title"  id="email" type="text" placeholder="Your Page Name" required>
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

            {{--  <div class="column">
                <label class="label">Icon</label>            
                <div class="select">
                    <select name="icon" id="selectIcon">
                        <option value=''>Null</option>
                    </select>
                </div>
            </div>  --}}

            <div class="column">
                <label class="label" > Parent </label>
                    <div class="select">
                        <select name="parent_id">
                            <option value='' >null</option>
                                @foreach($pages as $page)
                                    <option value="{{$page->id}}">{{$page->title}}</option>
                                @endforeach
                        </select>
                    </div>
            </div>
            <div class="column">             
                <label class="label"> Order</label>
                <div class="select">
                    <select name="depth">
                        <option value='' selected>null</option>
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
                <textarea class="textarea"name="description"  id="message" type="text" row="10" required></textarea>
            </div>
        </div>
        
        <div style="align-content: center">
            <button class="button is-primary" type="submit">Save</button>
        </div>
       
    </form>

</section>
         
@stop