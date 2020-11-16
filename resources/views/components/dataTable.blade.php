
<div class="table-responsive">
    	<table class="table table-striped table-sm table-hover ">
          <thead>
            <tr>
            @foreach($headers as $header)
              <th>{{$header}}</th>
            @endforeach
            </tr>
          </thead>
          <tbody>
			@if(!empty($data))
				@foreach($data as $row)			
					<tr>

						<td>{{$row->id}}</td>
						<td>{{$row->slug}}</td>
						<td>{{($row->parent->title ?? ' ')}}</td>
						<td>{{$row->depth}}</td>
						<td>{{$row->title}}</td>
						<td>
							@if($row->visible == true)
							<i class="fas fa-eye" aria-hidden="true"></i>
							@can('pages-disable')
							Change 
								<a class="btn btn-outline-primary" href="{{route('pages.disable',$row['id'])}}">
									<i class="far fa-eye-slash" aria-hidden="true"></i>
									
								</a>
								@endcan 
							@else
							<i class="far fa-eye-slash" aria-hidden="true"></i>
							@can('pages-enable')
								Change		
									<a class="btn btn-outline-primary" href="{{route('pages.enable',$row['id'])}}">
										<i class="fas fa-eye" aria-hidden="true"></i>
									</a>
								@endcan
							@endif  
						</td>						
						
						<td>{{$row->created_at}}</td>
						<td>{{$row->updated_at}}</td>
						<td>
							<div class="row">
								<div class="col">

									@can('pages-edit')
									<a class=" btn btn-outline-primary" href="{{route('pages.show',$row['id'])}}">
										<i class="fas fa-pen" aria-hidden="true"></i>
									</a> 
									@endcan
								</div>

								<div class="col">
									@can('pages-destroy')
									<form  accept-charset="UTF-8" method="post" action="{{route('pages.destroy',$row['id'])}}">
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
					</tr>
					@endforeach
				@else
					<tr> No Data</tr>
				@endif								
          </tbody>
		</table>