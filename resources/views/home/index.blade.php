@extends('layouts.site')
@section('content')

<x-carousle></x-carousle>

    
        <div class="row">
            @if (!empty($pages))
                @foreach ($pages as $page)
                    @if ($page->slug != 'contactus' && $page->slug !='home')
                        <div class="col-md-4 homepage">
                            <h2>{{ $page->title }}</h2>
                            <p>{{ $page->description }}</p>
                            @if ($page->children != [])
                                @foreach ($page->children as $child)
                                    <p>
                                        <a class="btn btn-secondary" href="{{ route('page', $child->slug) }}"
                                            role="button">{{ $child->title }} &raquo;</a>
                                    </p>
                                @endforeach
                            @endif
                        </div>
                    @endif
                @endforeach
            @endif
        </div>



@stop
