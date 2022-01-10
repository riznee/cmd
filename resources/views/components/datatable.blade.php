
<div class="table-responsive" style=" margin: 10px">
    <table class="table table is-bordered table is-striped">
        <thead>
            <tr>
            @foreach($headers as $header)
              <th>{{$header['title']}}</th>
			@endforeach
			@if($action)
				<th>Action</th>
			@endif
            </tr>
        </thead>
        <tbody>		
			@if(!empty($items))
				@foreach($items as $item)	
					<tr>
						@foreach($headers as $header)
							<td>
								@if(!empty($header['type']))
									@if(!empty($option))
									
										@if($header['type'] =='boolen')
											@if($item[$header['value']] == 1)
												{{$option['true']}}
											@else
												{{$option['false']}}
											@endif
										@endif
										
										@if($header['type'] =='userRole')
											{{$item->roles()->pluck('name')->implode(' ') }}
										@endif
									@else
										No Option is define
									@endif

									@if($header['type'] =='variable')

									@endif

								@else
								{{$item[$header['value']]}}
								@endif
							</td>						
						@endforeach
						@if($action)
							<td>
								<div class="columns">
									@if($permissionname == 'contactus')
										@if($item['read'] == 0 )
											<div class="column">											
												@can( $permissionname.'-reply')
												<a class=" btn badge bg-primary" href="{{route($permissionname.'.reply',$item['id'])}}" data-toggle="tooltip" title="press to reply!">
													<i class="fa fa-paper-plane" aria-hidden="true"></i>
												</a> 													
												@endcan											
											</div>											
										@endif
									@endif


									@if($permissionname == 'pages')
										@if($item['visible'] ==1)
											<div class="column">
											
												@can( $permissionname.'-disable')
												<a class=" btn badge bg-danger" href="{{route($permissionname.'.disable',$item['id'])}}" data-toggle="tooltip" title="press to disable!">
													<i class="fa fa-toggle-off" aria-hidden="true"></i>
												</a> 
													
												@endcan
											
											</div>
										@else
											<div class="column">
												@can( $permissionname.'-enable')
												<a class=" btn badge bg-success" href="{{route($permissionname.'.enable',$item['id'])}}"data-toggle="tooltip" title="press to enable!">
													<i class="fa fa-toggle-on" aria-hidden="true"></i>
												</a> 
												@endcan
											</div>
										@endif
									@endif

									@if($permissionname == 'articles')
										@if($item['visible'] ==1)
											<div class="column">
												@can( $permissionname.'-enable')
												<a class=" btn badge bg-primary" href="{{route($permissionname.'.enable',$item['id'])}}"data-toggle="tooltip" title="press to view!">
													<i class="fa fa-toggle-on" aria-hidden="true"></i>
												</a> 
												@endcan
											</div>
										@else

										<div class="column">
											@can( $permissionname.'-disable')
											<a class=" btn badge bg-primary" href="{{route($permissionname.'.disable',$item['id'])}}"data-toggle="tooltip" title="press to edit!">
												<i class="fa fa-toggle-off" aria-hidden="true"></i>
											</a> 
											@endcan
										</div>
										@endif
									@endif

									<div class="column">
										@can( $permissionname.'-show')
										<a class=" btn badge bg-primary" href="{{route($permissionname.'.show',$item['id'])}}"data-toggle="tooltip" title="press to view!">
											<i class="fas fa-eye" aria-hidden="true"></i>
										</a> 
										@endcan
									</div>

									<div class="column">
										@can( $permissionname.'-edit')
										<a class=" btn badge bg-primary" href="{{route($permissionname.'.edit',$item['id'])}}"data-toggle="tooltip" title="press to edit!">
											<i class="fas fa-pen" aria-hidden="true"></i>
										</a> 
										@endcan
									</div>
								

									<div class="column">
										@can($permissionname.'-destroy')											
										<form  accept-charset="UTF-8" method="post" action="{{route($permissionname.'.destroy',$item['id'])}}"data-toggle="tooltip" title="press to delete!">
											@csrf
											{{ method_field('DELETE') }}{{ method_field('DELETE') }}
											<button type="submit" class="btn badge bg-danger">
													<i class="fas fa-times" aria-hidden="true"></i>
											</button>
										</form>
										@endcan
									</div>
								

								</div>
							</td>
						@endif
					</tr>
				@endforeach		
			@else
				<tr> <td></td>No Data</tr>
			@endif								
        </tbody>
	</table>
	@if($items->hasPages())
		<x-paginator :items="$items"></x-paginator>
	@endif
</div>