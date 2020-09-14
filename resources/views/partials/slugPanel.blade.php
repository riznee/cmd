<aside class="menu">
    <p class="menu-label">
        <a  href="{{route('page',$page->slug)}}"> {{$page->title}} </a>  
    </p>
<ul class="menu-list is-info">
    @if(empty($page->childrean))
        @foreach ($page->children as $child)
        <li>
            <a class="panel-block" href="{{route('page',$child->slug)}}">
                {{--  <i class="fas fa-align-justify" aria-hidden="true"></i>  --}}
                &nbsp; {{$child->title}}
            </a>
        </li>
        @endforeach
    @endif
</ul>

   

</aside>