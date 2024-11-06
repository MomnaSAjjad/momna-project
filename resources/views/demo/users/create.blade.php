@extends("layouts.app")
@section("content")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-end mb-3">
					<div class="breadcrumb-title pe-3 border-none font-15 ps-2">{{ __('users.title') }}</div>
					<div class="ps-3">
					</div>
				 	<div class="ms-auto">
				 		<a href="{{ url('/users') }}" class="btn btn-secondary pe-4 ps-4 me-0">{{ __('general.back_button') }}</a>
				 		<a href="#" class="btn btn-primary radius-20 mt-2 mt-lg-0 ms-2 px-3">{{ __('users.invite_user') }}</a>
				 	</div>
				</div>
				<div class="col-lg-12">
					<div class="card card-bordered">
						<div class="card-body p-5">
							<div class="row justify-between d-flex justify-content-between">
								<div class="col-lg-5">
									<h5 class="d-flex align-items-center mb-4 filled-title font-14">{{ __('users.user_info_title') }}</h5>
									<div class="row g-3 mb-4">
                                        <div class="col-6 col-lg-6 ps-4">
                                            <label for="Title" class="form-label">{{ __('users.fields.company_name') }}</label>
                                            <input type="text" required="" class="form-control" id="Company" placeholder="Company">
                                        </div>
                                        <div class="col-6 col-lg-6 ps-4">
                                            <label for="Title" class="form-label">{{ __('users.fields.region') }}</label>
                                            <select class="form-select" id="Region" aria-label=".form-select-sm example">
												<option disabled selected hidden value="">{{ __('general.select') }}</option>
												@foreach($regions as $region)
		                                        	<option value="{{ $region }}">{{ $region }}</option>
												@endforeach
											</select>
                                        </div>
                                        <div class="col-6 col-lg-6 ps-4">
                                            <label for="Name" class="form-label"><span class="font-color-7">*</span> {{ __('users.fields.name') }}</label>
                                            <input type="text" required="" class="form-control" id="Name" placeholder="{{ __('users.fields.name') }}" >
                                        </div>
                                        <div class="col-6 col-lg-6 ps-4">
                                            <label for="Title" class="form-label">{{ __('users.fields.position') }}</label>
                                            <input type="text" required="" class="form-control" id="Title" placeholder="{{ __('users.fields.title') }}" >
                                        </div>
                                        <div class="col-6 col-lg-6 ps-4">
                                            <label for="Phone" class="form-label">{{ __('users.fields.telephone') }}</label>
                                            <input type="text" class="form-control" id="Phone" placeholder="{{ __('users.fields.number') }}" >
                                        </div>
                                        <div class="col-6 col-lg-6 ps-4">
                                            <label for="Email" class="form-label"><span class="font-color-7">*</span> {{ __('users.fields.email') }}</label>
                                            <input type="text" class="form-control" id="Email" placeholder="{{ __('users.fields.email') }}" >
                                        </div>
                                    </div>
								</div>

								<div class="col-lg-7">
									<h5 class="d-flex align-items-center mb-4 filled-title font-14">{{ __('users.fields.user_type') }}</h5>
									<div class="user-permissions-wrapper d-flex flex-column gap-2">
										<div class="user-permissions__header mb-2 user-permissions__values pb-3 pt-3">
											<h4 class="mb-0 d-flex justify-content-start align-items-center font-12 ps-3"><strong>{{ __('users.permissions_title') }}</strong></h4>
											<div class="form-check form-check-inline d-flex align-items-center justify-content-center me-0 gap-2">
		                                        <input class="form-check-input mb-1" type="radio" name="UserType" id="UserType1" value="manager">
		                                        <label class="form-check-label d-flex justify-content-center align-items-center ms-1 lh-1" for="UserType1"><h4 class="font-14 mb-0">{{ __('users.permissions_title_admin') }}</h4>
												</label>
		                                    </div>
		                                    <div class="form-check form-check-inline d-flex align-items-center justify-content-center me-0 ms-0 ps-0 gap-2">
		                                        <input class="form-check-input mb-1" type="radio" name="UserType" id="UserType2" value="controller">
		                                        <label class="form-check-label d-flex justify-content-center align-items-center ms-1 lh-1" for="UserType2"><h4 class="font-14 mb-0">{{ __('users.permissions_title_manager') }}</h4>
												</label>
		                                    </div>
										</div>
										<div class="user-permissions__values mb-2">
											<h4 class="row ps-3 user-permissions__values--heading"><strong class="ps-0 font-12">{{ __('users.permission_section.users_title') }}</strong></h4>
											<div class="row">
												<div class="user-permissions__values--name">
													{{ __('users.permission_section.users_add') }}
												</div>
												<div class="user-permissions__values--incl">
													<i class='bx bx-check font-color-3' ></i>
												</div>
												<div class="user-permissions__values--incl font-color-9 fs-08 pe-0 ms-0 ps-0 selectPermissions justify-content-center pe-3">
													<div class="permissions-select-wrapper permissions">
										                <div class="permissions-select-toggle">{{ __('users.permissions_select_role')}}</div>
										                <div class="permissions-select">
										                    <div class="permissions-select-option" data-value="yes">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="0" data-value="yes">{{ __('users.permissions_select_yes')}}</button></div>
										                        <div>{{ __('users.permission_section.users_tootip_yes')}}</div>
										                    </div>
										                    <div class="permissions-select-option" data-value="no">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="0" data-value="no">{{ __('users.permissions_select_no')}}</button></div>
										                        <div>{{ __('users.permission_section.users_tootip_no')}}</div>
										                    </div>
										                </div>
										            </div>
										            <input type="hidden" name="selected_options[]" id="selected_option_0" value="">
												</div>
											</div>
											<div class="row">
												<div class="user-permissions__values--name">
													{{ __('users.permission_section.users_delete') }}
												</div>
												<div class="user-permissions__values--incl">
													<i class='bx bx-check font-color-3' ></i>
												</div>

												<div class="user-permissions__values--incl font-color-9 fs-08 pe-0 ms-0 ps-0 selectPermissions justify-content-center pe-3">
													<div class="permissions-select-wrapper permissions">
										                <div class="permissions-select-toggle">{{ __('users.permissions_select_role')}}</div>
										                <div class="permissions-select">
										                    <div class="permissions-select-option" data-value="yes">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="1" data-value="yes">{{ __('users.permissions_select_yes')}}</button></div>
										                        <div>{{ __('users.permission_section.users_tootip_delete_yes')}}</div>
										                    </div>
										                    <div class="permissions-select-option" data-value="no">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="1" data-value="no">{{ __('users.permissions_select_no')}}</button></div>
										                        <div>{{ __('users.permission_section.users_tootip_delete_no')}}</div>
										                    </div>
										                </div>
										            </div>
										            <input type="hidden" name="selected_options[]" id="selected_option_1" value="">
												</div>
											</div>
										</div>
										<div class="user-permissions__values mb-2">
											<h4 class="row ps-3 user-permissions__values--heading"><strong class="ps-0 font-12">{{ __('users.permission_section.contracts_title') }}</strong></h4>
											<div class="row">
												<div class="user-permissions__values--name">
													{{ __('users.permission_section.contracts_see_all') }}
												</div>
												<div class="user-permissions__values--incl">
													<i class='bx bx-check font-color-3' ></i>
												</div>
												<div class="user-permissions__values--incl font-color-9 fs-08 pe-0 ms-0 ps-0 selectPermissions justify-content-center pe-3">
													<div class="permissions-select-wrapper permissions">
										                <div class="permissions-select-toggle">{{ __('users.permissions_select_role')}}</div>
										                <div class="permissions-select">
										                   <!--  <div class="permissions-select-option" data-value="your_own">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="2" data-value="your_own">{{ __('users.permissions_select_own')}}</button></div>
										                        <div>{{ __('users.permission_section.contracts_tooltip_see_own')}}</div>
										                    </div> -->
										                    <div class="permissions-select-option" data-value="yes">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="2" data-value="yes">{{ __('users.permissions_select_yes')}}</button></div>
										                        <div>{{ __('users.permission_section.contracts_tooltip_see_yes')}}</div>
										                    </div>
										                    <div class="permissions-select-option" data-value="no">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="2" data-value="no">{{ __('users.permissions_select')}}</button></div>
										                        <div>{{ __('users.permission_section.contracts_tooltip_see_select')}}</div>
										                    </div>
										                </div>
										            </div>
										            <input type="hidden" name="selected_options[]" id="selected_option_2" value="">
												</div>
											</div>
											<div class="row">
												<div class="user-permissions__values--name">
													{{ __('users.permission_section.contracts_register') }}
												</div>
												<div class="user-permissions__values--incl">
													<i class='bx bx-check font-color-3' ></i>
												</div>
												<div class="user-permissions__values--incl font-color-9 fs-08 pe-0 ms-0 ps-0 selectPermissions justify-content-center pe-3">
													<div class="permissions-select-wrapper permissions">
										                <div class="permissions-select-toggle">{{ __('users.permissions_select_role')}}</div>
										                <div class="permissions-select">
										                    <!-- <div class="permissions-select-option" data-value="your_own">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="3" data-value="your_own">{{ __('users.permissions_select_own')}}</button></div>
										                        <div>{{ __('users.permission_section.contracts_tooltip_register_own')}}</div>
										                    </div> -->
										                    <div class="permissions-select-option" data-value="yes">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="3" data-value="yes">{{ __('users.permissions_select_yes')}}</button></div>
										                        <div>{{ __('users.permission_section.contracts_tooltip_register_yes')}}</div>
										                    </div>
										                    <div class="permissions-select-option" data-value="no">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="3" data-value="no">{{ __('users.permissions_select_no')}}</button></div>
										                        <div>{{ __('users.permission_section.contracts_tooltip_register_no')}}</div>
										                    </div>
										                </div>
										            </div>
										            <input type="hidden" name="selected_options[]" id="selected_option_3" value="">
												</div>
											</div>
											<div class="row">
												<div class="user-permissions__values--name">
													{{ __('users.permission_section.contracts_edit') }}
												</div>
												<div class="user-permissions__values--incl">
													<i class='bx bx-check font-color-3' ></i>
												</div>
												<div class="user-permissions__values--incl font-color-9 fs-08 pe-0 ms-0 ps-0 selectPermissions justify-content-center pe-3">
													<div class="permissions-select-wrapper permissions">
										                <div class="permissions-select-toggle">{{ __('users.permissions_select_role')}}</div>
										                <div class="permissions-select">
										                 <!--    <div class="permissions-select-option" data-value="your_own">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="4" data-value="your_own">{{ __('users.permissions_select_own')}}</button></div>
										                        <div>{{ __('users.permission_section.contracts_tooltip_edit_own')}}</div>
										                    </div> -->
										                    <div class="permissions-select-option" data-value="yes">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="4" data-value="yes">{{ __('users.permissions_select_yes')}}</button></div>
										                        <div>{{ __('users.permission_section.contracts_tooltip_edit_yes')}}</div>
										                    </div>
										                    <div class="permissions-select-option" data-value="no">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="4" data-value="no">{{ __('users.permissions_select')}}</button></div>
										                        <div>{{ __('users.permission_section.contracts_tooltip_edit_select')}}</div>
										                    </div>
										                </div>
										            </div>
										            <input type="hidden" name="selected_options[]" id="selected_option_4" value="">
												</div>
											</div>
											<div class="row">
												<div class="user-permissions__values--name">
													{{ __('users.permission_section.contracts_delete') }}
												</div>
												<div class="user-permissions__values--incl">
													<i class='bx bx-check font-color-3' ></i>
												</div>
												<div class="user-permissions__values--incl font-color-9 fs-08 pe-0 ms-0 ps-0 selectPermissions justify-content-center pe-3">
													<div class="permissions-select-wrapper permissions">
										                <div class="permissions-select-toggle">{{ __('users.permissions_select_role')}}</div>
										                <div class="permissions-select">
										                    <!-- <div class="permissions-select-option" data-value="your_own">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="5" data-value="your_own">{{ __('users.permissions_select_own')}}</button></div>
										                        <div>{{ __('users.permission_section.contracts_tooltip_delete_own')}}</div>
										                    <div>-->										                <div class="permissions-select-option" data-value="yes">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="5" data-value="yes">{{ __('users.permissions_select_yes')}}</button></div>
										                        <div>{{ __('users.permission_section.contracts_tooltip_delete_yes')}}</div>
										                    </div>
										                    <div class="permissions-select-option" data-value="no">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="5" data-value="no">{{ __('users.permissions_select_no')}}</button></div>
										                        <div>{{ __('users.permission_section.contracts_tooltip_delete_no')}}</div>
										                    </div>
										                </div>
										            </div>
										            <input type="hidden" name="selected_options[]" id="selected_option_5" value="">
												</div>
											</div>
										</div>
										<!-- <div class="user-permissions__values mb-2">
											<h4 class="row ps-3 user-permissions__values--heading"><strong class="ps-0 font-12">{{ __('users.permission_section.reminders_title') }}</strong></h4>
											<div class="row">
												<div class="user-permissions__values--name">
													{{ __('users.permission_section.reminders_receive') }}
												</div>
												<div class="user-permissions__values--incl">
													<i class='bx bx-check font-color-3' ></i>
												</div>
												<div class="user-permissions__values--incl font-color-9 fs-08 pe-0 ms-0 ps-0 selectPermissions justify-content-center pe-3">
													<div class="permissions-select-wrapper permissions">
										                <div class="permissions-select-toggle">{{ __('users.permissions_select_role')}}</div>
										                <div class="permissions-select">
										                    <div class="permissions-select-option" data-value="your_own">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="6" data-value="your_own">{{ __('users.permissions_select_own')}}</button></div>
										                        <div>{{ __('users.permission_section.reminders_tootip_own')}}</div>
										                    </div>
										                    <div class="permissions-select-option" data-value="yes">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="6" data-value="yes">{{ __('users.permissions_select_yes')}}</button></div>
										                        <div>{{ __('users.permission_section.reminders_tootip_yes')}}</div>
										                    </div>
										                    <div class="permissions-select-option" data-value="no">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="6" data-value="no">{{ __('users.permissions_select_no')}}</button></div>
										                        <div>{{ __('users.permission_section.reminders_tootip_no')}}</div>
										                    </div>
										                </div>
										            </div>
										            <input type="hidden" name="selected_options[]" id="selected_option_6" value="">
												</div>
											</div>
										</div> -->
										<div class="user-permissions__values mb-2">
											<h4 class="row ps-3 user-permissions__values--heading"><strong class="ps-0 font-12">{{ __('users.permission_section.archive_title') }}</strong></h4>
											<div class="row">
												<div class="user-permissions__values--name">
													{{ __('users.permission_section.archive_see_all') }}
												</div>
												<div class="user-permissions__values--incl">
													<i class='bx bx-check font-color-3' ></i>
												</div>
												<div class="user-permissions__values--incl font-color-9 fs-08 pe-0 ms-0 ps-0 selectPermissions justify-content-center pe-3">
													<div class="permissions-select-wrapper permissions">
										                <div class="permissions-select-toggle">{{ __('users.permissions_select_role')}}</div>
										                <div class="permissions-select">
										                    <!-- <div class="permissions-select-option" data-value="your_own">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="6" data-value="your_own">{{ __('users.permissions_select_own')}}</button></div>
										                        <div>{{ __('users.permission_section.archive_tootip_own')}}</div>
										                    </div> -->
										                    <div class="permissions-select-option" data-value="yes">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="6" data-value="yes">{{ __('users.permissions_select_yes')}}</button></div>
										                        <div>{{ __('users.permission_section.archive_tootip_yes')}}</div>
										                    </div>
										                    <div class="permissions-select-option" data-value="no">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="6" data-value="no">{{ __('users.permissions_select')}}</button></div>
										                        <div>{{ __('users.permission_section.archive_tootip_select')}}</div>
										                    </div>
										                </div>
										            </div>
										            <input type="hidden" name="selected_options[]" id="selected_option_6" value="">
												</div>
											</div>
										</div>

										<div class="user-permissions__values mb-2">
											<h4 class="row ps-3 user-permissions__values--heading"><strong class="ps-0 font-12">{{ __('users.permission_section.costs_title') }}</strong></h4>
											<div class="row">
												<div class="user-permissions__values--name">
													{{ __('users.permission_section.costs_see_all') }}
												</div>
												<div class="user-permissions__values--incl">
													<i class='bx bx-check font-color-3' ></i>
												</div>
												<div class="user-permissions__values--incl font-color-9 fs-08 pe-0 ms-0 ps-0 selectPermissions justify-content-center pe-3">
													<div class="permissions-select-wrapper permissions">
										                <div class="permissions-select-toggle">{{ __('users.permissions_select_role')}}</div>
										                <div class="permissions-select">
										                  <!--   <div class="permissions-select-option" data-value="your_own">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="7" data-value="your_own">{{ __('users.permissions_select_own')}}</button></div>
										                        <div>{{ __('users.permission_section.costs_tootip_own')}}</div>
										                    </div> -->
										                    <div class="permissions-select-option" data-value="yes">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="7" data-value="yes">{{ __('users.permissions_select_yes')}}</button></div>
										                        <div>{{ __('users.permission_section.costs_tootip_yes')}}</div>
										                    </div>
										                    <div class="permissions-select-option" data-value="no">
										                        <div class="d-flex justify-content-center"><button type="button" class="select-button" data-index="7" data-value="no">{{ __('users.permissions_select')}}</button></div>
										                        <div>{{ __('users.permission_section.costs_tootip_select')}}</div>
										                    </div>
										                </div>
										            </div>
										            <input type="hidden" name="selected_options[]" id="selected_option_7" value="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
</div>
<!--end page wrapper -->
@endsection
@section("script")
<script>
$(document).ready(function() {
    // Toggle the visibility of the permissions select dropdown
    $('.permissions-select-toggle').on('click', function() {
        $(this).next('.permissions-select').toggleClass('show');
    });

    // Handle the selection of Yes/No options
    $('.select-button').on('click', function() {
        var index = $(this).data('index');
        var value = $(this).data('value');
        var $toggleText = $('.permissions-select-wrapper').eq(index).find('.permissions-select-toggle');

        // Update the hidden input with the selected value
        $('#selected_option_' + index).val(value);
        
        // Update the displayed text and its color
        $toggleText.text($(this).text());

        if (value === 'yes') {
            // Make the text green when "yes" is selected
            $toggleText.css('color', 'green');
        } else if (value === 'no') {
            // Make the text red when "no" is selected
            $toggleText.css('color', 'red');
        }

        // Hide the dropdown
        $('.permissions-select').removeClass('show');
    });

    // Close the dropdown if clicked outside
    $(document).on('click', function(event) {
        if (!$(event.target).closest('.permissions-select-wrapper').length) {
            $('.permissions-select').removeClass('show');
        }
    });
});

// Additional code for handling permissions pointer-events and tooltips
$(document).ready(function() {
    $('.user-permissions__values--incl .permissions').css('pointer-events', 'none');
    
    $('[data-bs-toggle="popover"]').popover();
    $('[data-bs-toggle="tooltip"]').tooltip();

    $('[data-bs-toggle="popover"]').click(function() {
        $('[data-bs-toggle="popover"]').not(this).popover('hide'); // all but this
    });

    $('#UserType1').click(function() {
        if ($('#UserType1').is(':checked')) {
            $('.user-permissions__values--incl .permissions').css('pointer-events', 'none');
        } else {
            $('.user-permissions__values--incl .permissions').css('pointer-events', 'all');
        }
    });

    $('#UserType2').click(function() {
        if ($('#UserType2').is(':checked')) {
            $('.permissions-select-toggle').addClass('warrows');
            $('.user-permissions__values--incl .permissions').css('pointer-events', 'all');
        } else {
            $('.permissions-select-toggle').removeClass('warrows');
            $('.user-permissions__values--incl .permissions').css('pointer-events', 'none');
        }
    });

    $('#UserType1').click(function() {
        $('.permissions-select-toggle').removeClass('warrows');
    });
});

</script>
@endsection
