@extends("layouts.app")
@section("style")
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datetimepicker/css/classic.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datetimepicker/css/classic.time.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datetimepicker/css/classic.date.css')}}" rel="stylesheet" />
@endsection
@section("content")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3 border-none font-16 ps-2">{{ __('users.title_customer') }}</div>
					<div class="ps-3">
					</div>
				 	<div class="ms-auto">
				 		<a href="{{ url('/customers') }}" class="btn btn-secondary pe-4 ps-4 me-0">{{ __('general.back_button') }}</a>
				 		<button id="submitForm" class="btn btn-primary radius-20 mt-2 mt-lg-0 ms-2 px-3">{{ __('users.add_customer_button') }}</button>
				 	</div>
				</div>
				@if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
				<div class="col-lg-12">
					<div class="card card-bordered">
						<div class="card-body p-5">
                        <form action="{{ route('customers.store') }}" id="CustomerForm" method="POST">
							@csrf
							<div class="row justify-between d-flex justify-content-between">
								
								<div class="col-lg-6">
										<h5 class="d-flex align-items-center mb-4 filled-title bg-gray font-color-dark">{{ __('company.company_info_title') }}</h5>
										<div class="row g-3 mb-4">
	                                        <div class="col-6 col-lg-6 ps-4">
	                                            <label for="Title" class="form-label"><span class="font-color-7">*</span> {{ __('company.fields.company_name') }}</label>
	                                            <input type="text" required name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="Company" placeholder="Company">
	                                            @error('name')
	                                            	<div class="invalid-feedback">{{ $message }}</div>
	                                            @enderror
	                                        </div>
	                                        <div class="col-6 col-lg-6 ps-4">
	                                            <label for="OrgNum" class="form-label">{{ __('company.fields.org_num') }}</label>
	                                            <input type="text" class="form-control @error('org_num') is-invalid @enderror" name="org_num" value="{{ old('org_num') }}" id="OrgNum" placeholder="{{ __('company.fields.org_num') }}">
	                                            @error('org_num')
	                                            	<div class="invalid-feedback">{{ $message }}</div>
	                                            @enderror
	                                        </div>
	                                        <div class="col-6 col-lg-6 ps-4">
	                                            <label for="Employees" class="form-label">{{ __('company.fields.employees') }}</label>
	                                            <select class="form-select @error('employees') is-invalid @enderror" name="employees" id="Employees" aria-label=".form-select-sm example">
													<option disabled selected hidden value="">{{ __('general.select') }}</option>
													@foreach($employees as $employee)
			                                        	<option {{ old('employees') === $employee ? 'selected' : '' }} value="{{ $employee }}" >{{ $employee }}</option>
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
			                                        	<option {{ old('revenue') === $rev ? 'selected' : '' }} value="{{ $rev }}" >{{ $rev }}</option>
													@endforeach
												</select>
												@error('revenue')
	                                            	<div class="invalid-feedback">{{ $message }}</div>
	                                            @enderror
	                                        </div>
	                                        <div class="col-6 col-lg-6 ps-4">
	                                            <label for="Adress" class="form-label">{{ __('company.fields.address') }}</label>
	                                            <input type="text" required name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" id="Adress" placeholder="{{ __('company.fields.address') }}">
	                                            @error('address')
	                                            	<div class="invalid-feedback">{{ $message }}</div>
	                                            @enderror
	                                        </div>

	                                        <div class="col-6 col-lg-6 ps-4">
	                                            <label for="Postcode" class="form-label">{{ __('company.fields.postcode') }}</label>
	                                            <input type="text" name="postcode" class="form-control" id="Postcode" value="{{ old('postcode') }}" placeholder="Postcode">
	                                        </div>
	                                        <div class="col-6 col-lg-6 ps-4">
	                                            <label for="City" class="form-label">{{ __('company.fields.city') }}</label>
	                                            <input type="text" required name="city" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}" id="City" placeholder="{{ __('company.fields.city') }}">
	                                            @error('city')
	                                            	<div class="invalid-feedback">{{ $message }}</div>
	                                            @enderror
	                                        </div>
	                                        <div class="col-6 col-lg-6 ps-4">
	                                            <label for="Title" class="form-label">{{ __('company.fields.region') }}</label>
	                                            <select class="form-select @error('region') is-invalid @enderror" name="region" id="Region" aria-label=".form-select-sm example">
													<option disabled selected hidden value="">{{ __('general.select') }}</option>
													@foreach($regions as $region)
			                                        	<option {{ old('region') === $region ? 'selected' : '' }} value="{{ $region }}" >{{ $region }}</option>
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
			                                        <option {{ old('country') === 'Sweden' ? 'selected' : '' }} value="Sweden">{{ __('general.sweden') }}</option>
												</select>
												@error('country')
	                                            	<div class="invalid-feedback">{{ $message }}</div>
	                                            @enderror
	                                        </div>
	                                        
	                                        
	                                        
	                                       <!--  <div class="col-6 col-lg-6 ps-4">
	                                            <label for="Owner" class="form-label"><span class="font-color-7">*</span> {{ __('company.fields.owner') }}</label>
	                                            <input type="text" name="owner_id" class="form-control" id="Owner" placeholder="Choose Owner">
	                                        </div> -->
	                                        <div class="col-6 col-lg-6 ps-4">
	                                            <label for="Status" class="form-label">{{ __('general.status') }}</label>
	                                            <select class="form-select" name="status" id="Status" >
			                                        <option value="0" {{ old('status') === '0' ? 'selected' : '' }}>{{ __('general.inactive') }}</option>
			                                        <option value="1" selected {{ old('status') === '1' ? 'selected' : '' }}>{{ __('general.active') }}</option>
												</select>
	                                        </div>
	                                    </div>
									</div>
									<div class="col-lg-6">
										<h5 class="d-flex align-items-center mb-4 filled-title bg-gray font-color-dark">{{ __('users.customer_info_title') }}</h5>
										<div class="row g-3 mb-4">
	                                        <!-- <div class="col-6 col-lg-6 ps-4">
	                                            <label for="Title" class="form-label">{{ __('users.fields.company_name') }}</label>
	                                            <select id="company" name="company_id" class="form-control" style="width: 300px;">
									                <option value="">Company</option>
									                @foreach($companies as $company)
									                    <option value="{{ $company->id }}" {{ old('company_id') == $company->id ? 'selected' : '' }}>
									                        {{ $company->name }}
									                    </option>
									                @endforeach
									            </select>
	                                        </div> -->
	                                        <div class="col-6 col-lg-6 ps-4">
	                                            <label for="Name" class="form-label"><span class="font-color-7">*</span> {{ __('users.fields.name') }}</label>
	                                            <input name="user_name" type="text" required class="form-control @error('user_name') is-invalid @enderror" value="{{ old('user_name') }}" id="Name" placeholder="{{ __('users.fields.name') }}" >
	                                        </div>
	                                        <div class="col-6 col-lg-6 ps-4">
	                                            <label for="Title" class="form-label">{{ __('users.fields.position') }}</label>
	                                            <input name="position" type="text" class="form-control" id="Title" value="{{ old('position') }}" placeholder="{{ __('users.fields.title') }}" >
	                                        </div>
	                                        <div class="col-6 col-lg-6 ps-4">
	                                            <label for="Mobile" class="form-label">{{ __('users.fields.mobile') }}</label>
	                                            <input name="mobile" type="text" class="form-control" id="Mobile" value="{{ old('mobile') }}" placeholder="{{ __('users.fields.number') }}" >
	                                        </div>
	                                        <div class="col-6 col-lg-6 ps-4">
	                                            <label for="WorkPhone" class="form-label">{{ __('users.fields.work') }}</label>
	                                            <input name="work" type="text" class="form-control" id="WorkPhone" value="{{ old('work') }}" placeholder="{{ __('users.fields.number') }}" >
	                                        </div>
	                                        <div class="col-6 col-lg-6 ps-4">
	                                            <label for="Email" class="form-label"><span class="font-color-7">*</span> {{ __('users.fields.email') }}</label>
	                                            <input name="email" type="text" required class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="Email" placeholder="{{ __('users.fields.email') }}" >
	                                        </div>
	                                    </div>
	                                    <h5 class="d-flex align-items-center mb-4 filled-title bg-gray font-color-dark">{{ __('users.customer_subscription_title') }}</h5>
										<div class="row g-3 mb-4">
											<div class="col-6 col-lg-6 ps-4">
	                                            <label for="Package" class="form-label">{{ __('users.fields.package') }}</label>
	                                            <select class="form-select @error('packages') is-invalid @enderror" name="package" id="Package" aria-label=".form-select-sm example">
													<option disabled selected hidden value="">{{ __('general.select') }}</option>
													@foreach($packages as $package)
			                                        	<option {{ old('packages') === $package ? 'selected' : '' }} value="{{ $package }}" >{{ $package }}</option>
													@endforeach
												</select>
												@error('packages')
	                                            	<div class="invalid-feedback">{{ $message }}</div>
	                                            @enderror
	                                        </div>
											<div class="col-6 col-lg-6 ps-4">
	                                            <label for="Price" class="form-label"><span class="font-color-7">*</span> {{ __('users.fields.price') }}</label>
	                                            <input name="price" type="text" required class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}" id="Price" placeholder="{{ __('users.fields.price') }}" >
	                                        </div>

	                                        <div class="col-6 col-lg-6 ps-4">
	                                            <label for="StartDate" class="form-label"><span class="font-color-7">*</span> {{ __('users.fields.start_date') }}</label>
	                                            <div class="position-relative input-icon">
	                                            	<input name="start_date" type="text" required class="form-control @error('start_date') is-invalid @enderror datepicker ps-4" value="{{ old('start_date') }}" id="StartDate" placeholder="{{ __('users.fields.start_date') }}" >
													<span class="position-absolute top-50 translate-middle-y ps-2"><i class="bx bx-calendar"></i></span>
												</div>
	                                        </div>
	                                        <div class="col-6 col-lg-6 ps-4">
	                                            <label for="EndDate" class="form-label"><span class="font-color-7">*</span> {{ __('users.fields.end_date') }}</label>
	                                            <div class="position-relative input-icon">
	                                            	<input name="end_date" type="text" required class="form-control @error('end_date') is-invalid @enderror datepicker ps-4" value="{{ old('end_date') }}" id="EndDate" placeholder="{{ __('users.fields.end_date') }}" >
													<span class="position-absolute top-50 translate-middle-y ps-2"><i class="bx bx-calendar"></i></span>
												</div>
	                                        </div>
	                                        <div class="col-12 col-lg-12 ps-4">
	                                            <label for="Notes" class="form-label">{{ __('users.fields.notes') }}</label>
	                                            <textarea name="notes" type="text" rows="3" required class="form-control @error('notes') is-invalid @enderror" id="Notes" placeholder="{{ __('users.fields.notes') }}" >{{ old('notes') }}</textarea>
	                                        </div>

	                                        
										</div>
									</div>
							</div>
						</form>
						</div>
					</div>
				</div>
		</div>
</div>
<!--end page wrapper -->
@endsection
@section("script")
<script src="{{URL::asset('assets/plugins/datetimepicker/js/legacy.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datetimepicker/js/picker.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datetimepicker/js/picker.time.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datetimepicker/js/picker.date.js')}}"></script>
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


    $('.permissions-select-toggle').on('click', function() {
        $(this).next('.permissions-select').toggleClass('show');
    });

    $('.select-button').on('click', function() {
        var index = $(this).data('index');
        var value = $(this).data('value');
        $('#selected_option_' + index).val(value);
        $('.permissions-select-wrapper').eq(index).find('.permissions-select-toggle').text($(this).text());
        $('.permissions-select').removeClass('show');
    });

    $(document).on('click', function(event) {
        if (!$(event.target).closest('.permissions-select-wrapper').length) {
            $('.permissions-select').removeClass('show');
        }
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

	$('.datepicker').pickadate({
		format: 'yyyy-mm-dd', // Display format
        formatSubmit: 'yyyy-mm-dd', // Submit format
        selectMonths: true,
        selectYears: true
    })
});
</script>
@endsection
