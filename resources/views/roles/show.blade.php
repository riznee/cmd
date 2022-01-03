
@extends('layouts.admin')
@section('content')

<div>

<x-pageHeader
    :title="$title"
		:permissionname="$permisson"
		:action="$action"
    :id="$id"
    >
</x-pageHeader>
       
<x-card
  :headers="$headers"
  :item="$data[0]"
>
</x-card>

        <div class="card  border-info mb-3">
          <div class="card-header"> <h4> Permissions </h4> </div>
          <div class="card-body">
            <div class="row justify-content-center">
            @foreach( $permissionList as $item)
              <div class="card"  style="width: 18rem;">             
                <div class="card-body">
                  <h5 class="card-title"> {{$item['name'] }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$item['guard_name'] }}</h6>
                  @if($data[0]->hasPermissionTo(''.$item->name.''))
                  <form  accept-charset="UTF-8" method="post" action="{{route('role.permission.remove',[ $data[0]['id'], $item['id']])}}">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn badge bg-danger">
                      <i class="fas fa-times" aria-hidden="true"></i> Remove Permission
                    </button>
                  </form>
                  @else
                  <form  accept-charset="UTF-8" method="post" action="{{route('role.permission.set',[$data[0]['id'], $item['id']])}}">
                    @csrf
                    <button type="submit" class="btn badge bg-success">
                      <i class="fa fa-check" aria-hidden="true"></i> Add Permission
                    </button>
                  </form>  
                  
                  @endif
                </div>
              </div>
            @endforeach
            </div>
          </div>
 
        </div>
</div>

@stop