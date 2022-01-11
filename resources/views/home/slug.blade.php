@extends('layouts.site')
@section('content')

    <br>
    <div class="box" style="padding: 20px;">
        <nav class="breadcrumb has-arrow-separator">
            <ul>
                <li><a href="{{ route('home') }}">Back</a></li>
                @if (!empty($grandParent))
                    @foreach (array_reverse($grandParent) as $parent)
                        <li> <a href="{{ route('page', $parent->slug) }}">{{ $parent->title }}</a></li>
                    @endforeach
                @endif
            </ul>
        </nav>
    </div>

    <div class="columns is-gapless">
        <div class=" box  column is-3" style=" margin: 10px 0px">
            <aside class="menu">
                <p class="menu-label">&nbsp;&nbsp; {{ $page->title }} </p>
                <ul class="menu-list">
                    <ul>
                        @if (!$articles->isEmpty())
                            @foreach ($articleList as $item)
                                <li><a class="list-group-item list-group-item-action"
                                        href="{{ route('article', $item->slug) }}">{{ $item->title }}</a></li>
                            @endforeach
                        @else
                            <li><a class="list-group-item list-group-item-action" href="#">No Content Availble</a></li>
                        @endif
                    </ul>
                </ul>
                @if (!empty($page->childrean))
                    <p class="menu-label">&nbsp;&nbsp;
                        Sub Pages
                    </p>
                    <ul class="menu-list">
                        {{-- @if (empty($page->childrean)) --}}
                        @foreach ($page->children as $child)
                            <li>
                                <a class="btn btn-primary" href="{{ route('page', $child->slug) }}">&nbsp;
                                    {{ $child->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </aside>

        </div>
        <div class=" box  column" style=" margin: 10px 10px">
            @if (!$articles->isEmpty())
                @foreach ($articles as $article)
                    <div class="card">
                        <div class="card-content">
                            <div class="media-content">
                                {{-- <p class="title is-4">{{ $article->title }}</p> --}}
                                {{-- <p class="subtitle is-6">@johnsmith</p> --}}
                            </div>
                            <div class="content">
                                {!! html_entity_decode($article->content) !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="card">
                    <div class="card-content">
                        <div class="media-content">
                            <p class="title is-4"> No conetent Available </p>
                        </div>
                    </div>
                    <div class="card-content">
                        under construction
                    </div>
                </div>
            @endif
        </div>
    </div>

@stop
