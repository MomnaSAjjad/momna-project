@extends("layouts.app")
		
		@section("content")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-1">
					<div class="breadcrumb-title pe-3 border-none font-16 ps-2">{{ __('users.total_customers') }} &nbsp; ( {{ $customers_total }} )</div>
					<div class="ps-3">
					</div>
				 	<div class="ms-auto pe-2"><a href="{{ url('/customers/create') }}" class="btn btn-primary radius-20 mt-2 mt-lg-0 ms-2 px-3 font-12"><i class="bx bx-plus font-12"></i>{{ __('users.add_customer_button') }}</a></div>
				</div>
				<!--end breadcrumb-->
			  	@if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
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
										<th width="10%" class="text-left">{{ __('users.table.user_type') }}</th>
										<th width="5%" class="text-left">{{ __('users.table.status') }}</th>
									</tr>
								</thead>
								<tbody>
									@forelse($customers as $customer)
                                        <tr>
                                            <td><a href="/customer/{{ $customer->id }}">{{ $customer->name }}</a></td>
                                            <td>{{ $customer->position }}</td>
                                            <td>{{ $customer->company }}</td>
                                            <td>{{ $customer->region }}</td>
                                            <td>{{ $customer->telephone }}</td>
                                            <td>{{ $customer->email }}</td>
                                            <td>
                                                @if ($customer->user_type == 1)
                                                    {{ __('users.type.admin') }}
                                                @elseif ($customer->status == 2)
                                                    {{ __('users.type.manager') }}
                                                @elseif ($customer->status == 0)
                                                    {{ __('users.type.superuser') }}
                                                @endif
                                            </td>
                                            <td>@if ($customer->status == 1)
                                                    {{ __('users.status.active') }}
                                                @elseif ($customer->status == 0)
                                                    {{ __('users.status.inactive') }}
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">{{ __('users.customers_not_found') }}</td>
                                        </tr>
                                    @endforelse
								</tbody>
							</table>
						</div>
					</div>
				</div>


			</div>
		</div>
		<!--end page wrapper -->
		@endsection
	