    @extends("layouts.app")

    @section("style")
    <!-- <link href="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet" /> -->
    <link href="{{URL::asset('assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/bs-stepper/css/bs-stepper.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datetimepicker/css/classic.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datetimepicker/css/classic.time.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datetimepicker/css/classic.date.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css')}}">
    <link href="{{URL::asset('assets/plugins/jsteps/jquery-steps.css')}}" rel="stylesheet" />
    
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />

    @endsection
        @section("content")
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <div class="register-steps-wrapper d-flex gap-4">
                

                <div class="card page-contract p-4 w-100 border-light-purple mx-3">
                    <div class="register-steps__summary">
                        <div class="mb-3 d-flex justify-content-between gap-1 register-steps__summary--actions">
                            <h5 class="bs-stepper-content__title font-17 font-weight-600 mb-4">
                                <span class="bs-stepper-content__title--status ps-4 pe-4">Active</span>
                                Kontroll
                                @if ($status == 'red')
                                    <span class="bs-stepper-content__title--note alert ps-4 ">Notice Period Expires in 5 Days <i class='bx bx-x bs-stepper-close-note'></i></span></h5>
                                    <!-- <span class="bs-stepper-content__title--note ps-4 green"> Notice Period Expires in <b>8 days</b><i class='bx bx-x bs-stepper-close-note'></i></span> -->
                                @elseif ($status == 'orange')
                                    <span class="bs-stepper-content__title--note ps-4">Notice Period Expires in 30 Days <i class='bx bx-x bs-stepper-close-note'></i></span></h5>
                                    <!-- <span class="bs-stepper-content__title--note ps-4 green"> Notice Period Expires in <b>96 days</b><i class='bx bx-x bs-stepper-close-note'></i></span> -->
                                @elseif ($status == 'gray')
                                    <span class="bs-stepper-content__title--note ps-4 alert">Notice Period Has Expired <i class='bx bx-x bs-stepper-close-note'></i></span></h5>
                                    <!-- <span class="bs-stepper-content__title--note ps-4 green"> Notice Period Expires in <b>96 days</b><i class='bx bx-x bs-stepper-close-note'></i></span> -->
                                @elseif ($status == 'green')
                                    <span class="bs-stepper-content__title--note ps-4 green"> Notice Period Expires in 96 days <i class='bx bx-x bs-stepper-close-note'></i></span>
                                @endif
                            </h5>
                        </div>

                        <form name="frmSummary" id="frmSummary">
                            <div class="row g-4 steps-summary__row">
                                <div class="col-6 col-lg-6 mt-3 steps-summary__left">
                                    <fieldset class="steps-summary__group mb-4">
                                        <legend class="d-flex justify-content-center align-items-center gap-1">Generally</legend>
                                        <div class="row p-4 pt-0 pb-2">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Category</span>
                                                <span class="changeble-text font-type-6 border-type-6 border px-2 py-2 rounded font-type-6 width-fit d-flex fs-07 mt-1">EMPLOYMENT CONTRACTS</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Office" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Office</option>
                                                    <option value="1">Employment Contracts</option>
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
                                            </div>
                                        </div>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="changeble-label title mt-3">Type</span>
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
                                                    <option value="2">Executive</option>
                                                    <option value="3">Finance</option>
                                                    <option value="4">HR</option>
                                                    <option value="5">IT</option>
                                                    <option value="6">Marketing</option>
                                                    <option value="7">Procurement</option>
                                                    <option value="8">Production</option>
                                                    <option value="9">Sales</option>
                                                </select>
                                                <span class="title mt-3">Cost</span>
                                                <span class="font-color-7 changeble-text">30 000 SEK</span>
                                                <div class="d-flex gap-2">
                                                    <input class="form-control mt-1"  type="text" name="summary-field-changeble" value="30 000 SEK" style="display:none;">
                                                    <select class="form-select summary-documents__line--types mt-1"  name="summary-field-changeble" style="display:none;">
                                                        <option disabled selected>{{ __('general.select') }}</option>
                                                        @foreach($currencies as $key => $currency)
                                                            @if($key != 7)
                                                            <option {{ $currency === 'SEK' ? 'selected' : '' }} value="{{ $key }}">{{ $currency }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
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
                                                <span class="changeble-text">Month</span>
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
                                            <span class="highlighted-area__icon"><i class='bx bx-user bg-white  border-gray color-gray'></i> </span>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title mt-2">Contract Manager</span>
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
                                                <span class="title changeble-label mt-2 emptys">Position</span>
                                                <span class="changeble-text emptys">-</span>
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
                                    <fieldset class="steps-summary__group mb-4 mt-1">
                                        <legend class="d-flex justify-content-center align-items-center gap-1">Counterparty</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title changeble-label">Company</span>
                                                <span class="mb-2 changeble-text">Kontroll AB</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Kontroll AB" style="display:none;">
                                                <span class="title mt-3 changeble-label emptys">Address</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3 changeble-label emptys">City</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title changeble-label emptys">Organisation Number</span>
                                                <span class="mb-2 changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3 changeble-label emptys">Postal Code</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3 changeble-label emptys">Country</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                            </div>

                                        </div>
                                        <div class="d-flex px-2 mx-3 my-4 mt-2 py-3 gap-2 pe-3 highlighted-area">
                                            <span class="highlighted-area__icon"><i class='bx bx-user bg-white  border-gray color-gray'></i> </span>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title title mt-2">Contact Name</span>
                                                <span class="changeble-text">Robin B</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Robin B" style="display:none;">
                                                <span class="title mt-3">Telephone</span>
                                                <span class="gap-1 changeble-text line-height-15">09900993</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="09900993" style="display:none;">
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex ps-1">
                                                <!-- <span class="title title mt-2">Position</span>
                                                <span class="changeble-text">-</span> -->
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;"> -->
                                                <span class="title mt-2">Website</span>
                                                <span class="gap-1 changeble-text line-height-15">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-2">Email</span>
                                                <span class="gap-1 changeble-text"><a href="mailto:info@lomo.se">info@kontroll.se</a></span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="info@kontroll.se" style="display:none;">
                                                <!-- <span class="title mt-3">Work</span>
                                                <span class="gap-1 changeble-text line-height-15">09900993</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="09900993" style="display:none;"> -->
                                            </div>
                                        </div>
                                        <a data-bs-toggle="popover" data-bs-content="Show All Fields" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--show"><i class='bx bx-filter'></i></a>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="steps-summary__group contract-duration mb-4 mt-1">
                                        <legend class="d-flex justify-content-center align-items-center gap-1">Duration</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Start Date</span>
                                                <span class="changeble-text">Nov 29, 2023</span>
                                                <div name="summary-field-changeble" class="datepicker-wrap" style="display:none;">
                                                    <input name="summary-field-changeble" id="DurationStartDate" placeholder="Valid From" value="2020-11-29" class="form-control text-left datepicker" type="text" required />
                                                    <i class='bx bx-calendar summary-field-changeble'></i>
                                                </div>
                                                <span class="title mt-3">Date This Contract Was Terminated</span>
                                                <span class="">-</span>
                                                <div name="" class="" style="display:none;">
                                                    <input name="summary-field-changeble" id="DurationStartDate" placeholder="Valid To" value="2023-11-29" class="form-control text-left" type="text" required />
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">End Date</span>
                                                <span class="changeble-text">Nov 29, 2023</span>
                                                <div name="summary-field-changeble" class="datepicker-wrap" style="display:none;">
                                                    <input name="summary-field-changeble" id="DurationStartDate" placeholder="Valid To" value="2023-11-29" class="form-control text-left datepicker" type="text" required />
                                                    <i class='bx bx-calendar summary-field-changeble'></i>
                                                </div>
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

                                        <div class="d-flex px-2 mx-3 my-4 mt-2 py-3 gap-2 pe-3 highlighted-area">
                                            <span class="highlighted-area__icon"><i class='bx bx-error' ></i> </span>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <div class="title mt-3">Terminate Contract</div>
                                                <div class="d-flex mt-2">
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--terminate">Terminate</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex ps-1">
                                                <div class="title mt-3">Renew Contract</div>
                                                <div class="d-flex mt-2">
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--review">Renew</a>
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
                                    <fieldset class="steps-summary__group mb-4 mt-1">
                                        <legend class="d-flex justify-content-center align-items-center gap-1"><span ><i class='bx bxs-bell fs-08 color-white'></i> </span> Reminder</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Type of Reminder</span>
                                                <span class="changeble-text">Terminate</span>
                                                <select class="form-select form-control text-left" name="summary-field-changeble" style="display:none;">
                                                    <option value="1" selected>Terminate</option>
                                                    <option value="2">Renegotiate</option>
                                                    <option value="3">Renew</option>
                                                </select>
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Reminder Date</span>
                                                <span class="changeble-text d-flex align-items-center gap-1">Sep 29, 2023</span>
                                                <input class="form-control" type="text" name="summary-field-changeble" value="2023-09-29" style="display:none;">
                                            </div>
                                            <div class="col-12 col-lg-12 flex-column d-flex">
                                                <span class="title mt-3 mb-1">Email Recipients</span>
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
                                    <fieldset class="steps-summary__group notes mt-1">
                                        <legend class="d-flex justify-content-center align-items-center gap-2">Notes<span class="circle-number">2</span></legend>
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
                                                            <div class="dropdown">
                                                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bx-dots-horizontal-rounded'></i></button>
                                                                <ul class="dropdown-menu" style="">
                                                                    <li><a class="dropdown-item" href="#">Edit</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item" href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
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
                                        <a class="steps-summary__group--add"><span class="btn btn-secondary py-2 fs-07 mt-2">Add Comment</span></a>
                                    </fieldset>
                                   
                                </div>
                                <div class="col-6 col-lg-6 mt-3 steps-summary__right">
                                    <fieldset class="steps-summary__group mb-4">
                                        <legend class="d-flex justify-content-center align-items-center gap-1"><i class="bx bx-paperclip fs-1rem rotate-270"></i> Attached Files <span class="ms-1 circle-number">2</span></legend>
                                        <div class="row p-4 pt-0">
                                            <div class="summary-documents">
                                                <div class="summary-documents__line summary-document-heading border-bottom">
                                                    <div class="summary-document-heading__column">Type</div>
                                                    <div class="summary-document-heading__column">Name</div>
                                                    <div class="summary-document-heading__column">Uploaded</div>
                                                    <div class="summary-document-heading__column">Send</div>
                                                    <div class="summary-document-heading__column">Delete</div>
                                                </div>
                                                <div class="summary-documents__line summary-document border-bottom">
                                                    <span class="changeble-text summary-document__column summary-document__type">Contract</span>
                                                    <select class="form-select summary-documents__line--types" name="summary-field-changeble" style="display:none;">
                                                        <option disabled selected>{{ __('general.select') }}</option>
                                                        @foreach($file_types as $key => $type)
                                                            @if($key != 7)
                                                            <option {{ $type === 'Contract' ? 'selected' : '' }} value="{{ $key }}">{{ $type }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    <div class="summary-document__column summary-document__name">
                                                        <a class="pdf-link changeble-text" data-src="/assets/images/demo/HyresavtalFörLokal.pdf#navpanes=0&zoom=70&view=fit" href="#"><i class='bx bx-file-blank'></i> Lease Agreement</a>
                                                        <input class="form-control summary-documents__line--name" type="text" name="summary-field-changeble" value="Lease Agreement" style="display:none;">
                                                    </div>
                                                    <div class="summary-document__column summary-document__date">
                                                        2023-11-29
                                                    </div>
                                                    <div class="summary-document__column summary-document__action justify-content-start ps-1">
                                                        <a class="pe-2 attach-send-email" href="#" data-bs-toggle="modal" data-bs-target="#SendFileEmail"><i class='bx bx-envelope '></i></a>

                                                    </div>
                                                    <div class="summary-document__column summary-document__action justify-content-start ps-2">
                                                        <input type="file" id="file-input" class="hidden-input">
                                                        <a href="#"><i class='bx bx-trash hover-color-type-11'></i></a>
                                                    </div>
                                                </div>
                                                <div class="summary-documents__line summary-document">
                                                    <span class="changeble-text summary-document__column summary-document__type">Appendix</span>
                                                    <select class="form-select summary-documents__line--types" name="summary-field-changeble" style="display:none;">
                                                        <option disabled selected>{{ __('general.select') }}</option>
                                                        @foreach($file_types as $key => $type)
                                                            @if($key != 7)
                                                            <option {{ $type === 'Appendix' ? 'selected' : '' }} value="{{ $key }}">{{ $type }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    <div class="summary-document__column summary-document__name">
                                                        <a class="pdf-link changeble-text" data-src="/assets/images/demo/Abonnemangsvillkor.pdf#navpanes=0&zoom=70&view=fit" href="#"><i class='bx bx-file-blank'></i> Abonnemangsvillkor</a>
                                                        <input class="form-control summary-documents__line--name" type="text" name="summary-field-changeble" value="Abonnemangsvillkor" style="display:none;">
                                                    </div>
                                                    <div class="summary-document__column summary-document__date">
                                                        2023-11-29
                                                    </div>
                                                    <div class="summary-document__column summary-document__action justify-content-start ps-1">
                                                        <a class="pe-2 attach-send-email" href="#" data-bs-toggle="modal" data-bs-target="#SendFileEmail"><i class='bx bx-envelope '></i></a>
                                                    </div>
                                                    <div class="summary-document__column summary-document__action justify-content-start ps-2">
                                                        <input type="file" id="file-input" class="hidden-input">
                                                        <a href="#"><i class='bx bx-trash hover-color-type-11'></i></a>
                                                    </div>
                                                    <!-- <div class="summary-document__column summary-document__action"> -->
                                                        <!-- <a class="pe-2 attach-send-email" href="#"><i class='bx bx-envelope '></i></a> -->
                                                         <!-- <input type="file" id="file-input" class="hidden-input"> -->
                                                        <!-- <a class="pe-2 attach-send-email" href="#" data-email="recipient@example.com"><i class='bx bx-envelope'></i></a> -->
                                                        <!-- <a href="#"><i class='bx bx-trash color-type-11'></i></a> -->
                                                    <!-- </div> -->
                                                </div>
                                                <div class="summary-documents__line--upload d-flex justify-content-end mt-4">
                                                    <a class="btn btn-secondary py-2 pe-3 d-flex align-items-center gap-0" data-bs-toggle="modal" data-bs-target="#UploadNewFile"><i class='bx bx-plus' ></i> Add File</a>
                                                </div>
                                            </div>
                                        </div>
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
        <!--end page wrapper -->

        <div class="modal fade" id="UploadNewFile" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-md attach-file-modal">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="card p-4 w-100 mb-0 pb-0">
                           <h5 class="bs-stepper-content__title">{{ __('contracts.steps_page.title_attach_file') }}</h5>
                            <form name="frmSixthStep" id="frmSixthStep">
                                <div class="row g-3">
                                    <div class="mb-3">
                                        <div class="col-12 col-lg-12">
                                            <label for="AttachDocumentType" class="form-label">{{ __('contracts.steps_page.fields.contract_type') }}</label>
                                            <select name="attach_document_type" class="form-select mb-3" id="AttachDocumentType" aria-label="AttachDocumentType">
                                                <option disabled selected hidden value="">{{ __('general.select') }}</option>
                                                @foreach($file_types as $key => $file_type)
                                                    <option value="{{ $key }}">{{ $file_type }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- <label for="inputProductDescription" class="form-label">Documents</label> -->
                                        <input name="attach_document_file" id="image-uploadify" style="display: none;" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                                        
                                        <div style="display: none;" class="col-12 col-lg-12 mt-4 online_agreement_area">
                                            <label for="AttachDocumentLink" class="form-label">Link</label>
                                            <input name="attach_document_link" type="text" class="form-control" id="AttachDocumentLink" placeholder="Add a URL">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mt-0 mb-2">
                                        <button data-bs-dismiss="modal" type="button" class="step btn btn-secondary pe-3 ps-3 pb-2 pt-2 me-2 font-12">{{ __('general.cancel_button') }}</button>
                                        <button type="button" class="btn btn-primary radius-20 mt-2 mt-lg-0 ms-2 px-3 font-12">{{ __('general.save_button') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade NotificationAlert" id="NotificationAlert" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-md NotificationAlert__wrapper">
                    <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body p-0">
                            <div class="card p-4 w-100 mb-0">
                                <div class="NotificationAlert__icon"><i class='bx bx-error'></i></div>
                                <h5 class="NotificationAlert__title">Notification Alert</h5>
                                <div class="NotificationAlert__subtitle">This contract is about to expire in 5 days</div>
                                <form name="f">
                                    <div class="d-flex justify-content-start mt-3">
                                        <div class="d-flex justify-content-start mt-0 mb-2 NotificationAlert__btns">
                                            <button data-bs-dismiss="modal" type="button" class="NotificationAlert__btns--terminate btn pe-3 ps-3 pb-2 pt-2 me-2 font-12">Terminate</button>
                                            <button data-bs-dismiss="modal" type="button" class="NotificationAlert__btns--review btn radius-20 mt-2 mt-lg-0 ms-2 px-3 font-12">Renew the contract</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="modal fade" id="SendFileEmail" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-md send-file-modal">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="card p-4 w-100 mb-0 pt-0">
                           <h5 class="bs-stepper-content__title mb-Z"><i class='bx bx-file-blank'></i> Abonnemangsvillkor</h5>
                            <div class="row g-3">
                                <div class="mt-0 mb-3">
                                    <div class="col-12 col-lg-12 mt-3 online_agreement_area">
                                        <label for="AttachDocumentLink" class="form-label">To</label>
                                        <input name="attach_send_to" type="text" class="form-control" id="" placeholder="Email">
                                    </div>
                                    <div class="col-12 col-lg-12 mt-3 online_agreement_area">
                                        <label for="AttachDocumentLink" class="form-label">Subject</label>
                                        <input name="attach_send_subject" type="text" class="form-control" id="" placeholder="Text">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-0 mb-2">
                                    <button type="button" class="btn btn-primary radius-20 mt-2 mt-lg-0 ms-2 px-3 font-12">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection
    
    @section("script")
    <script src="{{URL::asset('assets/js/jquery-validator.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jsteps/jquery-steps.js')}}"></script>
    <script src="{{URL::asset('assets/js/jsteps-script.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datetimepicker/js/legacy.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datetimepicker/js/picker.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datetimepicker/js/picker.time.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datetimepicker/js/picker.date.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/tinymce.min.js')}}"></script>

    <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>


    <script>
        $(document).ready(function () {

            $('[data-bs-toggle="popover"]').popover();
            $(".js-change-emails-summary").select2({
                tags: true,
                // disabled : false
            });
            $('.steps-summary__group .select2-container--default').hide();

            // changeble-text empty
            
            $('.steps-summary__group--show').on('click', function () {
                var $group = $(this).closest('.steps-summary__group');
                var $labels = $group.find('.changeble-label.emptys');
                var $texts = $group.find('.changeble-text.emptys');

                // Check if the elements have the 'emptys' class and toggle to 'showed'
                if ($labels.length > 0 && $texts.length > 0) {
                    $labels.removeClass('emptys').addClass('showed');
                    $texts.removeClass('emptys').addClass('showed');
                    // Change the data-bs-content attribute
                    $(this).attr('data-bs-content', 'Show Only Filled Fields');
                } else {
                    // If no 'emptys' class is found, check for 'showed' class and toggle to 'emptys'
                    $labels = $group.find('.changeble-label.showed');
                    $texts = $group.find('.changeble-text.showed');
                    if ($labels.length > 0 && $texts.length > 0) {
                        $labels.removeClass('showed').addClass('emptys');
                        $texts.removeClass('showed').addClass('emptys');
                        // Change the data-bs-content attribute
                        $(this).attr('data-bs-content', 'Show All Fields');
                    } else {
                        console.log('Neither class found');
                    }
                }
                $(this).popover('dispose').popover();
            });

            $('.save-cancel-changes-group__cancel').on('click',function(e) {
                e.preventDefault();
                $(this).closest('.save-cancel-changes-group').hide(50); // Hide the save-cancel group
                $(this).closest('.save-cancel-changes-group').siblings('.steps-summary__group--edit').show(50); // Show the edit button

                $(this).parents('.steps-summary__group').find('.changeble-text').removeClass('temp-hidden');
                $(this).parents('.steps-summary__group').find('input[name=\'summary-field-changeble\']').hide(50);
                $(this).parents('.steps-summary__group').find('select[name=\'summary-field-changeble\']').hide(50);
                $(this).parents('.steps-summary__group').find('textarea[name=\'summary-field-changeble\']').hide(50);
                $(this).parents('.steps-summary__group').find('.summary-field-changeble').hide(50);
                $('.steps-summary__group .select2-container--default').hide(100);
                var $labels = $(this).parents('.steps-summary__group').find('.changeble-label.emptyses');
                if ($labels.length > 0) {
                    $labels.removeClass('emptyses').addClass('emptys');
                }
                $(this).parents('.steps-summary__group').find('.changeble-text').show(100);
                $(this).parents('.steps-summary__group').find('.steps-summary__group--edit').removeClass('active-edit');
            });
            $('.steps-summary__group--edit').on('click',function(e) {
                e.preventDefault();
                if($(this).hasClass('active-edit')){
                    $(this).parents('.steps-summary__group').find('.changeble-text').removeClass('temp-hidden');
                    $(this).parents('.steps-summary__group').find('input[name=\'summary-field-changeble\']').hide(50);
                    $(this).parents('.steps-summary__group').find('select[name=\'summary-field-changeble\']').hide(50);
                    $(this).parents('.steps-summary__group').find('textarea[name=\'summary-field-changeble\']').hide(50);
                    $(this).parents('.steps-summary__group').find('.summary-field-changeble').hide(50);
                    $('.steps-summary__group .select2-container--default').hide(100);
                    $(this).parents('.steps-summary__group').find('.changeble-text').show(100);
                    $(this).removeClass('active-edit');
                }else{
                    $(".js-emails-changeble").hide(100);

                    $(this).addClass('active-edit');
                    $('.steps-summary__group').find('.changeble-text').removeClass('temp-hidden');
                    $('.steps-summary__group').find('.changeble-text').show(100);
                    $('.steps-summary__group').find('input[name=\'summary-field-changeble\']').hide(50);
                    $('.steps-summary__group').find('select[name=\'summary-field-changeble\']').hide(50);
                    $('.steps-summary__group').find('textarea[name=\'summary-field-changeble\']').hide(50);
                    $('.steps-summary__group .select2-container--default').hide(50);
                    // $(".js-change-emails-summary").select2({
                    //     tags: true,
                    //     disabled : false
                    // });
                    if($(this).parents('.steps-summary__group').find('.changeble-text').hasClass('temp-hidden')){
                        $(this).parents('.steps-summary__group').find('.changeble-text').removeClass('temp-hidden');
                        $(this).parents('.steps-summary__group').find('input[name=\'summary-field-changeble\']').hide(50);
                        $(this).parents('.steps-summary__group').find('select[name=\'summary-field-changeble\']').hide(50);
                        $(this).parents('.steps-summary__group').find('textarea[name=\'summary-field-changeble\']').hide(50);
                        $(this).parents('.steps-summary__group').find('.summary-field-changeble').hide(50);
                        $('.steps-summary__group .select2-container--default').hide(50);
                        $(this).parents('.steps-summary__group').find('.changeble-text').show(100);
                    }else{
                        $(this).parents('.steps-summary__group').find('.changeble-text').hide(50);
                        $(this).parents('.steps-summary__group').find('.changeble-text').addClass('temp-hidden');
                        $(this).parents('.steps-summary__group').find('input[name=\'summary-field-changeble\']').show(100);
                        $(this).parents('.steps-summary__group').find('select[name=\'summary-field-changeble\']').show(100);
                        $(this).parents('.steps-summary__group').find('div[name=\'summary-field-changeble\']').show(100);
                        // $(this).parents('.steps-summary__group').find('textarea[name=\'summary-field-changeble\']').show(100);
                        $(this).parents('.steps-summary__group').find('.summary-field-changeble').show(100);
                        $('.steps-summary__group .select2-container--default').show(50);
                        $(this).parents('.steps-summary__group').find('.changeble-label').show(100);

                        var $labels = $(this).parents('.steps-summary__group').find('.changeble-label.emptys');
                        if ($labels.length > 0) {
                            $labels.removeClass('emptys').addClass('emptyses');
                        }
                        $(".js-change-emails-summary").select2({
                            tags: true,
                            disabled : false
                        });
                    }
                }
                $(this).hide(50); // Hide the edit button
                $(this).siblings('.save-cancel-changes-group').show(50);
        });
             



        $('#image-uploadify').imageuploadify();

        $('.imageuploadify .imageuploadify-images-list').css('pointer-events','none');
        $('.imageuploadify .btn-default').css('pointer-events','none');
        $('.imageuploadify').css('pointer-events','none');


        $('.datepicker').pickadate({
            selectMonths: true,
            selectYears: true
        })
        $(".js-example-tags").select2({
            tags: true
        });

       
        $('.pdf-link').click(function(event) {
            event.preventDefault(); // Prevent the default link behavior
            var newSrc = $(this).data('src'); // Get the data-src attribute value
            $('#pdfViewer').attr('src', newSrc); // Change the src of the embed element
        });

        $('#AttachDocumentType').change(function() {
            if($(this).val() > 0 ){
                $('.online_agreement_area').hide(100);
                $('#image-uploadify').hide(100);
                $('.imageuploadify').show(100);
                $('.imageuploadify .imageuploadify-images-list').css('pointer-events','initial');
                $('.imageuploadify .btn-default').css('pointer-events','initial');
                $('.imageuploadify').css('pointer-events','initial');
            }
            if($(this).val() == 7 ){
                $('#image-uploadify').hide(100);
                $('.imageuploadify').hide(100);
                $('.online_agreement_area').show(100);
            }
        });
        // .steps-summary__group .notes
        $('.steps-summary__group--add').click(function() {
            if($('.steps-summary__group--add').hasClass('active')){
                $('.steps-summary__group--add').removeClass('active');
                $('.notes__wrapper').show(50);
                $('.notes__wrapper--new').hide(50);
                $('.steps-summary__group--add').show(50);
            }else{
                $('.steps-summary__group--add').addClass('active');
                $('.notes__wrapper').hide(50);
                $('.steps-summary__group--add').hide(50);
                $('.notes__wrapper--new').show(50);
            }
        });
        $('.save-cancel-notes-group__cancel').click(function() {
            $('.steps-summary__group--add').removeClass('active');
            $('.steps-summary__group--add').show(50);
            $('.notes__wrapper').show(50);
            $('.notes__wrapper--new').hide(50);
        });
    });
    $( document ).ready(function() {
                // Set a timeout to open #NotificationAlert modal after 1 second
            @if ($status == 'red')
            setTimeout(function () {
                $('#NotificationAlert').modal('show');
            }, 1000); // 1000 milliseconds = 1 second
            @endif
            // When #NotificationAlert modal is shown
            $('#NotificationAlert').on('shown.bs.modal', function () {
                // Make the #RemindersPopup modal's backdrop darker
                $('.modal-backdrop').not(':first').css('z-index', 1049); // Adjust the backdrop z-index for the second modal
                $('#RemindersPopup').css('z-index', 1048); // Adjust the z-index of the first modal
                $(this).css('z-index', 1050); // Ensure the second modal is on top
            });

            // When #NotificationAlert modal is hidden
            $('#NotificationAlert').on('hidden.bs.modal', function () {
                // // Reset the #RemindersPopup modal's backdrop
                // $('.modal-backdrop').not(':first').remove(); // Remove the second modal's backdrop
                // $('#RemindersPopup').css('z-index', 1050); // Reset the z-index of the first modal
                // $('body').addClass('modal-open'); // Ensure the body retains the modal-open class
            });


            $(function () {
                $('[data-bs-toggle="popover"]').popover({ placement: 'bottom', trigger: 'hover'});
                $('[data-bs-toggle="popover-responsible"]').popover({ placement: 'bottom', trigger: 'hover' });
                  // .tip()
                  // .addClass('contract-list-popover');
                $('[data-bs-toggle="tooltip"]').tooltip();
            });

            $('[data-bs-toggle="popover"]').click(function(){
                // $('[data-bs-toggle="popover"]').not(this).popover('hide'); //all but this
            });

            $('table tr.clickable').on('click', function() {
                if(!$(this).hasClass('collapsed')){
                    $(this).find('.more-items .bx').removeClass('bx-plus').addClass('bx-minus');
                }else{
                    $(this).find('.more-items .bx').removeClass('bx-minus').addClass('bx-plus');
                }
            });
            // ('input[name*=\'selected\']').prop('checked', this.checked);
            $('.contracts-list-table thead .form-check-input').on('click', function() {
                if($(this).hasClass('all-selected')){
                    $('.export-button').removeClass('ready-to-export');
                    $('.contracts-list-table tbody tr td').removeClass('selected');
                    $(this).removeClass('all-selected');
                }else{
                    $('.contracts-list-table tbody tr td').addClass('selected');
                    $('.export-button').addClass('ready-to-export');
                    $(this).addClass('all-selected');
                }
            });
            
            $('.contracts-list-table .form-check-input').on('click', function() {
                if($(this).parents('tr').find('td').hasClass('selected')){
                    $(this).parents('tr').find('td').removeClass('selected');
                    $('.export-button').removeClass('ready-to-export');
                }else{
                    $('.export-button').addClass('ready-to-export');
                    $(this).parents('tr').find('td').addClass('selected');
                }
            });

        });

    </script>
    @endsection