@extends('layouts.site')
@section('content')

<x-carousle></x-carousle>


@if(!empty($article))
<div class="card">
    <div class="card-content">
        <div class="media-content">
            {{--  <p class="title is-4">{{ $article->title }}</p>  --}}
            {{-- <p class="subtitle is-6">@johnsmith</p> --}}
        </div>
        <div class="content">
            {!! html_entity_decode($article->content) !!}
        </div>
    </div>
</div>
@else
<div class="card">
    <div class="card-content">
        <div class="media-content">
            <p class="title is-4"> No Home Pages </p>


        </div>
        <div class="content">
          
        </div>
    </div>
</div>
@endif
@stop
