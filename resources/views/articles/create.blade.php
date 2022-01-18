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
                    <label class="label" >  Belongs to </label>
                        <div class="select">
                            <select name="page_id">
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
                <textarea id ="summary-ckeditor" name='content' class="textarea" rows="10" ></textarea>
            </div>
            <br/>
    
            <div class="field">
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



  
@stop
