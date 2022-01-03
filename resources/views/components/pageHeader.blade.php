<div class ="card  border-info mb-3">		
    <div class="card-header">
        <div class="row">
            <div class="col-sm-3">	 
                <a href="{{url()->previous()}}" class="card-header-icon" style="text-decoration: none;" aria-label="more options">
                    <span class="icon">
                        <i class="fas fa-arrow-left" aria-hidden="true"></i>
                    </span>
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <strong>{{$title}}</strong>		
            </div>
            <div class="col-sm-9">
                <div class="float-right">
                    @if($action)
                        @can( $permissionname.'-create')
                            <a href="{{route($permissionname.'.create')}}"  aria-label="" data-toggle="tooltip" title="press to create!">
                                <i class="fas fa-plus" aria-hidden="true"></i>
                            </a>
                        @endcan

                        @can( $permissionname.'-reply')
                            <a class=" btn badge bg-primary" href="{{route($permissionname.'.reply',$id)}}"aria-label="" data-toggle="tooltip" title="press to reply!">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            </a> 
                        @endcan
                                                                              
                        @can( $permissionname.'-edit')
                            <a class=" btn badge bg-primary" href="{{route($permissionname.'.edit',$id)}}" aria-label="" data-toggle="tooltip" title="press to edit!">
                                <i class="fas fa-pen" aria-hidden="true"></i> 
                            </a> 
                        @endcan
                        @can($permissionname.'-destroy')											
                            <form  accept-charset="UTF-8" method="post" action="{{route($permissionname.'.destroy',$id)}}"aria-label="" data-toggle="tooltip" title="press to delete!">
                                @csrf
                                {{ method_field('DELETE') }}{{ method_field('DELETE') }}
                                <button type="submit" class="btn badge bg-danger">
                                    <i class="fas fa-times" aria-hidden="true"></i> 
                                </button>
                            </form>
                        @endcan
                    @endif                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>