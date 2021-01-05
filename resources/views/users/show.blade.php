@extends('layouts.admin')
@section('content')  
<br/> 
<x-card
  :title="$title"
  :headers="$headers"
  :item="$user"
  :permissionname="$permisson"
  :action="$action"
>
</x-card>
<div class="card  border-info mb-3">
  <div class="card-header"> <h4> Roles </h4> </div>
    <div class="card-body">
      <div class="row justify-content-center">
        @foreach( $roles as $item)
          <div class="card"  style="width: 11rem;">             
            <div class="card-body">
              <h5 class="card-title"> {{$item['name'] }}</h5>
              @if($user->hasRole(''.$item->name.''))
                  <form  accept-charset="UTF-8" method="post" action="{{route('user.role.remove',[ $user->id, $item['id']])}}">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn badge bg-danger">
                      <i class="fas fa-times" aria-hidden="true"></i> Remove Permission
                    </button>
                  </form>
              @else
                  <form  accept-charset="UTF-8" method="post" action="{{route('user.role.set',[ $user->id, $item['id']])}}">
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