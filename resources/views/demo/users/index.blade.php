@extends("layouts.app")
		
		@section("content")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-end mb-1">
					<h6 class="breadcrumb-title pe-3 border-none font-14 ps-2 d-flex justify-content-center align-items-center mb-0">{{ __('users.total_users') }} &nbsp; <span class="circle-number color-white bg-dark-gray">3</span></h6>
					<div class="ps-3">
					</div>
				 	<div class="ms-auto pe-2"><a href="{{ url('/users/create') }}" class="btn btn-primary radius-20 mt-2 mt-lg-0 ms-2 px-3 font-12"><i class="bx bx-plus font-12"></i>{{ __('users.add_button') }}</a></div>
				</div>
				<!--end breadcrumb-->
			  
				<div class="card no-bg">
					<div class="card-body ps-0 pe-0">
						<div class="table-responsive bordered">
							<table class="table mb-0 table-striped contracts-list-table">
								<thead class="table-dark">
									<tr>
										<th width="12%" class="text-left ps-3">{{ __('users.table.name') }}</th>
										<th width="12%" class="text-left ps-2">{{ __('users.table.position') }}</th>
										<th width="12%" class="text-left ps-2">{{ __('users.table.company') }}</th>
										<th width="12%" class="text-left ps-2">{{ __('users.table.region') }}</th>
										<th width="12%" class="text-left">{{ __('users.table.telephone') }}</th>
										<th width="12%" class="text-left">{{ __('users.table.email') }}</th>
										<th width="8%" class="text-left">{{ __('users.table.user_type') }}</th>
										<th width="7%" class="text-left">{{ __('users.table.status') }}</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-left ps-3"><a class="align-items-center" href="{{ url('/users/edit') }}">David Karlsson</a></td>
										<td class="text-left">CFO</td>
										<td class="text-left">Kontroll AB</td>
										<td class="text-left">Stockholm</td>
										<td class="text-left"><div class="gap-2 d-flex">073 774 88 93</div></td>
										<td class="text-left"><a href="mailto:david@info.se" class="gap-2 d-flex">david@info.se</a></td>
										<td class="text-left">Administrator</td>
										<td class="text-left"><div class="d-flex justify-content-start align-items-center gap-1 font-color-4"><span class="price-container income">Active</span></div></td>
									</tr>
									<tr>
										<td class="text-left ps-3"><a class="align-items-center" href="{{ url('/users/edit') }}">Martina Falk</a></td>
										<td class="text-left">CEO</td>
										<td class="text-left">Kontroll AB</td>
										<td class="text-left">Umeå</td>
										<td class="text-left"><div class="gap-2 d-flex">073 774 88 93</div></td>
										<td class="text-left"><a href="mailto:martina@info.se" class="gap-2 d-flex">martina@info.se</a></td>
										<td class="text-left">User</td>
										<td class="text-left"><div class="d-flex justify-content-start align-items-center gap-1 font-color-7"><span class="price-container costs">Inactive</span></div></td>
									</tr>
									<tr>
										<td class="text-left ps-3"><a class="align-items-center" href="{{ url('/users/edit') }}">Daniel Andersson</a></td>
										<td class="text-left">Sales Manager</td>
										<td class="text-left">Kontroll AB</td>
										<td class="text-left">Göteborg</td>
										<td class="text-left"><div class="gap-2 d-flex">073 774 88 93</div></td>
										<td class="text-left"><a href="mailto:daniel@info.se" class="gap-2 d-flex">daniel@info.se</a></td>
										<td class="text-left">Administrator</td>
										<td class="text-left"><div class="d-flex justify-content-start align-items-center gap-1 font-color-4"><span class="price-container income">Active</span></div></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>


			</div>
		</div>
		<!--end page wrapper -->
		@endsection
	