<div class="card box">
    <div class="columns is-3" >
        <div class="colum is-1">
            <a href="{{url()->previous()}}" class="card-header-icon" style="text-decoration: none;" aria-label="more options">
                <span class="icon">
                    <i class="fas fa-arrow-left" aria-hidden="true"></i>
                </span>
        </div>
        <div class="colum is-6">
            {{$title}}
        </div>
        <div class="colum is-3">
            @if($action)                      
                       
                        
            <div class="float-right">
                @can( $permissionname.'-reply')
                    <a class=" btn badge bg-primary" href="{{route($permissionname.'.reply',$id)}}"aria-label="" data-toggle="tooltip" title="press to reply!">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    </a> 
                @endcan
            </div>

            <div class="float-right">
                @can($permissionname.'-destroy')											
                    <form  accept-charset="UTF-8" method="post" action="{{route($permissionname.'.destroy',$id)}}"aria-label="" data-toggle="tooltip" title="press to delete!">
                        @csrf
                        {{ method_field('DELETE') }}{{ method_field('DELETE') }}
                        <button type="submit" class="btn badge bg-danger">
                            <i class="fas fa-times" aria-hidden="true"></i> 
                        </button>
                    </form>
                @endcan
            </div>

            <div class="float-right">                                                          
                @can( $permissionname.'-edit')
                    <a class=" btn badge bg-primary" href="{{route($permissionname.'.edit',$id)}}" aria-label="" data-toggle="tooltip" title="press to edit!">
                        <i class="fas fa-pen" aria-hidden="true"></i> 
                    </a> 
                @endcan
            </div>

            <div class="float-right">
                @can( $permissionname.'-create')
                <a href="{{route($permissionname.'.create')}}"  aria-label="" data-toggle="tooltip" title="press to create!">
                    <i class="fas fa-plus" aria-hidden="true"></i>
                </a>
                @endcan
            </div>
        </div>

    </div>
</div>
    
    
    
    
    