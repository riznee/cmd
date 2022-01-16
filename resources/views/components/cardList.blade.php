@if (!empty($items))
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">
                Component
            </p>
            <button class="card-header-icon" aria-label="more options">
                <span class="icon">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
            </button>
        </header>
        <div class="card-content">
            <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
                <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
                <br>
                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
            </div>
        </div>
        <footer class="card-footer">
            @if ($action)
                <div class="columns">
                    
                    @if ($permissionname == 'contactus')
                        <div class="column">
                            @can($permissionname . '-reply')
                                <a class="tag is-warning is-inverted"
                                    href="{{ route($permissionname . '.reply', $item['id']) }}" data-toggle="tooltip"
                                    title="press to reply!">
                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                </a>
                            @endcan
                        </div>
                    @endif


                    @if ($permissionname == 'pages')
                        @if ($item['visible'] == 1)
                            <div class="column">

                                @can($permissionname . '-disable')
                                    <a class="tag  is-warning  is-inverted"
                                        href="{{ route($permissionname . '.disable', $item['id']) }}"
                                        data-toggle="tooltip" title="press to disable!">
                                        <i class="fa fa-toggle-off" aria-hidden="true"></i>
                                    </a>

                                @endcan

                            </div>
                        @else
                            <div class="column">
                                @can($permissionname . '-enable')
                                    <a class="tag  is-success is-inverted"
                                        href="{{ route($permissionname . '.enable', $item['id']) }}" data-toggle="tooltip"
                                        title="press to enable!">
                                        <i class="fa fa-toggle-on" aria-hidden="true"></i>
                                    </a>
                                @endcan
                            </div>
                        @endif
                    @endif

                    @if ($permissionname == 'articles')
                        @if ($item['published_at'] == 1)

                            <div class="column">
                                @can($permissionname . '-unpublish')
                                    <a class="tag  is-success is-inverted"
                                        href="{{ route($permissionname . '.unpublish', $item['id']) }}"
                                        data-toggle="tooltip" title="press to view!">
                                        <i class="fa fa-toggle-on" aria-hidden="true"></i>
                                    </a>
                                @endcan
                            </div>

                        @else

                            <div class="column">
                                @can($permissionname . '-publish')
                                    <a class="tag  is-warning  is-inverted"
                                        href="{{ route($permissionname . '.publish', $item['id']) }}"
                                        data-toggle="tooltip" title="press to edit!">
                                        <i class="fa fa-toggle-off" aria-hidden="true"></i>
                                    </a>
                                @endcan
                            </div>

                        @endif
                    @endif

                    <div class="column">
                        @can($permissionname . '-show')
                            <a class="tag  is-link  is-inverted"
                                href="{{ route($permissionname . '.show', $item['id']) }}" data-toggle="tooltip"
                                title="press to view!">
                                <i class="fas fa-eye" aria-hidden="true"></i>
                            </a>
                        @endcan
                    </div>

                    <div class="column">
                        @can($permissionname . '-edit')
                            <a class=" tag  is-success  is-inverted"
                                href="{{ route($permissionname . '.edit', $item['id']) }}" data-toggle="tooltip"
                                title="press to edit!">
                                <i class="fas fa-pen" aria-hidden="true"></i>
                            </a>
                        @endcan
                    </div>

                    <div class="column">
                        @can($permissionname . '-destroy')
                            <form accept-charset="UTF-8" method="post"
                                action="{{ route($permissionname . '.destroy', $item['id']) }}" data-toggle="tooltip"
                                title="press to delete!">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button class="tag  is-danger  is-inverted" style="border: none">
                                    <i class="fas fa-times" aria-hidden="true"></i>
                                </button>
                            </form>
                        @endcan
                    </div>

                </div>
            @endif
        </footer>
    </div>
@endif
