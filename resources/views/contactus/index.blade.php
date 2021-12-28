@extends('layouts.admin')
@section('content')



	<div class ="card  border-info mb-3">		
		<div class="card-header">
			<div class="row">
				<div class="col-sm-3">	 
					<a href="{{url()->previous()}}" class="card-header-icon" style="text-decoration: none;" aria-label="more options">
						<span class="icon">
							<i class="fas fa-arrow-left" aria-hidden="true"></i>
						</span>
					</a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<strong>Recvied Messagers </strong>		
				</div>
			</div>
		</div>
	</div>

	<div class ="row">
		<x-dataTable
		:headers="$headers"
		:items="$contacts"
		:permissionname="$permisson"
		:action="$action"
		:option="$data"
		></x-dataTable>
	</div>
		

	
@stop