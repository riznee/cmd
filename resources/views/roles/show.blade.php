
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
              <th> ID </th>
              <th> Name </th>
              <th> Gaurd </th>
              <th> Add / Remove </th>
            </thead>
            <tbody>
                  @foreach( $permissionList as $item)
                    <tr>
                      <td> {{$item['id']}} </td>
                      <td>  {{$item['name'] }} </td>
                      <td> {{$item['guard_name'] }} </td>
                      <td> 
                          @foreach( $data[0]['permissions'] as $row)
                            @if($item['id'] == $row['id'])
                              Assigned
                             <?php $ifData = true ?>
                            @endif
                          @endforeach 
                          @if(!$ifData)
                            Not Assigned
                          @endif                      
                        </td>
                    </tr>       
                  @endforeach
            </tbody>
          </table>
        </div>

@stop