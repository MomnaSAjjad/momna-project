    @extends("layouts.app")
    @section("style")
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="assets/plugins/highcharts/css/highcharts-white.css" rel="stylesheet" />
    @endsection

        @section("content")
        <div class="page-wrapper">
                <div class="page-content">
                    <div class="row">
                        <div class="col-12 col-lg-12 analitycs-blocks contracts-folders mb-4">
                            <div class="card card-bordered radius-10 pb-4">
                                <div class="card-body pb-3">
                                    <div class="d-flex align-items-center mb-2 mt-2 justify-content-between">
                                        <div>
                                            <h6 class="mb-0 font-15 font-color-11 mb-2 d-flex gap-3 justify-content-center align-items-center chart-costs-heading"><span class="chart-costs-heading__title2">{{ __('archieve.Total 0 Archived Contracts') }}</span></h6>
                                        </div>
                                        <div class="contracts-folders__change-folders edit-folder_hvr font-color-11">
                                            <a class="font-color-11"><i class="bx bx-edit-alt"></i>{{ __('dashboard.Edit Folders') }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="contracts-folders__wrapper">
                                    @foreach ($foldersWithContractCounts as $folder)
                                        <a  href="{{ url('/archive/') }}?folder_id={{ $folder->id }}" class="contracts-folders__wrapper--item hover-scaled">
                                            <div class="contracts-folders__wrapper--folder">
                                                <div class='folder-icon bg-type-5' style="background:{{ $folder->color }}"></div>
                                                <span style="color:{{ $folder->color }}">{{ $folder->contract_count }}</span>
                                                <!-- <span>{{ $folder->contract_count }}</span> -->
                                                <div class="contracts-folders__wrapper--title {{ strtolower($folder->name) }}">
                                                    @if (app()->getLocale() === 'en')
                                                    {{ $folder->name }}
                                                @else
                                                    {{ $folder->name_sv }}
                                                @endif
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="mb-3 d-flex flex-row justify-content-between">
                                <div class="d-flex align-items-center gap-4">
                                    @if ($show_full_details)
                                    <div class="static-demo-data-def" style="display:none;">
                                        <h6 class="mb-0 font-15 font-color-11">{{ $total_contracts_title }}</h6>
                                    </div>
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="static-demo-data d-flex align-items-center gap-3">
                                            <h6 class="mb-0 font-color-11 border-type-2 border px-2 py-40 rounded font-type-2 fs-08">{{ $folder_name }}/ 0 {{ __('contracts. contract') }}</h6>
                                            <span class="font-color-7 fs-08">{{__('contracts.total_cost')}} 0 SEK</span>
                                            <span class="font-color-3 fs-08">{{__('contracts.total_income')}} 0 SEK</span>
                                        </div>
                                        <a class="remove-static-demo">{{ __('contracts.filters.Reset') }}</a>
                                    </div>
                                    @else
                                    <div class="static-demo-data-def">
                                        <h6 class="mb-0 font-15 font-color-11">{{ $total_contracts_title }}</h6>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="table-responsive bordered">
                                <table class="table mb-0 table-striped contracts-list-table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th width="16%" class="text-left ps-2"><div class="d-flex justify-content-between align-items-center">{{ __('archieve.Category') }}<span><i class='bx bx-chevron-down fs-1rem'></i></span></div></th>
                                            <th width="16%" class="text-left ps-2">{{ __('archieve.Type') }}</th>
                                            <th width="16%" class="text-left">{{ __('archieve.Contract') }}</th>
                                            <th width="10%" class="text-left">{{ __('archieve.Start_Date') }}</th>
                                            <th width="10%" class="text-left">{{ __('archieve.End_Date') }}</th>
                                            <th width="10%" class="text-left">{{ __('archieve.Contract_Manager') }}</th>
                                            <th width="10%" class="text-left ps-2">{{ __('archieve.Amount') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody class="done">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="RemindersPopup" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body">
                            <div class="card p-4 w-100">
                               <div class="register-steps__summary">
                                <div class="mb-3 d-flex justify-content-between gap-1 register-steps__summary--actions">
                                    <h5 class="bs-stepper-content__title  font-weight-600 mb-4 w-100">
                                        <span class="bs-stepper-content__title--status ps-3 archived"><i class='bx bx-archive'></i> Archived</span>
                                        Rental Agreement - Office | Stockholm
                                        <span class="bs-stepper-content__title--note ps-3 alert pe-3">This Contract is Terminated</span>
                                    </h5>
                                </div>
                            <form name="frmSummary" id="frmSummary">
                            <div class="row g-4 steps-summary__row">
                                <div class="col-6 col-lg-6 mt-3 steps-summary__left">
                                    <fieldset class="steps-summary__group mb-4">
                                        <legend class="">Generally</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Category</span>
                                                <span class="folder-label changeble-text font-type-6 border-type-6 border px-2 py-40 rounded font-type-6 width-fit d-flex fs-07 mt-1">EMPLOYMENT CONTRACTS</span>
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
                                            <span class="highlighted-area__icon"><i class='bx bx-user'></i> </span>
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
                                        <legend class="">Counterparty</legend>
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
                                            <span class="highlighted-area__icon"><i class='bx bx-user'></i> </span>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title title mt-2">Contact Name</span>
                                                <span class="changeble-text">Robin B</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Robin B" style="display:none;">
                                                <span class="title mt-3">Mobile</span>
                                                <span class="gap-1 changeble-text line-height-15">09900993</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="09900993" style="display:none;">
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex ps-1">
                                                <!-- <span class="title title mt-2">Position</span>
                                                <span class="changeble-text">-</span> -->
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;"> -->
                                                <span class="title mt-2">Email</span>
                                                <span class="gap-1 changeble-text"><a href="mailto:info@lomo.se">info@kontroll.se</a></span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="info@kontroll.se" style="display:none;">
                                                <span class="title mt-3">Work</span>
                                                <span class="gap-1 changeble-text line-height-15">09900993</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="09900993" style="display:none;">
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
                                        <legend class="">Contract Duration</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Start Date</span>
                                                <span class="changeble-text">Nov 29, 2023</span>
                                                <div name="summary-field-changeble" class="datepicker-wrap" style="display:none;">
                                                    <input name="summary-field-changeble" id="DurationStartDate" placeholder="Valid From" value="2020-11-29" class="form-control text-left datepicker" type="text" required />
                                                    <i class='bx bx-calendar summary-field-changeble'></i>
                                                </div>
                                                <!-- <input placeholder="Valid From" name="summary-field-changeble" class="form-control text-left datepicker" type="text" value="2020-11-29" style="display:none;"/> -->
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="2020-11-29" style="display:none;"> -->

                                                <span class="title mt-3">Date This Contract Was Terminated</span>
                                                <span class="">-</span>
                                                <div name="" class="" style="display:none;">
                                                    <input name="summary-field-changeble" id="DurationStartDate" placeholder="Valid To" value="2023-11-29" class="form-control text-left" type="text" required />
                                                </div>
                                                <!-- <div class="title mt-3">Terminate Contract</div>
                                                <div class="d-flex mt-2">
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--terminate">Terminate</a>
                                                </div> -->
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">End Date</span>
                                                <span class="changeble-text">Nov 29, 2023</span>
                                                <div name="summary-field-changeble" class="datepicker-wrap" style="display:none;">
                                                    <input name="summary-field-changeble" id="DurationStartDate" placeholder="Valid To" value="2023-11-29" class="form-control text-left datepicker" type="text" required />
                                                    <i class='bx bx-calendar summary-field-changeble'></i>
                                                </div>
                                                <!-- <input placeholder="Valid To" name="summary-field-changeble" class="form-control text-left datepicker" type="text" value="2023-11-29" style="display:none;"/> -->
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="2023-11-29" style="display:none;"> -->
                                                <!-- <span class="title mt-3">Ongoing Contract</span>
                                                <span class="changeble-text border-type-6 border bg-type-6 px-2 py-0 rounded color-white width-fit d-flex fs-08 mt-1">Yes</span>
                                                <select class="form-select" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Ongoing Contract</option>
                                                    <option value="1">Yes</option>
                                                    <option value="2">No</option>
                                                </select> -->
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

                                               <!--  <div class="title mt-3">Renew Contract</div>
                                                <div class="d-flex mt-2">
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--review">Renew</a>
                                                </div> -->
                                            </div>
                                            <!-- <div class="col-12 col-lg-12 flex-column d-flex">
                                                <div class="title mt-3">Take Action</div>
                                                <div class="contract-duration__buttons" >
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--terminate">{{ __('general.terminate_button') }}</a>
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--review">{{ __('general.renew_button') }}</a>
                                                </div>
                                            </div> -->
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
                                        <legend class="">Contract Reminder</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Type of Reminder</span>
                                                <span class="changeble-text">Terminate</span>
                                                <select class="form-select form-control text-left" name="summary-field-changeble" style="display:none;">
                                                    <option value="1" selected>Terminate</option>
                                                    <option value="2">Renegotiate</option>
                                                    <option value="3">Renew</option>
                                                </select>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Renegotiate" style="display:none;"> -->
                                                <!-- <span class="title mt-4">Mail Recipient Group</span>
                                                <span class="font-13 mt-1"><span class="focused-email">david@guetta.com</span><span class="focused-email">info@davidguetta.com</span></span> -->
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Reminder Date</span>
                                                <span class="changeble-text d-flex align-items-center gap-1"><i class='bx bxs-bell font-color-11 fs-07'></i> Sep 29, 2023</span>
                                                <input class="form-control" type="text" name="summary-field-changeble" value="2023-09-29" style="display:none;">
                                             <!--    <span class="title mt-4">How to cancell contract</span>
                                                <span class="font-13">By telephone : 046 789 99 95</span> -->
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
                                        <legend class="d-flex justify-content-center align-items-center gap-2">Notes<span class="ms-1 circle-number">2</span></legend>
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
                                        <a class="steps-summary__group--add"><span class="btn btn-secondary py-1 fs-07 mt-2">Add Comment</span></a>
                                    </fieldset>

                                </div>
                                <div class="col-6 col-lg-6 mt-3 steps-summary__right">
                                    <fieldset class="steps-summary__group mb-4">
                                        <legend class="d-flex justify-content-center align-items-center gap-2"><i class="bx bx-paperclip fs-1rem rotate-270"></i> Attached Files <span class="ms-1 circle-number">2</span></legend>
                                        <div class="row p-4 pt-0">
                                            <div class="summary-documents">
                                                <div class="summary-documents__line summary-document-heading border-bottom">
                                                    <div class="summary-document-heading__column">Type</div>
                                                    <div class="summary-document-heading__column">Name</div>
                                                    <div class="summary-document-heading__column">Uploaded</div>
                                                    <div class="summary-document-heading__column"></div>
                                                </div>
                                                <div class="summary-documents__line summary-document border-bottom">
                                                    <span class="changeble-text summary-document__column summary-document__type">Contract</span>
                                                    <select class="form-select summary-documents__line--types" name="summary-field-changeble" style="display:none;">
                                                        <option disabled selected>{{ __('general.select') }}</option>

                                                    </select>
                                                    <div class="summary-document__column summary-document__name">
                                                        <a class="pdf-link changeble-text" data-src="/assets/images/demo/HyresavtalFörLokal.pdf#navpanes=0&zoom=70&view=fit" href="#"><i class='bx bx-file'></i> Lease Agreement</a>
                                                        <input class="form-control mt-1 summary-documents__line--name" type="text" name="summary-field-changeble" value="Lease Agreement" style="display:none;">
                                                    </div>
                                                    <div class="summary-document__column summary-document__date">
                                                        2023-11-29
                                                    </div>
                                                    <div class="summary-document__column summary-document__action">
                                                        <a class="pe-2 attach-send-email" href="#"><i class='bx bx-envelope '></i></a>
                                                         <input type="file" id="file-input" class="hidden-input">
                                                        <a href="#"><i class='bx bx-x color-type-11 border border-color-7'></i></a>
                                                    </div>
                                                </div>
                                                <div class="summary-documents__line summary-document">
                                                    <span class="changeble-text summary-document__column summary-document__type">Appendix</span>
                                                    <select class="form-select summary-documents__line--types" name="summary-field-changeble" style="display:none;">
                                                        <option disabled selected>{{ __('general.select') }}</option>

                                                    </select>
                                                    <div class="summary-document__column summary-document__name">
                                                        <a class="pdf-link changeble-text" data-src="/assets/images/demo/Abonnemangsvillkor.pdf#navpanes=0&zoom=70&view=fit" href="#"><i class='bx bx-file'></i> Abonnemangsvillkor</a>
                                                        <input class="form-control mt-1 summary-documents__line--name" type="text" name="summary-field-changeble" value="Abonnemangsvillkor" style="display:none;">
                                                    </div>
                                                    <div class="summary-document__column summary-document__date">
                                                        2023-11-29
                                                    </div>
                                                    <div class="summary-document__column summary-document__action">
                                                        <!-- <a class="pe-2 attach-send-email" href="#"><i class='bx bx-envelope '></i></a> -->
                                                         <!-- <input type="file" id="file-input" class="hidden-input"> -->
                                                        <a class="pe-2 attach-send-email" href="#" data-email="recipient@example.com"><i class='bx bx-envelope'></i></a>
                                                        <a href="#"><i class='bx bx-x color-type-11 border border-color-7'></i></a>
                                                    </div>
                                                </div>
                                                <div class="summary-documents__line--upload d-flex justify-content-end mt-4">
                                                    <a class="btn btn-secondary py-1 pe-3 d-flex align-items-center gap-0" data-bs-toggle="modal" data-bs-target="#UploadNewFile"><i class='bx bx-plus' ></i> Add File</a>
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
            </div>
        @endsection

    @section("script")
    <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <script src="{{URL::asset('assets/plugins/chartjs/js/chart.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/raphael/raphael-min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/morris/js/morris.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/chartjs/js/chartjs-plugin-datalabels.min.js')}}"></script>
    <script src="assets/js/index.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('.remove-static-demo').on('click', function() {
                $('.static-demo-data').removeClass('d-flex');
                $('.static-demo-data').hide(50);
                $('.static-demo-data-def').show(50);
                $('.remove-static-demo').hide(50);
            });

            $('#status-display').on('click', function() {
                $('#status-select').show();
                $(this).hide();
            });

            $('#status-select').on('change', function() {
                var selectedStatus = $(this).val();
                var $statusDisplay = $('#status-display');

                $statusDisplay.removeClass('status-active status-delete status-archive');

                if (selectedStatus === 'active') {
                    $statusDisplay.addClass('status-active');
                    $statusDisplay.html('<i class="bx bx-check"></i> Active');
                // } else if (selectedStatus === 'delete') {
                //     $statusDisplay.addClass('status-delete');
                //     $statusDisplay.html('<i class="bx bx-x"></i> Delete');
                } else if (selectedStatus === 'archive') {
                    $statusDisplay.addClass('status-archive');
                    $statusDisplay.html('<i class="bx bx-archive"></i> Archive ');
                }

                $(this).hide();
                $statusDisplay.show();
            });

            // Hide the select if clicked outside
            $(document).on('click', function(event) {
                if (!$(event.target).closest('#status-display, #status-select').length) {
                    $('#status-select').hide();
                    $('#status-display').show();
                }
            });
        });
    </script>
    @endsection
