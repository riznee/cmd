
@extends('layouts.admin')
@section('content')
<?php
$ifData = false;
?>
<br/>
<hr/>
       
<x-card
  :title="$title"
  :headers="$headers"
  :item="$data[0]"
  :permissionname="$permisson"
  :action="$action"
>
</x-card>

        <div class="card  border-info mb-3">
          <div class="card-header"> <h6> Permissions </h6> </div>
          <table class="table table-striped table-sm table-hover ">
            <thead>
              <th> Name </th>
              <th> Gaurd </th>
              <th> Add/ Remove </th>
            </thead>
            <tbody>
                  @foreach( $permissionList as $item)
                    <tr>
                      <td>  {{$item['name'] }} </td>
                      <td> {{$item['guard_name'] }} </td>
                      <td class="align-center"> 
                          @foreach( $data[0]['permissions'] as $row)
                            @if($item['id'] == $row['id'])
                            <form  accept-charset="UTF-8" method="post" action="{{route('role.permission.remove',[ $data[0]['id'], $item['id']])}}">
                              @csrf
                              {{ method_field('DELETE') }}
                              <button type="submit" class="btn badge bg-danger">
                                  <i class="fas fa-times" aria-hidden="true"></i>
                              </button>
                            </form>
                             <?php $ifData = true ?>
                            @endif
                          @endforeach 
                          @if(!$ifData)
                          <form  accept-charset="UTF-8" method="post" action="{{route('role.permission.set',[$data[0]['id'], $item['id']])}}">
                            @csrf
                            <button type="submit" class="btn badge bg-success">
                              <i class="fa fa-check" aria-hidden="true"></i>
                            </button>
                          </form>
                    
                          @endif                      
                        </td>
                    </tr>       
                  @endforeach
            </tbody>
          </table>
        </div>

@stop