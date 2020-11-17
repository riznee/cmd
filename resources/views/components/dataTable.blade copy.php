
<div class="table-responsive">
    <table class="table table-striped table-sm table-hover ">
        <thead>
            <tr>
            @foreach($headers as $header)
              <th>{{$header['title']}}</th>
            @endforeach
            </tr>
        </thead>
        <tbody>
			@if(!empty($data))
				@foreach($data as $row)	
					<tr>

						@foreach($headers as $header)
							<td>{{$row[$header['value']]}}</td>
						@endforeach

						@if($action)
							<td>
								<div class="row">

									@if($action_view)
									<div class="col">
										@can( $permission_name.'-show')
										<a class=" btn btn-outline-primary" href="{{route('$permission_name.show',$row['id'])}}">
											<i class="fas fa-pen" aria-hidden="true"></i>
										</a> 
										@endcan
									</div>
									@endif

									@if($action_delete)
										<div class="col">
											@can($permission_name.'-destroy')											
											<form  accept-charset="UTF-8" method="post" action="{{route('$permission_name.destroy',$row['id'])}}">
												@csrf
												{{ method_field('DELETE') }}{{ method_field('DELETE') }}
												<button type="submit" class="btn btn-outline-danger">
													<i class="fas fa-times" aria-hidden="true"></i>
												</button>
											</form>
											@endcan
										</div>
									@endif

								</div>
							</td>
						@endif	

					</tr>
				@endforeach		
			@else
				<tr> No Data</tr>
			@endif								
        </tbody>
	</table>
</div>  --}}