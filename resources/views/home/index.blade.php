@extends('layouts.site')
@section('content')

{{--  <x-carousle></x-carousle>  --}}


@if(!empty($article))
<div class="section">
    <div class="card-content">
        <div class="media-content">
        </div>
        <div class="content">
            {!! html_entity_decode($article->content) !!}
        </div>
    </div>
</div>
@else
<div class="section">
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
