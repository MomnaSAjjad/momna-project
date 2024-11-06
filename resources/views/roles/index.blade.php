@extends('layouts.app')

@section('content')
<!-- wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-1">
			<div class="ps-3">
			</div>
		 	<div class="ms-auto pe-2"><a href="{{ route('roles.create') }}" class="btn btn-primary radius-20 mt-2 mt-lg-0 ms-2 px-3 font-12"><i class="bx bx-plus font-12"></i>{{ __('general.add_button') }}</a></div>
		</div>
		<!--end breadcrumb-->
	  	@if(session('success'))
		    <div class="alert alert-success">
		        {{ session('success') }}
		    </div>
		@endif
		<div class="card no-bg all-contracts">
			<div class="card-body ps-0 pe-0">
				<div class="table-responsive bordered">
				<table class="table mb-0 table-striped contracts-list-table">
					<thead class="table-dark">
						<tr>
							<th class="border-bottom-0 w-20" width="80%">{{ __('roles.role_name') }}</th>
							<th class="border-bottom-0 w-10 text-center" width="20%">{{ __('roles.actions') }}</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($roles as $key => $role)
							<tr>
								<td>{{ $role->name }}</td>
								<td class="align-middle text-center">
									<div class="btn-group align-top">
										<form action="{{ route('roles.destroy',$role->id) }}" method="POST" class="d-flex flex-row gap-2">
						                    <a data-toggle="tooltip" title="" data-original-title="{{ __('general.help_show') }}" class="justify-content-center" href="{{ route('roles.show',$role->id) }}"><i class='bx bx-show fs-12rem color-green'></i></a>
											@can('role-edit')
						                    <a data-toggle="tooltip" title="" data-original-title="{{ __('general.help_edit') }}" class="justify-content-center" href="{{ route('roles.edit',$role->id) }}"><i class='bx bx-edit-alt fs-12rem color-blue' ></i></a>
						   					@endcan
						                    @csrf
						                    @method('DELETE')

											@can('role-delete')
						                    <button data-toggle="tooltip" title="" data-original-title="{{ __('general.help_delete') }}" type="submit" class="justify-content-center border-none bg-none"><i class='bx bx-trash fs-12rem color-red' ></i></button>
											@endcan
						                </form>
									</div>
								</td>
							</tr>
							@endforeach
					</tbody>
				</table>
				{!! $roles->render() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
