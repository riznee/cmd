@extends('layouts.site')
@section('content')
    <br/>
    <div class="card  border-info mb-3">
		<div class="card-header">
			<div class="row">
				<div class="col-sm-9"> 
					<a href="{{url()->previous()}}" style="text-decoration: none;" class="card-header-icon" aria-label="more options">
						<span class="icon">
							<i class="fas fa-arrow-left" aria-hidden="true"></i>
						</span>
					</a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<strong> About Privacy </strong>		
				</div>
			</div>        
		</div>
        <div class="card-body text-secondary">
			<div class="col">
				<div class="row">
						<h4>Privacy Statement for {{ config('app.name', 'SSCM') }}</h4>
				</div>
				<div class="row ">
					This Privacy Policy describes how your personal information is collected, used, and shared when you visit or make a purchase from {{ config('app.name', 'SSCM') }} site.
				</div>
			</div>
			

		</div>
    </div>
</div>
@stop