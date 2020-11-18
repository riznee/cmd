
<div class="table-responsive">
    <table class="table table-striped table-sm table-hover ">
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
							<td>{{$item[$header['value']]}}</td>
						@endforeach
						@if($action)
							<td>
								<div class="row">

									<div class="col">
										@can( $permissionname.'-show')
										<a class=" btn btn-outline-primary" href="{{route($permissionname.'.show',$item['id'])}}">
											<i class="fas fa-eye" aria-hidden="true"></i>
										</a> 
										@endcan
									</div>

									<div class="col">
										@can( $permissionname.'-show')
										<a class=" btn btn-outline-primary" href="{{route($permissionname.'.edit',$item['id'])}}">
											<i class="fas fa-pen" aria-hidden="true"></i>
										</a> 
										@endcan
									</div>
								

									<div class="col">
										@can($permissionname.'-destroy')											
										<form  accept-charset="UTF-8" method="post" action="{{route($permissionname.'.destroy',$item['id'])}}">
											@csrf
											{{ method_field('DELETE') }}{{ method_field('DELETE') }}
											<button type="submit" class="btn btn-outline-danger">
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