@extends("layouts.app")
		
		@section("content")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-1">
					<div class="breadcrumb-title pe-3 border-none font-18 ps-2">{{ __('company.total_companies') }} ( {{ $companies_total }} )</div>
					<div class="ps-3">
					</div>
				 	<div class="ms-auto pe-2"><a href="{{ url('/companies/create') }}" class="btn btn-primary radius-20 mt-2 mt-lg-0 ms-2 px-3 font-12"><i class="bx bx-plus font-12"></i>{{ __('company.add_button') }}</a></div>
				</div>
				<!--end breadcrumb-->
			  
				<div class="card no-bg">
					<div class="card-body ps-0 pe-0">
						<div class="table-responsive bordered">
							<table class="table mb-0 table-striped contracts-list-table">
								<thead class="table-dark">
									<tr>
										<th width="12%" class="text-left ps-3">{{ __('company.table.name') }}</th>
										<th width="12%" class="text-left ps-2">{{ __('company.table.vat_id') }}</th>
										<th width="12%" class="text-left ps-2">{{ __('company.table.company_nr') }}</th>
										<th width="12%" class="text-left ps-2">{{ __('company.table.date_added') }}</th>
										<th width="5%" class="text-center">{{ __('company.table.status') }}</th>
									</tr>
								</thead>
								<tbody>
									@foreach($companies as $company)
									<tr>
										<td class="text-left ps-3"><a class="font-weight-500 align-items-center" href="/companies/{{ $company->id }}">{{ $company->name }}</a></td>
										<td class="text-left">{{ $company->vat_id }}</td>
										<td class="text-left">{{ $company->company_number }}</td>
										<td class="text-left">{{ $company->created_at }}</td>
										<td class="text-left"><div class="d-flex justify-content-center align-items-center gap-1 font-color-4">
											@if($company->status == 1)
												<span class="price-container income">{{ __('general.active') }}</span></div>
											@else
												<span class="price-container income">{{ __('general.inactive') }}</span></div>
											@endif
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>


			</div>
		</div>
		<!--end page wrapper -->
		@endsection
	