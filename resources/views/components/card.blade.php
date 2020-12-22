<div class="card  border-info mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">{{$title}}</div>
            
                <div class="col-12 col-sm-1">
                    @if($action)
                        @can( $permissionname.'-show')
                        <a class=" btn btn-primary" href="{{route($permissionname.'.edit',$item['id'])}}">
                            <i class="fas fa-pen" aria-hidden="true"></i> Edit
                        </a> 
                        @endcan
                </div>
                <div class="col-12 col-sm-1">  
                        @can($permissionname.'-destroy')											
                        <form  accept-charset="UTF-8" method="post" action="{{route($permissionname.'.destroy',$item['id'])}}">
                            @csrf
                            {{ method_field('DELETE') }}{{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-times" aria-hidden="true"></i> Delete
                            </button>
                        </form>
                        @endcan
                    @endif
                </div>
           
            
        </div>
    </div>
        <div class="card-body text-dark">
        <ul class="list-group list-group-flush">
        @foreach($headers as $header)
            <li class="list-group-item">
                <strong> 
                    {{$header['title']}}:
                </strong>
                {{$item[$header['value']]}} </li>            
        @endforeach     
        </ul>
    </div>
</div>