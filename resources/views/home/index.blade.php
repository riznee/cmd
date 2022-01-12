@extends('layouts.site')
@section('content')

{{--  <br/>
<section class="hero is-info is-medium is-bold" style="padding: 20px;">
    <div class="hero-head">
        
    </div>
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title">
            
            <h2 class="subtitle">
            
            </h2>
        </div>
    </div>
</section>

<br/>

<section class="container">
    <div class="columns features">
        <div class="column is-4">
            <div class="card is-shady">
                <div class="card-image has-text-centered">
                    <i class="fa fa-paw"></i>
                </div>
                <div class="card-content">
                    <div class="content">
                        <h4>Tristique senectus et netus et. </h4>
                        <p>Purus semper eget duis at tellus at urna condimentum mattis. Non blandit massa enim nec. Integer enim neque volutpat ac tincidunt vitae semper quis. Accumsan tortor posuere ac ut consequat semper viverra nam.</p>
                        <p><a href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="column is-4">
            <div class="card is-shady">
                <div class="card-image has-text-centered">
                    <i class="fa fa-empire"></i>
                </div>
                <div class="card-content">
                    <div class="content">
                        <h4>Tempor orci dapibus ultrices in.</h4>
                        <p>Ut venenatis tellus in metus vulputate. Amet consectetur adipiscing elit pellentesque. Sed arcu non odio euismod lacinia at quis risus. Faucibus turpis in eu mi bibendum neque egestas cmonsu songue. Phasellus vestibulum lorem
                        sed risus.</p>
                        <p><a href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="column is-4">
            <div class="card is-shady">
                <div class="card-image has-text-centered">
                    <i class="fa fa-apple"></i>
                </div>
                <div class="card-content">
                    <div class="content">
                        <h4> Leo integer malesuada nunc vel risus. </h4>
                        <p>Imperdiet dui accumsan sit amet nulla facilisi morbi. Fusce ut placerat orci nulla pellentesque dignissim enim. Libero id faucibus nisl tincidunt eget nullam. Commodo viverra maecenas accumsan lacus vel facilisis.</p>
                        <p><a href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="columns features">
        <div class="column is-4">
            <div class="card is-shady">
                <div class="card-image has-text-centered">
                    <i class="fa fa-paw"></i>
                </div>
                <div class="card-content">
                    <div class="content">
                        <h4>Tristique senectus et netus et. </h4>
                        <p>Purus semper eget duis at tellus at urna condimentum mattis. Non blandit massa enim nec. Integer enim neque volutpat ac tincidunt vitae semper quis. Accumsan tortor posuere ac ut consequat semper viverra nam.</p>
                        <p><a href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="column is-4">
            <div class="card is-shady">
                <div class="card-image has-text-centered">
                    <i class="fa fa-empire"></i>
                </div>
                <div class="card-content">
                    <div class="content">
                        <h4>Tempor orci dapibus ultrices in.</h4>
                        <p>Ut venenatis tellus in metus vulputate. Amet consectetur adipiscing elit pellentesque. Sed arcu non odio euismod lacinia at quis risus. Faucibus turpis in eu mi bibendum neque egestas cmonsu songue. Phasellus vestibulum lorem
                        sed risus.</p>
                        <p><a href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="column is-4">
            <div class="card is-shady">
                <div class="card-image has-text-centered">
                    <i class="fa fa-apple"></i>
                </div>
                <div class="card-content">
                    <div class="content">
                        <h4> Leo integer malesuada nunc vel risus. </h4>
                        <p>Imperdiet dui accumsan sit amet nulla facilisi morbi. Fusce ut placerat orci nulla pellentesque dignissim enim. Libero id faucibus nisl tincidunt eget nullam. Commodo viverra maecenas accumsan lacus vel facilisis.</p>
                        <p><a href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>  --}}


<section class="section">
    <div class="container">
        <div id="post_images" class="carousel">
            <div class="item-1">
                <figure class="image is-16by9 has-ratio">
                    <img src="https://www.technocrazed.com/wp-content/uploads/2015/12/Windows-XP-wallpaper-21-640x360.jpg"/>
                </figure>
            </div>
            <div class="item-2">
                <figure class="image is-16by9 has-ratio">
                    <img src="https://www.technocrazed.com/wp-content/uploads/2015/12/Windows-XP-wallpaper-21-640x360.jpg"/>
                </figure>
            </div>
            <div class="item-3">
                <figure class="image is-16by9 has-ratio">
                    <img src="https://www.technocrazed.com/wp-content/uploads/2015/12/Windows-XP-wallpaper-21-640x360.jpg"/>
                </figure>
            </div>
        </div>
    </div>
</section>

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
