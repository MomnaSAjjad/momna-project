@extends('layouts.app')
@section('css')
		<!-- INTERNAl Data table css -->
		<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}"  rel="stylesheet">
		<link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
<!--Page header-->
<div class="page-header">
	<div class="page-leftheader">
		<h4 class="page-title mb-0">{{ __('roles.details') }}</h4>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/"><i class="fe fe-grid mr-2 fs-14"></i>{{ __('menu.mainpage') }}</a></li>
			<li class="breadcrumb-item"><a href="{{ route('roles.index') }}">{{ __('roles.list') }}</a></li>
			<li class="breadcrumb-item active" aria-current="page"><a href="">{{ __('roles.details') }}</a></li>
		</ol>
	</div>
	<div class="page-rightheader">
		<div class="btn btn-list">
			<a href="{{ URL::previous() }}" class="btn btn-info"> {{ __('general.back_button') }} </a>
		</div>
	</div>
</div>
<!--End Page header-->
@endsection
@section('content')

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
							<strong>{{ __('roles.cert_rights_options.title') }}</strong><br/>
							@foreach($rolePermissions as $value)
								@if (Str::contains($value->name, "certificate"))
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
			                <!-- {{ $value->name }} -->
			            </div>
			    </div>
		</div>
	</div>
</div>
</div>

</div>
</div><!-- end app-content-->
</div>
@endsection
@section('js')
		<!-- INTERNAl Data tables -->
		<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/datatables.js')}}"></script>
@endsection