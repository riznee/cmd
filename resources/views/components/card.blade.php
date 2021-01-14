<div class="card  border-info mb-3">
    <div class="card-header">

        <div class="row">
			<div class="col-sm-9">	 
                @if(Route::currentRouteName() != $permissionname.'.index')
                    <a href="{{route($permissionname.'.index')}}" style="text-decoration: none;" class="card-header-icon" aria-label="more options">
                        <span class="icon">
                            <i class="fas fa-arrow-left" aria-hidden="true"></i>
                        </span>
                    </a>
                @endif
				&nbsp;&nbsp;&nbsp;&nbsp;
				<strong>{{$title}}</strong>		
			</div>
                @if($action)
                    @can('roles-create')
                    <div class="col-sm-1">
                        <div class="float-right">
                          
                            @can( $permissionname.'-show')
                                <a class=" btn badge bg-primary" href="{{route($permissionname.'.edit',$item['id'])}}">
                                    <i class="fas fa-pen" aria-hidden="true"></i> 
                                </a> 
                            @endcan
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="float-right">                          
                            @can($permissionname.'-destroy')											
                                <form  accept-charset="UTF-8" method="post" action="{{route($permissionname.'.destroy',$item['id'])}}">
                                    @csrf
                                    {{ method_field('DELETE') }}{{ method_field('DELETE') }}
                                    <button type="submit" class="btn badge bg-danger">
                                        <i class="fas fa-times" aria-hidden="true"></i> 
                                    </button>
                                </form>
                            @endcan
                        
                        </div>
                    </div>
                    @endcan
                @endif
		</div>
        
    </div>
        <div class="card-body text-dark">
        <ul class="list-group list-group-flush">
        @foreach($headers as $header)
            <li class="list-group-item">
                <strong> 
                    {{$header['title']}}:
                </strong>
                {{$item[$header['value']]}} 
            </li>            
        @endforeach     
        </ul>
    </div>
</div>