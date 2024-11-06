@extends("layouts.app")
@section("style")
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
@endsection
@section("content")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3 border-none font-16 ps-2">{{ __('users.title_edit_customer') }}</div>
					<div class="ps-3">
					</div>
				 	<div class="ms-auto">
				 		<a href="{{ url('/customers') }}" class="btn btn-secondary pe-4 ps-4 me-0">{{ __('general.back_button') }}</a>
				 		<button id="submitForm" class="btn btn-primary radius-20 mt-2 mt-lg-0 ms-2 px-3">{{ __('general.update') }}</button>
				 	</div>
				</div>
				@if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
			        <div>
			            {{ session('error') }}
			        </div>
			    @endif
				<div class="col-lg-12">
					<div class="card card-bordered">
						<div class="card-body">
						<form method="POST" action="{{ route('customers.update', ['id' => $customer->id]) }}" id="CustomerForm" class="customer-form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
							<div class="row justify-between d-flex justify-content-between">
								<div class="col">
		                            <div class="card">
		                                <div class="card-body">
		                                    <ul class="nav nav-pills mb-3" role="tablist">
		                                        <li class="nav-item" role="presentation">
		                                            <a class="nav-link active" data-bs-toggle="pill" href="#customer-general" role="tab" aria-selected="true">
		                                                <div class="d-flex align-items-center">
		                                                    <div class="tab-icon"><i class='bx bx-home font-18 me-1'></i>
		                                                    </div>
		                                                    <div class="tab-title">General</div>
		                                                </div>
		                                            </a>
		                                        </li>
		                                        <li class="nav-item" role="presentation">
		                                            <a class="nav-link" data-bs-toggle="pill" href="#customer-subscription" role="tab" aria-selected="false">
		                                                <div class="d-flex align-items-center">
		                                                    <div class="tab-icon"><i class='bx bx-calendar-star font-18 me-1'></i>
		                                                    </div>
		                                                    <div class="tab-title">Subscription</div>
		                                                </div>
		                                            </a>
		                                        </li>
		                                        <li class="nav-item" role="presentation">
		                                            <a class="nav-link" data-bs-toggle="pill" href="#customer-user" role="tab" aria-selected="false">
		                                                <div class="d-flex align-items-center">
		                                                    <div class="tab-icon"><i class='bx bx-user font-18 me-1' ></i>
		                                                    </div>
		                                                    <div class="tab-title">Users</div>
		                                                </div>
		                                            </a>
		                                        </li>
		                                        <li class="nav-item" role="presentation">
		                                            <a class="nav-link" data-bs-toggle="pill" href="#customer-agreements" role="tab" aria-selected="false">
		                                                <div class="d-flex align-items-center">
		                                                    <div class="tab-icon"><i class='bx bx-file font-18 me-1' ></i> 
		                                                    </div>
		                                                    <div class="tab-title">Agreements</div>
		                                                </div>
		                                            </a>
		                                        </li>
		                                        <li class="nav-item" role="presentation">
		                                            <a class="nav-link" data-bs-toggle="pill" href="#customer-uploaded" role="tab" aria-selected="false">
		                                                <div class="d-flex align-items-center">
		                                                    <div class="tab-icon"><i class='bx bx-folder font-18 me-1' ></i>
		                                                    </div>
		                                                    <div class="tab-title">Uploaded Contracts</div>
		                                                </div>
		                                            </a>
		                                        </li>
		                                    </ul>
		                                    <div class="tab-content" id="pills-tabContent">
		                                        <div class="tab-pane fade show active" id="customer-general" role="tabpanel">
		                                        	<div class="row">
			                                        	<div class="col-lg-12">
															<div class="row g-3 mb-4">
						                                        <div class="col-6 col-lg-6 ps-4">
						                                            <label for="Title" class="form-label"><span class="font-color-7">*</span> {{ __('company.fields.company_name') }}</label>
						                                            <input type="text" required name="name" class="form-control @error('name') is-invalid @enderror" value="@if (isset($customer->ownedCompany)) {{ old('name', $customer->ownedCompany->name) }} @endif" id="Company" placeholder="{{ __('company.fields.company_name') }}">
						                                            @error('name')
						                                            	<div class="invalid-feedback">{{ $message }}</div>
						                                            @enderror
						                                        </div>
						                                        <div class="col-6 col-lg-6 ps-4">
						                                            <label for="OrgNum" class="form-label">{{ __('company.fields.org_num') }}</label>
						                                            <input type="text" class="form-control @error('org_num') is-invalid @enderror" name="org_num" value="{{ old('org_num', $customer->org_num) }}" id="OrgNum" placeholder="{{ __('company.fields.org_num') }}">
						                                            @error('org_num')
						                                            	<div class="invalid-feedback">{{ $message }}</div>
						                                            @enderror
						                                        </div>

						                                        <div class="col-6 col-lg-6 ps-4">
						                                            <label for="Employees" class="form-label">{{ __('company.fields.employees') }}</label>
						                                            <select class="form-select @error('employees') is-invalid @enderror" name="employees" id="Employees" aria-label=".form-select-sm example">
																		<option disabled selected hidden value="">{{ __('general.select') }}</option>
																		@foreach($employees as $employee)
								                                        	<option {{ old('employees',$customer->employee) === $employee ? 'selected' : '' }} value="{{ $employee }}" >{{ $employee }}</option>
																		@endforeach
																	</select>
																	@error('employees')
						                                            	<div class="invalid-feedback">{{ $message }}</div>
						                                            @enderror
						                                        </div>
						                                        <div class="col-6 col-lg-6 ps-4">
						                                            <label for="Revenue" class="form-label">{{ __('company.fields.revenue') }}</label>
						                                            <select class="form-select @error('revenue') is-invalid @enderror" name="revenue" id="Revenue" aria-label=".form-select-sm example">
																		<option disabled selected hidden value="">{{ __('general.select') }}</option>
																		@foreach($revenue as $rev)
								                                        	<option {{ old('revenue', $customer->revenue) === $rev ? 'selected' : '' }} value="{{ $rev }}" >{{ $rev }}</option>
																		@endforeach
																	</select>
																	@error('revenue')
						                                            	<div class="invalid-feedback">{{ $message }}</div>
						                                            @enderror
						                                        </div>

						                                        <div class="col-6 col-lg-6 ps-4">
						                                            <label for="Adress" class="form-label">{{ __('company.fields.address') }}</label>
						                                            <input type="text" required name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address', $customer->address) }}" id="Adress" placeholder="{{ __('company.fields.address') }}">
						                                            @error('address')
						                                            	<div class="invalid-feedback">{{ $message }}</div>
						                                            @enderror
						                                        </div>

						                                        <div class="col-6 col-lg-6 ps-4">
						                                            <label for="Postcode" class="form-label">{{ __('company.fields.postcode') }}</label>
						                                            <input type="text" name="postcode" class="form-control" id="Postcode" value="{{ old('postcode', $customer->postcode) }}" placeholder="Postcode">
						                                        </div>

						                                        <div class="col-6 col-lg-6 ps-4">
						                                            <label for="City" class="form-label">{{ __('company.fields.city') }}</label>
						                                            <input type="text" required name="city" class="form-control @error('city') is-invalid @enderror" value="{{ old('city', $customer->city) }}" id="City" placeholder="{{ __('company.fields.city') }}">
						                                            @error('city')
						                                            	<div class="invalid-feedback">{{ $message }}</div>
						                                            @enderror
						                                        </div>
						                                        <div class="col-6 col-lg-6 ps-4">
						                                            <label for="Title" class="form-label">{{ __('company.fields.region') }}</label>
						                                            <select class="form-select @error('region') is-invalid @enderror" name="region" id="Region" aria-label=".form-select-sm example">
																		<option disabled selected hidden value="">{{ __('general.select') }}</option>
																		@foreach($regions as $region)
								                                        	<option {{ old('region', $customer->region) === $region ? 'selected' : '' }} value="{{ $region }}" >{{ $region }}</option>
																		@endforeach
																	</select>
																	@error('region')
						                                            	<div class="invalid-feedback">{{ $message }}</div>
						                                            @enderror
						                                        </div>

						                                        <div class="col-6 col-lg-6 ps-4">
						                                            <label for="Country" class="form-label">{{ __('company.fields.country') }}</label>
						                                            <select class="form-select @error('country') is-invalid @enderror" name="country" id="Country" aria-label=".form-select-sm example">
																		<option disabled selected hidden value="">{{ __('general.select') }}</option>
								                                        <option {{ old('country', $customer->country) === 'Sweden' ? 'selected' : '' }} value="Sweden">{{ __('general.sweden') }}</option>
																	</select>
																	@error('country')
						                                            	<div class="invalid-feedback">{{ $message }}</div>
						                                            @enderror
						                                        </div>
						                                        <div class="col-6 col-lg-6 ps-4">
						                                            <label for="Status" class="form-label">{{ __('general.status') }}</label>
						                                            <select class="form-select" name="status" id="Status" >
								                                        <option value="1" {{ old('status', $customer->status) == 1 ? 'selected' : '' }}>{{ __('general.active') }}</option>
														                <option value="0" {{ old('status', $customer->status) == 0 ? 'selected' : '' }}>{{ __('general.inactive') }}</option>
																	</select>
						                                        </div>
						                                    </div>
														</div>
													</div>
		                                        </div>
												@if (isset($subscription->package))
		                                        <div class="tab-pane fade" id="customer-subscription" role="tabpanel">
		                                        	<div class="row">
														<div class="col-lg-12">
				                                        	<div class="row g-3 mb-4">
																<div class="col-6 col-lg-6 ps-4">
						                                            <label for="Package" class="form-label">{{ __('users.fields.package') }}</label>
						                                            <select class="form-select @error('packages') is-invalid @enderror" name="package" id="Package" aria-label=".form-select-sm example">
																		<option disabled selected hidden value="">{{ __('general.select') }}</option>
																		@foreach($packages as $key => $value)
								                                        	<option {{ old('packages', $subscription->package) === $value ? 'selected' : '' }} value="{{ $value }}" >{{ $value }}</option>
																		@endforeach
																	</select>
																	@error('packages')
						                                            	<div class="invalid-feedback">{{ $message }}</div>
						                                            @enderror
						                                        </div>
																<div class="col-6 col-lg-6 ps-4">
						                                            <label for="Price" class="form-label"><span class="font-color-7">*</span> {{ __('users.fields.price') }}</label>
						                                            <input name="price" type="text" required class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $subscription->price) }}" id="Price" placeholder="{{ __('users.fields.price') }}" >
						                                        </div>

						                                        <div class="col-6 col-lg-6 ps-4">
						                                            <label for="StartDate" class="form-label"><span class="font-color-7">*</span> {{ __('users.fields.start_date') }}</label>

						                                            <div class="position-relative input-icon">
						                                            	<input name="start_date" type="text" required class="form-control @error('start_date') is-invalid @enderror datepicker ps-4" value="{{ old('start_date', $subscription->start_date) }}" id="StartDate" placeholder="{{ __('users.fields.start_date') }}" >
																		<span class="position-absolute top-50 translate-middle-y ps-2"><i class="bx bx-calendar"></i></span>
																	</div>

						                                        </div>
						                                        <div class="col-6 col-lg-6 ps-4">
						                                            <label for="EndDate" class="form-label"><span class="font-color-7">*</span> {{ __('users.fields.end_date') }}</label>
						                                            <div class="position-relative input-icon">
						                                            	<input name="end_date" type="text" required class="form-control @error('end_date') is-invalid @enderror datepicker ps-4" value="{{ old('end_date', $subscription->end_date) }}" id="EndDate" placeholder="{{ __('users.fields.end_date') }}" >
																		<span class="position-absolute top-50 translate-middle-y ps-2"><i class="bx bx-calendar"></i></span>
																	</div>
						                                        </div>
						                                        <div class="col-6 col-lg-6 ps-4">
						                                            <label for="Notes" class="form-label">{{ __('users.fields.notes') }}</label>
						                                            <textarea name="notes" type="text" rows="3" required class="form-control @error('notes') is-invalid @enderror" id="Notes" placeholder="{{ __('users.fields.notes') }}" >{{ old('notes', $subscription->notes) }}</textarea>
						                                        </div>
						                                        <div class="col-6 col-lg-6 ps-4">
						                                            <label for="SubscriptionStatus" class="form-label">{{ __('general.status') }}</label>
						                                            <select class="form-select" name="subsctiption_status" id="SubscriptionStatus" >
								                                        <option value="1" {{ old('status', $subscription->status) == 1 ? 'selected' : '' }}>{{ __('general.active') }}</option>
														                <option value="0" {{ old('status', $subscription->status) == 0 ? 'selected' : '' }}>{{ __('general.inactive') }}</option>
																	</select>
						                                        </div>
															</div>
														</div>
													</div>
		                                        </div>
												@endif
		                                        <div class="tab-pane fade" id="customer-user" role="tabpanel">
		                                        	<div class="row">
														<div class="col-lg-12">
															<div class="row g-3 mb-4">
						                                        <div class="card no-bg">
																	<div class="card-body ps-0 pe-0">
																		<div class="table-responsive bordered">
																			<table class="table mb-0 table-striped contracts-list-table">
																				<thead class="table-dark">
																					<tr>
																						<th width="12%" class="text-left ps-3">{{ __('users.table.name') }}</th>
																						<th width="12%" class="text-left ps-2">{{ __('users.table.position') }}</th>
																						<th width="12%" class="text-left ps-2">{{ __('users.table.region') }}</th>
																						<th width="12%" class="text-left ps-2">{{ __('users.table.user_type') }}</th>
																						<th width="5%" class="text-center">{{ __('users.table.status') }}</th>
																					</tr>
																				</thead>
																				@if (!empty($usersInCompany))
																				<tbody>
						                                                            @forelse($usersInCompany as $user)
						                                                                <tr>
						                                                                    @if ($user->user_type == 1)
						                                                                        <td><a href="/customer/{{ $user->id }}"><i class='bx bxs-star pe-2 font-color-10' ></i> {{ $user->name }}</a></td>
						                                                                    @else
						                                                                        <td><a href="/users/{{ $user->id }}">{{ $user->name }}</a></td>
						                                                                    @endif
						                                                                    <td>{{ $user->position }}</td>
						                                                                    <td>{{ $user->region }}</td>
						                                                                    <td>
						                                                                        @if ($user->user_type == 1)
						                                                                            {{ __('users.type.owner') }}
						                                                                        @elseif ($user->status == 2)
						                                                                            {{ __('users.type.admin') }}
						                                                                        @elseif ($user->status == 3)
						                                                                            {{ __('users.type.manager') }}
						                                                                        @elseif ($user->status == 0)
						                                                                            {{ __('users.type.superuser') }}
						                                                                        @endif
						                                                                    </td>
						                                                                    <td>@if ($user->status == 1)
						                                                                            {{ __('users.status.active') }}
						                                                                        @elseif ($user->status == 0)
						                                                                            {{ __('users.status.inactive') }}
						                                                                        @endif
						                                                                    </td>
						                                                                </tr>
							                                                            @empty
							                                                                <tr>
							                                                                    <td colspan="5" class="text-center">{{ __('company.company_users_not_found') }}. <a class="d-flex justify-content-center" id=""><i class='bx bx-plus'></i> {{ __('users.add_button') }}</a></td>
							                                                                </tr>
							                                                            @endforelse
					                                                            </tbody>
					                                                            @endif
																			</table>
																		</div>
																	</div>
																</div>
						                                    </div>
															<!-- <div class="row g-3 mb-4">
						                                        <div class="col-6 col-lg-6 ps-4">
						                                            <label for="Name" class="form-label"><span class="font-color-7">*</span> {{ __('users.fields.name') }}</label>
						                                            <input name="user_name" type="text" required class="form-control @error('user_name') is-invalid @enderror" value="{{ old('user_name', $customer->name) }}" id="Name" placeholder="{{ __('users.fields.name') }}" >
						                                        </div>
						                                        <div class="col-6 col-lg-6 ps-4">
						                                            <label for="Title" class="form-label">{{ __('users.fields.position') }}</label>
						                                            <input name="position" type="text" class="form-control" id="Title" value="{{ old('position', $customer->position) }}" placeholder="{{ __('users.fields.title') }}" >
						                                        </div>
						                                        <div class="col-6 col-lg-6 ps-4">
						                                            <label for="Mobile" class="form-label">{{ __('users.fields.mobile') }}</label>
						                                            <input name="mobile" type="text" class="form-control" id="Mobile" value="{{ old('mobile', $customer->telephone) }}" placeholder="{{ __('users.fields.number') }}" >
						                                        </div>
						                                        <div class="col-6 col-lg-6 ps-4">
						                                            <label for="WorkPhone" class="form-label">{{ __('users.fields.work') }}</label>
						                                            <input name="work" type="text" class="form-control" id="WorkPhone" value="{{ old('work', $customer->work_phone) }}" placeholder="{{ __('users.fields.number') }}" >
						                                        </div>
						                                        <div class="col-6 col-lg-6 ps-4">
						                                            <label for="Email" class="form-label"><span class="font-color-7">*</span> {{ __('users.fields.email') }}</label>
						                                            <input name="email" type="text" required class="form-control @error('email') is-invalid @enderror" value="{{ old('email',$customer->email) }}" id="Email" placeholder="{{ __('users.fields.email') }}" >
						                                        </div>
						                                    </div> -->
														</div>
													</div>
		                                        </div>
		                                        <div class="tab-pane fade" id="customer-agreements" role="tabpanel">

		                                        </div>
		                                        <div class="tab-pane fade" id="customer-uploaded" role="tabpanel">

		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>

								
							</div>
						</form>
						</div>
					</div>
				</div>
		</div>

<!-- <div class="modal fade" id="AddCategoryFirst" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xs">
        <div class="modal-content rounded-4">
            <div class="d-flex justify-content-end">
                <button type="button" class="btn-close mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card p-4 w-100 pe-0 ps-0">
                	<div class='d-flex flex-row w-100 gap-4 justify-content-center'>
                		<div class="d-flex flex-column w-50 px-3">
                			<a class='font-2 popover-notice-header font-13 color-white bold show-categories-list-popup'>SELECTED ONLY</a>
                			You can only see selected categories
                		</div>
                		<div class="d-flex flex-column w-50 px-3">
	                		<b class='font-2 popover-notice-header font-13'>YES</b>You can see all categories
	                	</div>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div> -->
</div>
	<div class="modal fade" id="AddCategoryFirst" tabindex="-1" aria-hidden="true">
	    <div class="modal-dialog modal-dialog-centered modal-xs">
	        <div class="modal-content rounded-4">
	            <div class="d-flex justify-content-end">
	                <button type="button" class="btn-close mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
	            </div>
	            <div class="modal-body pt-0">
	                <div class="card p-4 w-100 pe-4 ps-4 pt-0 pb-0 mb-0">
	                    <h5 class="text-upper d-flex justify-content-center mb-3">Chose categories</h5>
	                    <ul class="justify-content-center gap-3 mt-3 d-grid grid-columns-2 ps-0">
	                    	<li class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="Development" checked="">
								<label class="form-check-label border-type-1 border px-2 py-1 rounded font-type-1" for="Development">Employment</label>
							</li>
							<li class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="Finance" checked="">
								<label class="form-check-label border-type-2 border px-2 py-1 rounded font-type-2" for="Finance">Staff</label>
							</li>
							<li class="form-check">
								<input class="form-check-input" type="checkbox" Marketing="" id="Marketing" checked="">
								<label class="form-check-label border-type-3 border px-2 py-1 rounded font-type-3" for="Marketing">Subscriptions</label>
							</li>
							<li class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="ServiceAgreement" checked="">
								<label class="form-check-label border-type-4 border px-2 py-1 rounded font-type-4" for="ServiceAgreement">Service Agreement</label>
							</li>
							<li class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="CompanyCar" checked="">
								<label class="form-check-label border-type-5 border px-2 py-1 rounded font-type-5" for="CompanyCar">Company Car</label>
							</li>
							<li class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="Office" checked="">
								<label class="form-check-label border-type-6 border px-2 py-1 rounded font-type-6" for="Office">Office</label>
							</li>
							<li class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="Suppliers" checked="">
								<label class="form-check-label border-type-7 border px-2 py-1 rounded font-type-7" for="Suppliers">Suppliers</label>
							</li>
							<li class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="IT" checked="">
								<label class="form-check-label border-type-8 border px-2 py-1 rounded font-type-8" for="IT">IT</label>
							</li>
							<li class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="Loans" checked="">
								<label class="form-check-label border-type-9 border px-2 py-1 rounded font-type-9" for="Loans">Loans</label>
							</li>
							<li class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="Leasing" checked="">
								<label class="form-check-label border-type-10 border px-2 py-1 rounded font-type-10" for="Leasing">Leasing</label>
							</li>
							<li class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="CustomerAgreement" checked="">
								<label class="form-check-label border-type-11 border px-2 py-1 rounded font-type-11" for="CustomerAgreement">Customer Agreement</label>
							</li>
							<li class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="Insurance" checked="">
								<label class="form-check-label border-type-12 border px-2 py-1 rounded font-type-12" for="Insurance">Insurance</label>
							</li>
							<li class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="Certificate" checked="">
								<label class="form-check-label border-type-13 border px-2 py-1 rounded font-type-13" for="Certificate">Certificate</label>
							</li>
							<li class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="Licenses" checked="">
								<label class="form-check-label border-type-14 border px-2 py-1 rounded font-type-14" for="Licenses">Licenses</label>
							</li>

	                    </ul>
	                    <div class="d-flex justify-content-end mt-2">
							<a href="#" class="btn btn-primary radius-20 mt-2 mt-lg-0 ms-0 px-4">Save</a>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
<!--end page wrapper -->
@endsection
@section("script")
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script>
document.getElementById('submitForm').addEventListener('click', function() {
    document.getElementById('CustomerForm').submit();
});
$(document).ready(function() {

    $('#company').select2({
        ajax: {
            url: '{{ route('companies.search') }}',
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                    q: params.term // search term
                };
            },
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            id: item.id,
                            text: item.name
                        };
                    })
                };
            },
            cache: true
        },
        minimumInputLength: 1,
        placeholder: 'Company',
        allowClear: true
    });


	$('.user-permissions__values--incl .permissions').css('pointer-events','none');
	$(function () {
		$('[data-bs-toggle="popover"]').popover();
		$('[data-bs-toggle="tooltip"]').tooltip();
	});
	$('[data-bs-toggle="popover"]').click(function(){
	    $('[data-bs-toggle="popover"]').not(this).popover('hide'); //all but this
	});
	$('#UserType1').click(function() {
	   if($('#UserType1').is(':checked')) { 
	   		$('.user-permissions__values--incl .permissions').css('pointer-events','none');
	   }else{
	   	    $('.user-permissions__values--incl .permissions').css('pointer-events','all');
	   }
	});
	$('#UserType2').click(function() {
	   if($('#UserType2').is(':checked')) { 
	   		$('.user-permissions__values--incl .permissions').css('pointer-events','all');
	   }else{
	   	    $('.user-permissions__values--incl .permissions').css('pointer-events','none');
	   }
	});
	$('.show-categories-list-popup').click(function() {
		$('#AddCategoryFirst').modal("hide");
		$('#AddCategorySecond').modal("show");
	});
});
</script>
@endsection
