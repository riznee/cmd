@extends('layouts.app')
@section('content')
<div class="container is-fluid">
	<div class="wrapper">
		<head>
			@include('partials.admiNav')
		</head>
		<br>
		<div class="columns">
			<div class="column is-two-fifths">
				@include('partials.status')	
			</div>
			<div class="column">
                <h6 class="subtitle is-5">Post list</h6>
                <form method="post" action="{{route('posts.update',$post->id)}}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}{{ method_field('PATCH') }}
                        <div class="feild">
                            <label class="label">Title</label>
                        <input name='title' type="text" class="input" Value='{{$post->title}}'>
                        </div>
                        <hr>
                        <div class="control">
                                <label class="radio">
                                    @if($post->is_issue == 1)
                                    <input type="radio" name="is_issue" value ='1' checked>
                                    Is an issue
                                    @else
                                    <input type="radio" name="is_issue" value ='1'>
                                    Is an issue
                                    @endif
                                </label>
                                <label class="radio">
                                    <input type="radio" name="is_issue" value='0'>
                                      Not an issue 
                                </label>
                            </div>
                        <div class="columns">
                            <div class="column">
                                <div class="control">
                                    <label class="label" > Service List</label>
                                    <div class="select">
                                        <select name="service_id">
                                            <option>Select dropdown</option>
                                            @foreach($serviceList as $service)
                                                @if($post->service_id == $service->id)
                                                <option value="{{$service->id}}" selected >{{$service->name}}</option>
                                                @else
                                                <option value="{{$service->id}}">{{$service->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="control">
                                    <label class="label"> Type</label>
                                    <div class="select">
                                        <select name="post_type" value="{{$post->post_type}}">
                                            <option value='investigating'>Investigating</option>
                                            <option value='identified'>Identified</option>
                                            <option value='update'>Updating</option>
                                            <option value='monitoring'>Monitoring</option>
                                            <option value='resolved'>Resolved</option>
                                           
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="control">
                                    <label class="label">Related</label>
                                    <div class="select">
                                        <select name="parent_id" >
                                            <option value=''>NULL</option>
                                            @if($post->is_issue == 1)
                                            <option value=''>NULL</option>
                                            @else                                      
                                                @foreach($postList as $row)
                                                    @if($post->parent_id ==$row->id)
                                                        <option value="{{$row->id}}" selected>{{$row->title}}</option>
                                                    @else
                                                        @if($row->is_issue == 1)
                                                            <option value="{{$row->id}}">{{$row->title}}</option>
                                                        @endif                                                    
                                                    @endif                                            
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <hr>
                        <div class="feild">
                            <label class="label"> Descriptions</label>
                            <textarea id ="editor" name='description' class="textarea" rows="10" >
                                {{$post->description}}
                            </textarea>
                        </div>
                        <hr> 
                         
                        <div class="field is-grouped">
                            <div class="control">
                                <button  type="submit" class="button is-link">Save</button>
                            </div>
                            <div class="control">
                                    {{-- <button type="button" class="button is-text">Cancel</button>  --}}
                            </div>
                        </div>
                </form>
			</div>
        </div>
        <script>
                ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .then( editor => {
                                console.log( editor );
                        } )
                        .catch( error => {
                                console.error( error );
                        } );
        </script>
	</div>
    @include('partials.footer')
</div>
@stop