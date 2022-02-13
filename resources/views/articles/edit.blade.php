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
                Edit Articles
            </p>

        </header>
    </div>

    <section class=" section ">
        <form method="post" action="{{ route('articles.update', $article->id) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}{{ method_field('PATCH') }}

            <div class="field">
                <label class="label">Title</label>
                <div class="control">
                    <input class="input" name="title" id="email" type="text" placeholder="Your Page Name"
                        value="{{ $article->title }}" required>
                </div>
            </div>

            <div class="columns">

                <div class="column">
                    <div class="field">
                        <label class="label">Slug</label>
                        <div class="control">
                            <input class="input" name="slug" id="name" type="text" placeholder="enter page slug"
                                value="{{ $article->slug }}" required>
                        </div>
                    </div>
                </div>


                <div class="column">
                    <label class="label"> Parent </label>
                    <div class="select">
                        <select name="page_id">
                            @foreach ($pages as $page)
                                @if ($article->page_id == $page->id)
                                    <option value="{{ $page->id }}" selected>{{ $page->title }}</option>
                                @else
                                    <option value="{{ $page->id }}">{{ $page->title }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

            </div>

            <div class="field">
                <label class="label">Descriptions</label>
                <div class="control">
                    <textarea class="textarea" name="description" id="message" type="text" row="10"
                        required>{{$article->description}}</textarea>
                </div>
            </div>

            <div class="feild">
                <label class="label"> Content</label>
                <textarea id="summary-ckeditor" name='content' class="textarea" rows="3"
                    placeholder="Content"> {{$article->content}}</textarea>
            </div>

            <br/>
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
    

@stop
