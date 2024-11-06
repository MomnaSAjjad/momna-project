@extends("layouts.app")
		
@section("content")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-end mb-3">
					<div class="breadcrumb-title pe-3 border-none font-15 ps-2">User Profile</div>
					<div class="ps-3">
					</div>
				 	<div class="ms-auto d-flex align-items-center">
                        <a href="{{ url('/users') }}" class="btn btn-secondary pe-4 ps-4 me-0">Back</a>
				 		<a href="#" class="btn btn-primary radius-20 mt-2 mt-lg-0 ms-2 px-3">Save Changes</a>
				 	</div>
				</div>
			</div>
			 <div class="container user-card">
                        <div class="main-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card card-bordered">
                                        <div class="card-body">
                                            <div class="d-flex flex-column align-items-center text-center">
                                                <div class="d-flex p-relative profile-img">
                                                    <img src="{{URL::asset('assets/images/avatars/avatar-2.png')}}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                                    <i class="bx bx-edit-alt"></i>
                                                </div>
                                                <div class="mt-3">
                                                    <h4>Martina Falk</h4>
                                                    <p class="text-secondary mb-1">CEO</p>
                                                    <p class="text-muted font-size-sm">Umeå</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-bordered">
                                        <div class="card-body">
                                            <h5 class="d-flex align-items-center mb-3 font-16">Permissions</h5>
                                             <div class="col-12 col-lg-12 mb-4">
                                                <label for="UserType" class="form-label">User Type</label>
                                                <select class="form-select" id="UserType" aria-label=".form-select-sm example">
                                                    <option disabled selected hidden value="">Manager</option>
                                                    <option value="1">Administrator</option>
                                                    <option value="2">Manager</option>
                                                </select>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <ul class="list-group list-group-flush permissions-list">
                                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap ps-1">
                                                        <div class="form-check form-check-success">
                                                            <input class="form-check-input" type="checkbox" value="" id="Permission1" checked="">
                                                            <label class="form-check-label" for="Permission1">
                                                              Add, Edit or Delete users and select rights
                                                            </label> 
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap ps-1">
                                                        <div class="form-check form-check-success">
                                                            <input class="form-check-input" type="checkbox" value="" id="Permission2" checked="">
                                                            <label class="form-check-label" for="Permission2">
                                                              Register and upload contracts
                                                            </label> 
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap ps-1">
                                                        <div class="form-check form-check-success">
                                                            <input class="form-check-input" type="checkbox" value="" id="Permission3" checked="">
                                                            <label class="form-check-label" for="Permission3">
                                                              Edit contracts
                                                            </label> 
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap ps-1">
                                                        <div class="form-check form-check-success">
                                                            <input class="form-check-input" type="checkbox" value="" id="Permission4" checked="">
                                                            <label class="form-check-label" for="Permission4">
                                                              Delete contracts
                                                            </label> 
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap ps-1">
                                                        <div class="form-check form-check-success">
                                                            <input class="form-check-input" type="checkbox" value="" id="Permission5" checked="">
                                                            <label class="form-check-label" for="Permission5">
                                                              Receive email reminders
                                                            </label> 
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap ps-1">
                                                        <div class="form-check form-check-success">
                                                            <input class="form-check-input" type="checkbox" value="" id="Permission6" checked="">
                                                            <label class="form-check-label" for="Permission6">
                                                              See contract costs
                                                            </label> 
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap ps-1">
                                                        <div class="form-check form-check-success">
                                                            <input class="form-check-input" type="checkbox" value="" id="Permission7" checked="">
                                                            <label class="form-check-label" for="Permission7">
                                                              See Reminders
                                                            </label> 
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap ps-1">
                                                        <div class="form-check form-check-success">
                                                            <input class="form-check-input" type="checkbox" value="" id="Permission8" checked="">
                                                            <label class="form-check-label" for="Permission8">
                                                              See all Categories
                                                            </label> 
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap ps-1">
                                                        <div class="form-check form-check-success">
                                                            <input class="form-check-input" type="checkbox" value="" id="Permission9" checked="">
                                                            <label class="form-check-label" for="Permission9">
                                                              See Contracts in Archive
                                                            </label> 
                                                        </div>
                                                    </li>
                                                    


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card card-bordered">
                                        <div class="card-body">
                                            <div class="row g-3 mb-4">
                                                <div class="col-6 col-lg-6 ps-4">
                                                    <label for="Title" class="form-label">Company</label>
                                                    <input type="text" required="" class="form-control" id="Company" placeholder="Company">
                                                </div>
                                                <div class="col-6 col-lg-6 ps-4">
                                                    <label for="Title" class="form-label">Region</label>
                                                    <select class="form-select" id="Region" aria-label=".form-select-sm example">
                                                        <option disabled selected hidden value="">Select</option>
                                                        <option value="1">Blekinge</option>
                                                        <option value="2">Dalarna</option>
                                                        <option value="3">Gotland</option>
                                                        <option value="4">Gävleborg</option>
                                                        <option value="5">Halland</option>
                                                        <option value="6">Jämtland</option>
                                                        <option value="7">Jönköping</option>
                                                        <option value="8">Kalmar</option>
                                                        <option value="9">Kronoberg</option>
                                                        <option value="10">Norrbotten</option>
                                                        <option value="11">Skåne</option>
                                                        <option value="12">Stockholm</option>
                                                        <option value="13">Sörmland</option>
                                                        <option value="14">Uppsala</option>
                                                        <option value="15">Värmland</option>
                                                        <option value="16">Västerbotten</option>
                                                        <option value="17">Västernorrland</option>
                                                        <option value="18">Västmanland</option>
                                                        <option value="19">Örebro län</option>
                                                        <option value="20">Östergötland</option>
                                                        <option value="21">Götaland</option>
                                                    </select>
                                                    <!-- <input type="text" required="" class="form-control" id="Region" placeholder="Region"> -->
                                                </div>
                                                <div class="col-6 col-lg-6 ps-4">
                                                    <label for="Name" class="form-label"><span class="font-color-7">*</span> Name</label>
                                                    <input type="text" required="" class="form-control" id="Name" placeholder="Name">
                                                </div>
                                                <div class="col-6 col-lg-6 ps-4">
                                                    <label for="Title" class="form-label">Title</label>
                                                    <input type="text" required="" class="form-control" id="Title" placeholder="Position">
                                                </div>
                                                <div class="col-6 col-lg-6 ps-4">
                                                    <label for="Phone" class="form-label">Telephone</label>
                                                    <input type="text" class="form-control" id="Phone" placeholder="Number">
                                                </div>
                                                <div class="col-6 col-lg-6 ps-4">
                                                    <label for="Email" class="form-label"><span class="font-color-7">*</span> Email</label>
                                                    <input type="text" class="form-control" id="Email" placeholder="Email">
                                                </div>
                                                <div class="col-6 col-lg-6 ps-4">
                                                    <label for="Title" class="form-label">Status</label>
                                                    <div class="form-check form-switch form-check-success">
                                                        <input class="form-check-input py-2" type="checkbox" role="switch" id="flexSwitchCheckSuccess">
                                                        <label class="form-check-label user-status-check font-color-7 pt-1" for="flexSwitchCheckSuccess">Inactive</label>
                                                    </div>
                                                    <!-- <label for="Status" class="form-label">Status</label>
                                                    <select class="form-select" id="Status" aria-label=".form-select-sm example">
                                                        <option disabled selected hidden value="">Inactive</option>
                                                        <option value="0">Active</option>
                                                        <option value="1">Inactive</option>
                                                    </select>-->
                                                </div>
                                                <div class="col-6 col-lg-6 ps-4">
                                                    <label for="Email" class="form-label ps-1"> Last Login</label>
                                                    <span class="d-flex ps-1 fs-08">March 12 , 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row user-card__contracts">
                                        <div class="col-sm-12">
                                            <div class="card card-bordered">
                                                <div class="card-body">
                                                    <h5 class="d-flex align-items-center mb-3 font-16">Responsible For These Contracts</h5>

                                                    <div class="table-responsive bordered">
                                                        <table class="table mb-0 table-striped contracts-list-table">
                                                            <thead class="table-dark">
                                                                <tr>
                                                                    <th class="text-left ps-2"><div class="d-flex justify-content-between align-items-center">Folder</div></th>
                                                                    <th class="text-left ps-2">Type</th>
                                                                    <th class="text-left">Contract</th>
                                                                    <th class="text-left ps-2">Start Date</th>
                                                                    <th class="text-left">End Date</th>
                                                                    <th class="text-left ps-2">Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-left ps-2 border-right-gray"><span class="border-type-5 border px-2 py-1 rounded font-type-5 d-flex justify-content-center align-items-center">Company Cars</span></td>
                                                                    <td class="text-left ps-2">Leasing</td>
                                                                    <td class="text-left"><a data-bs-toggle="modal" data-bs-target="#RemindersPopup" class="gap-2 font-weight-500">Car | Johanna Väst</a></td>
                                                                    <td class="text-left">
                                                                        <div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                                                June 10, 2024
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-left">
                                                                        <div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                                                June 10, 2026
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-left ps-2"><div class="d-flex justify-content-start align-items-center">Active</div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left ps-2 border-right-gray"><span class="border-type-8 border px-2 py-1 rounded font-type-8 d-flex justify-content-center align-items-center">IT</span></td>
                                                                    <td class="text-left ps-2">Servers</td>
                                                                    <td class="text-left"><a data-bs-toggle="modal" data-bs-target="#RemindersPopup" class="gap-2 font-weight-500">Car | Johanna Väst</a></td>
                                                                    <td class="text-left">
                                                                        <div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                                                June 10, 2024
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-left">
                                                                        <div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                                                June 10, 2026
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-left ps-2"><div class="d-flex justify-content-start align-items-center">Active</div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left ps-2 border-right-gray"><span class="border-type-6 border px-2 py-1 rounded font-type-6 d-flex justify-content-center align-items-center">Office</span></td>
                                                                    <td class="text-left ps-2">Rental Agreement </td>
                                                                    <td class="text-left"><a data-bs-toggle="modal" data-bs-target="#RemindersPopup" class="gap-2 font-weight-500">Office | Stockholm</a></td>
                                                                    <td class="text-left">
                                                                        <div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                                                June 10, 2024
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-left">
                                                                        <div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                                                June 10, 2026
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-left ps-2"><div class="d-flex justify-content-start align-items-center">Active</div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-flex justify-content-end">
                                    <a href="{{ url('/users') }}" class="pe-4 ps-4 me-0 font-color-7 fs-09rem"><i class='bx bx-trash'></i> Delete Profile</a>
                                </div>
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

<!--end page wrapper -->

<div class="modal fade" id="RemindersPopup" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="card p-4 w-100">
                   <div class="register-steps__summary">
            <div class="mb-3 d-flex justify-content-between gap-1 register-steps__summary--actions">
                <h5 class="bs-stepper-content__title font-17 font-weight-600 mb-4 w-100">
                    <span class="bs-stepper-content__title--status ps-3"><i class='bx bx-check'></i> Active</span>
                    Rental Agreement - Office | Stockholm
                    <span class="bs-stepper-content__title--note alert ps-4"><i class='bx bx-time-five ps-2'></i> Notice Period Expires in <b>5 Days</b></span></h5>
                    <!-- <span class="bs-stepper-content__title--note ps-4"><i class='bx bx-time-five ps-2'></i> Notice Period Expires in 5 Days <b>96 days</b></span></h5> -->
            </div>

            <form name="frmSummary" id="frmSummary">
                            <div class="row g-4 steps-summary__row">
                                <div class="col-6 col-lg-6 mt-3 steps-summary__left">
                                    <fieldset class="steps-summary__group mb-4">
                                        <legend class="">Contract Information</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Folder</span>
                                                <span class="folder-label changeble-text font-type-6 border-type-6 border px-2 py-1 rounded font-type-6 width-fit d-flex fs-07 mt-1">EMPLOYMENTS</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Office" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Office</option>
                                                    <option value="1">Employments</option>
                                                    <option value="2">Staff</option>
                                                    <option value="3">Subscription</option>
                                                    <option value="4">Service Agreements</option>
                                                    <option value="5">Company Cars</option>
                                                    <option value="5">Office</option>
                                                    <option value="5">Suppliers</option>
                                                    <option value="5">IT</option>
                                                    <option value="5">Credits</option>
                                                    <option value="5">Leasing</option>
                                                    <option value="5">Customer Contracts</option>
                                                    <option value="5">Insurances</option>
                                                    <option value="5">NDA</option>
                                                    <option value="5">Licenses</option>
                                                    <option value="5">Cooperation Agreements</option>
                                                </select>
                                                <span class="title mt-3">Type</span>
                                                <span class="mb-2 changeble-text">Permanent Employment</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Rental Agreement" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Rental Agreement</option>
                                                    <option value="1">Rental Agreement</option>
                                                    <option value="2">HR</option>
                                                    <option value="3">IT</option>
                                                    <option value="4">Leasing</option>
                                                </select>

                                                <span class="title mt-3">Department</span>
                                                <span class="changeble-text">Finance</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Finance" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Finance</option>
                                                    <option value="1">Development</option>
                                                    <option value="2">Finance</option>
                                                    <option value="3">HR</option>
                                                    <option value="4">IT</option>
                                                    <option value="5">Marketing</option>
                                                    <option value="6">Procurement</option>
                                                    <option value="7">Production</option>
                                                    <option value="8">Sales</option>
                                                </select>
                                                <span class="title mt-3">Cost</span>
                                                <span class="font-color-7 changeble-text">30 000 SEK</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="30 000 SEK" style="display:none;">
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title"></span>
                                                <span class="h-100">&nbsp;</span>
                                                <span class="title mt-3">Contract</span>
                                                <span class="mb-2 changeble-text">Kontroll</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Office | Stockholm" style="display:none;">
                                                <span class="title mt-3">Region</span>
                                                <span class="changeble-text">Stockholm</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Stockholm" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Stockholm</option>
                                                    <option value="1">Blekinge</option>
                                                    <option value="2">Dalarna</option>
                                                    <option value="3">Gotland</option>
                                                    <option value="4">Gävleborg</option>
                                                    <option value="5">Halland</option>
                                                    <option value="6">Jämtland</option>
                                                    <option value="7">Jönköping</option>
                                                    <option value="8">Kalmar</option>
                                                    <option value="9">Kronoberg</option>
                                                    <option value="10">Norrbotten</option>
                                                    <option value="11">Skåne</option>
                                                    <option value="12">Stockholm</option>
                                                    <option value="13">Sörmland</option>
                                                    <option value="14">Uppsala</option>
                                                    <option value="15">Värmland</option>
                                                    <option value="16">Västerbotten</option>
                                                    <option value="17">Västernorrland</option>
                                                    <option value="18">Västmanland</option>
                                                    <option value="19">Örebro län</option>
                                                    <option value="20">Östergötland</option>
                                                    <option value="21">Götaland</option>
                                                </select>
                                                <span class="title mt-3">Payment Period</span>
                                                <span class="changeble-text">Monthly</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Monthly" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;" >
                                                    <option disabled selected hidden value="">Month</option>
                                                    <option value="1">Month</option>
                                                    <option value="2">Quarter</option>
                                                    <option value="3">Year</option>
                                                    <option value="4">One Time</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex px-2 mx-3 my-4 mt-2 py-3 gap-2 pe-3 highlighted-area">
                                            <span class="highlighted-area__icon"><i class='bx bx-user'></i> </span>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title mt-2">Contract Owner</span>
                                                <span class="changeble-text">David Carlsson</span>
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">David Carlsson</option>
                                                    <option value="1">David Carlsson</option>
                                                    <option value="2">David Carlsson</option>
                                                    <option value="3">David Carlsson</option>
                                                </select>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="David Carlsson" style="display:none;"> -->
                                                <span class="title mt-3">Telephone</span>
                                                <span class="gap-1 changeble-text line-height-15">046 789 99 95</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="046 789 99 95" style="display:none;">
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex ps-1 justify-content-end">
                                                <span class="title title mt-2">Position</span>
                                                <span class="changeble-text">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3">Email</span>
                                                <span class="gap-1 changeble-text"><a href="mailto:david@foretag.se">david@foretag.se</a></span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="david@foretag.se" style="display:none;">
                                            </div>
                                        </div>
                                        <a data-bs-toggle="popover" data-bs-content="Show All Fields" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--show"><i class='bx bx-filter'></i></a>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="steps-summary__group mb-4">
                                        <legend class="">Counterparty</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title changeble-label">Company</span>
                                                <span class="mb-2 changeble-text">Kontroll AB</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Kontroll AB" style="display:none;">
                                                <span class="title mt-3 changeble-label">Address</span>
                                                <span class="changeble-text">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3 changeble-label">City</span>
                                                <span class="changeble-text">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title changeble-label">Org Nr</span>
                                                <span class="mb-2 changeble-text">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3 changeble-label">Postal Code</span>
                                                <span class="changeble-text">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3 changeble-label">Country</span>
                                                <span class="changeble-text">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                            </div>

                                        </div>
                                        <div class="d-flex px-2 mx-3 my-4 mt-2 py-3 gap-2 pe-3 highlighted-area">
                                            <span class="highlighted-area__icon"><i class='bx bx-user'></i> </span>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title title mt-2">Contact Person</span>
                                                <span class="changeble-text">Robin B</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Robin B" style="display:none;">
                                                <span class="title mt-3">Telephone</span>
                                                <span class="gap-1 changeble-text line-height-15">09900993</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="09900993" style="display:none;">
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex ps-1">
                                                <span class="title title mt-2">Position</span>
                                                <span class="changeble-text">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3">Email</span>
                                                <span class="gap-1 changeble-text"><a href="mailto:info@kontroll.se">info@kontroll.se</a></span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="info@kontroll.se" style="display:none;">
                                            </div>
                                        </div>
                                        <a data-bs-toggle="popover" data-bs-content="Show All Fields" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--show"><i class='bx bx-filter'></i></a>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="steps-summary__group mb-4">
                                        <legend class="">Contract Duration</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Start Date</span>
                                                <span class="changeble-text">2020-11-29</span>
                                                <div name="summary-field-changeble" class="datepicker-wrap" style="display:none;">
                                                    <input name="summary-field-changeble" id="DurationStartDate" placeholder="Valid From" value="2020-11-29" class="form-control text-left datepicker" type="text" required />
                                                    <i class='bx bx-calendar summary-field-changeble'></i>
                                                </div>
                                                <!-- <input placeholder="Valid From" name="summary-field-changeble" class="form-control text-left datepicker" type="text" value="2020-11-29" style="display:none;"/> -->
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="2020-11-29" style="display:none;"> -->
                                                <span class="title mt-3">Auto Renew</span>
                                                <span class="changeble-text border-type-6 border bg-type-6 px-2 py-1 rounded color-white width-fit d-flex fs-08 mt-1">Yes</span>
                                                <select class="form-select" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Auto Renew</option>
                                                    <option value="1">Yes</option>
                                                    <option value="2">No</option>
                                                </select>
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">End Date</span>
                                                <span class="changeble-text">2023-11-29</span>
                                                <div name="summary-field-changeble" class="datepicker-wrap" style="display:none;">
                                                    <input name="summary-field-changeble" id="DurationStartDate" placeholder="Valid To" value="2023-11-29" class="form-control text-left datepicker" type="text" required />
                                                    <i class='bx bx-calendar summary-field-changeble'></i>
                                                </div>
                                                <!-- <input placeholder="Valid To" name="summary-field-changeble" class="form-control text-left datepicker" type="text" value="2023-11-29" style="display:none;"/> -->
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="2023-11-29" style="display:none;"> -->
                                                <span class="title mt-3">Notice Period</span>
                                                <span class="changeble-text">2 Months</span>
                                                <select class="form-select form-control text-left" name="summary-field-changeble" style="display:none;">
                                                    <option value="" disabled selected hidden>2 Months</option>
                                                    <option value="0">No Notice Period</option>
                                                    <option value="1">1 Month</option>
                                                    <option value="2">2 Months</option>
                                                    <option value="3">3 Months</option>
                                                    <option value="4">4 Months</option>
                                                    <option value="5">5 Months</option>
                                                    <option value="6">6 Months</option>
                                                    <option value="7">7 Months</option>
                                                    <option value="8">8 Months</option>
                                                    <option value="9">9 Months</option>
                                                    <option value="10">10 Months</option>
                                                    <option value="11">11 Months</option>
                                                    <option value="12">12 Months</option>
                                                </select>
                                            </div>
                                        </div>
                                        <a data-bs-toggle="popover" data-bs-content="Show All Fields" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--show"><i class='bx bx-filter'></i></a>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="steps-summary__group mb-4">
                                        <legend class="">Email Reminder</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Type of Reminder</span>
                                                <span class="changeble-text">Renegotiate</span>
                                                <select class="form-select form-control text-left" name="summary-field-changeble" style="display:none;">
                                                    <option value="1">End Contract</option>
                                                    <option value="2" selected>Renegotiate</option>
                                                    <option value="3">Renew</option>
                                                </select>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Renegotiate" style="display:none;"> -->
                                                <!-- <span class="title mt-4">Mail Recipient Group</span>
                                                <span class="font-13 mt-1"><span class="focused-email">david@guetta.com</span><span class="focused-email">info@davidguetta.com</span></span> -->
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Reminder Date</span>
                                                <span class="changeble-text d-flex align-items-center gap-1"><i class='bx bxs-bell font-color-4'></i> 2023-09-29</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="2023-09-29" style="display:none;">
                                             <!--    <span class="title mt-4">How to cancell contract</span>
                                                <span class="font-13">By telephone : 046 789 99 95</span> -->
                                            </div>
                                            <div class="col-12 col-lg-12 flex-column d-flex">
                                                <span class="title mt-3">Email Recipient</span>
                                                <span class="font-13 mt-1 emails-changeble changeble-text">
                                                    <span class="focused-email">anna@lomo.se</span>
                                                    <span class="focused-email">jakob@lomo.se</span>
                                                </span>
                                                <select class="form-control js-change-emails-summary summary-field-changeble" id="reminderEmails" name="reminderEmails[]" multiple="multiple" style="display:none;">
                                                   <option selected="selected">anna@lomo.se</option>
                                                   <option selected="selected">jakob@lomo.se</option>
                                                </select>
                                            </div>
                                        </div>
                                        <a data-bs-toggle="popover" data-bs-content="Show All Fields" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--show"><i class='bx bx-filter'></i></a>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="steps-summary__group notes">
                                        <legend class="">Notes &nbsp; ( 2 )</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="notes__wrapper">
                                                <div class="col-12 col-lg-12 flex-column d-flex pt-3">
                                                    <ul>
                                                        <li class="notes__line">
                                                            <div class="notes__date">29 April 16:35  -  Martina Falk</div>
                                                            <span>We are satisfied with this contract but we will renegotiate the price next year </span>
                                                        </li>
                                                        <li class="notes__line">
                                                            <div class="notes__date">05 Juni 10.00  -  David Karlsson</div>
                                                            <span>If we don't agree on a better price next year, then we have to end the contract and find a new renting place. </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="notes__wrapper--new" style="display:none;">
                                                <div class="col-12 col-lg-12 flex-column pt-3 d-flex gap-2 align-items-end">
                                                    <textarea name="comment_area" id="CommentArea" type="textarea" class="form-control mb-1 textarea" rows="6" placeholder="Type Here.."></textarea>
                                                    <div class="d-flex gap-2">
                                                        <a class="save-cancel-notes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                                        <a class="save-cancel-notes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="steps-summary__group--add"><span class="btn btn-secondary py-1 fs-07 mt-2">Add Comment</span></a>
                                    </fieldset>
                                   
                                </div>
                                <div class="col-6 col-lg-6 mt-3 steps-summary__right">
                                    <fieldset class="steps-summary__group mb-4">
                                        <legend class="d-flex justify-content-center align-items-center gap-2"><i class="bx bx-paperclip fs-1rem rotate-270"></i> Attached Files &nbsp; ( 2 )</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="summary-documents">
                                                <div class="summary-documents__line summary-document-heading border-bottom">
                                                    <div class="summary-document-heading__column">Type</div>
                                                    <div class="summary-document-heading__column">Name</div>
                                                    <div class="summary-document-heading__column">Added</div>
                                                    <div class="summary-document-heading__column"></div>
                                                </div>
                                                <div class="summary-documents__line summary-document border-bottom">
                                                    <span class="changeble-text summary-document__column summary-document__type">Contract</span>
                                                    <select class="form-select summary-documents__line--types" name="summary-field-changeble" style="display:none;">
                                                        
                                                    </select>
                                                    <div class="summary-document__column summary-document__name">
                                                        <a class="pdf-link changeble-text" data-src="/assets/images/demo/HyresavtalFörLokal.pdf#navpanes=0&zoom=70&view=fit" href="#"><i class='bx bx-file'></i> Lease Agreement</a>
                                                        <input class="form-control mt-1 summary-documents__line--name" type="text" name="summary-field-changeble" value="Lease Agreement" style="display:none;">
                                                    </div>
                                                    <div class="summary-document__column summary-document__date">
                                                        2023-11-29
                                                    </div>
                                                    <div class="summary-document__column summary-document__action">
                                                        <a href="#"><i class='bx bx-x bg-type-11 color-white rounded'></i></a>
                                                    </div>
                                                </div>
                                                <div class="summary-documents__line summary-document">
                                                    <span class="changeble-text summary-document__column summary-document__type">Appendix</span>
                                                    <select class="form-select summary-documents__line--types" name="summary-field-changeble" style="display:none;">
                                                        
                                                    </select>
                                                    <div class="summary-document__column summary-document__name">
                                                        <a class="pdf-link changeble-text" data-src="/assets/images/demo/Abonnemangsvillkor.pdf#navpanes=0&zoom=70&view=fit" href="#"><i class='bx bx-file'></i> Abonnemangsvillkor</a>
                                                        <input class="form-control mt-1 summary-documents__line--name" type="text" name="summary-field-changeble" value="Abonnemangsvillkor" style="display:none;">
                                                    </div>
                                                    <div class="summary-document__column summary-document__date">
                                                        2023-11-29
                                                    </div>
                                                    <div class="summary-document__column summary-document__action">
                                                        <a href="#"><i class='bx bx-x bg-type-11 color-white rounded'></i></a>
                                                    </div>
                                                </div>
                                                <div class="summary-documents__line--upload d-flex justify-content-end mt-4">
                                                    <a class="btn btn-secondary py-1 pe-3 d-flex align-items-center gap-0" data-bs-toggle="modal" data-bs-target="#UploadNewFile"><i class='bx bx-plus' ></i> Add File</a>
                                                </div>
                                            </div>
                                        </div>
                                        <a data-bs-toggle="popover" data-bs-content="Show All Fields" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--show"><i class='bx bx-filter'></i></a>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <div class="steps-summary__right--img">
                                        <embed id="pdfViewer" src="/assets/images/demo/Abonnemangsvillkor.pdf#navpanes=0&zoom=70&view=fit" width="100%" height="1200px" />
                                    </div>
                                </div>
                            </div>
                        </form>
        </div>
                </div>
            </div>
            </div>
        </div>
    </div>

@endsection
@section("script")
<script>
    
 $('#flexSwitchCheckSuccess').click(function(){
    if( $('#flexSwitchCheckSuccess').is(':checked') ){
        $('.form-check-success .user-status-check').html('Active');
        $('.form-check-success .user-status-check').removeClass('font-color-7');
        $('.form-check-success .user-status-check').addClass('font-color-4');
    }else{
        $('.form-check-success .user-status-check').html('Inactive');
        $('.form-check-success .user-status-check').removeClass('font-color-4');
        $('.form-check-success .user-status-check').addClass('font-color-7');
    }
 });

// $( document ).ready(function() {
// 		$('.user-permissions__values--incl .permissions').css('pointer-events','none');
// 	$(function () {
// 		$('[data-bs-toggle="popover"]').popover();
// 		$('[data-bs-toggle="tooltip"]').tooltip();
// 	});
// 	$('[data-bs-toggle="popover"]').click(function(){
// 	    $('[data-bs-toggle="popover"]').not(this).popover('hide'); //all but this
// 	});
// 	$('#UserType1').click(function() {
// 	   if($('#UserType1').is(':checked')) { 
// 	   		$('.user-permissions__values--incl .permissions').css('pointer-events','none');
// 	   }else{
// 	   	    $('.user-permissions__values--incl .permissions').css('pointer-events','all');
// 	   }
// 	});
// 	$('#UserType2').click(function() {
// 	   if($('#UserType2').is(':checked')) { 
// 	   		$('.user-permissions__values--incl .permissions').css('pointer-events','all');
// 	   }else{
// 	   	    $('.user-permissions__values--incl .permissions').css('pointer-events','none');
// 	   }
// 	});
// 	$('.show-categories-list-popup').click(function() {
// 		$('#AddCategoryFirst').modal("hide");
// 		$('#AddCategorySecond').modal("show");
// 	});
// });
</script>
@endsection
