<div class="section" style="top: 50px;">
    @foreach ($items as $item)
        <div class="card" >
            <div class="card-content">
                <div class="content">
                    <div class="columns">
                        <div class="column">
                            <p class="is-size-7">From : {{ $item->name }}</p>
                            <p class="is-size-7">email : {{ $item->email }}</p>
                        </div>
                        <div class="column">
                            <p class="is-size-7">Recived from : {{ $item->created_at }}</p>
                            <p class="is-size-7">Last update : {{ $item->updated_at }}</p>
                        </div>
                        <div class="column">
                            @if ($item->read == 0)
                                <p class=" tag is-warning is-size-7">Status : unread</p>
                            @else
                                <p class=" tag is-primary is-size-7">Status : Read</p>
                            @endif
                            @if ($action)
                                @if ($item['read'] == 0)
                                    @can($permissionname . '-reply')
                                        <a class="tag is-warning is-inverted"
                                            href="{{ route($permissionname . '.reply', $item['id']) }}"
                                            data-toggle="tooltip" title="press to reply!">
                                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                        </a>
                                    @endcan
                                @endif
                                @can($permissionname . '-show')
                                    <a class="tag  is-link  is-inverted"
                                        href="{{ route($permissionname . '.show', $item['id']) }}" data-toggle="tooltip"
                                        title="press to view!">
                                        <i class="fas fa-eye" aria-hidden="true"></i>
                                    </a>
                                @endcan
                            @endif

                        </div>

                    </div>
                    <p> {{ $item->subject }}</p>
                </div>
            </div>
            
        </div>
        <hr>
        
    @endforeach
</div>
