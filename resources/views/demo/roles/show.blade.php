@extends('layouts.app')
@section('content')
<div class="page-wrapper">
	<div class="page-content">
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3 border-none font-18 ps-2">{{ __('roles.details') }}</div>
			<div class="ps-3">
			</div>
		 	<div class="ms-auto">
		 		<a href="{{ URL::previous() }}" class="btn btn-secondary pe-4 ps-4 me-0">{{ __('general.back_button') }}</a>
		 	</div>
		</div>
		<div class="row">
			<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 offset-xl-2">
				<div class="card">
					<div class="card-body">

						<div class="row">
						<div class="mb-3 col-xs-12 col-sm-12 col-md-12">
							<h5>{{ __('roles.list_rights') }}:</h5>
						</div>

					        	<div class="form-group">
									<br/>
									<strong>{{ __('roles.contract_rights_options.title') }}</strong><br/>
									@foreach($rolePermissions as $value)
										@if (Str::contains($value->name, "contract"))
											<label>{{ $roleNames[$value->name] }}</label><br/>
										@endif
									@endforeach
									<br/>
									<strong>{{ __('roles.user_rights_options.title') }}</strong><br/>
									@foreach($rolePermissions as $value)
										@if (Str::contains($value->name, "user"))
											<label>{{ $roleNames[$value->name] }}</label><br/>
										@endif
									@endforeach
									<br/>
									<strong>{{ __('roles.role_rights_options.title') }}</strong><br/>
									@foreach($rolePermissions as $value)
										@if (Str::contains($value->name, "role"))
											<label>{{ $roleNames[$value->name] }}</label><br/>
										@endif
									@endforeach
								</div>


					            <div class="form-group">
					            </div>
						    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
