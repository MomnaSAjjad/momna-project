@extends('layouts.app')
@section('content')
<div class="page-wrapper">
	<div class="page-content">
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3 border-none font-18 ps-2">{{ __('roles.role_create') }}</div>
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

					@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
					{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<strong>{{ __('roles.role_name') }}:</strong>
								{!! Form::text('name', null, array('placeholder' => __('roles.role_name'),'class' => 'form-control')) !!}
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">


							<div class="form-group">
								<br/>
								<h5>{{ __('roles.list_rights') }}:</h5>
								<strong>{{ __('roles.contract_rights_options.title') }}</strong><br/>
								@foreach($permission as $value)
									@if (Str::contains($value->name, "contract"))
										<label>{{ Form::checkbox('permission[]', $value->name, false, array('class' => 'name mr-2')) }} {{ $roleNames[$value->name] }}</label><br/>
									@endif
								@endforeach
								<br/>
								<strong>{{ __('roles.user_rights_options.title') }}</strong><br/>
								@foreach($permission as $value)
									@if (Str::contains($value->name, "user"))
										<label>{{ Form::checkbox('permission[]', $value->name, false, array('class' => 'name mr-2')) }} {{ $roleNames[$value->name] }}</label><br/>
									@endif
								@endforeach
								<br/>
								<strong>{{ __('roles.role_rights_options.title') }}</strong><br/>
								@foreach($permission as $value)
									@if (Str::contains($value->name, "role"))
										<label>{{ Form::checkbox('permission[]', $value->name, false, array('class' => 'name mr-2')) }} {{ $roleNames[$value->name] }}</label><br/>
									@endif
								@endforeach
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 text-center">
							<button type="submit" class="btn btn-primary">{{ __('general.save_button') }}</button>
						</div>
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
		</div>
	</div>
</div>
@endsection










