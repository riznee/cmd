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
            Preview
        </p>

    </header>
</div>


    <div class="card">
        <div class="card-content">
            <div class="media-content">
                <p class="title is-4">{{ $article->title }}</p>
                {{-- <p class="subtitle is-6">@johnsmith</p> --}}
            </div>
            <div class="content">
                {!! html_entity_decode($article->content) !!}
            </div>
        </div>
    </div>


@stop