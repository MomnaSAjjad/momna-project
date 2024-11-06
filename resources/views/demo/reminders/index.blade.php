    @extends("layouts.app")
    @section("style")
    <link href="{{URL::asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/fullcalendar/css/main.min.css')}}" rel="stylesheet" />

    @endsection
    
        @section("content")
        <div class="page-wrapper">
                <div class="page-content">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                        <div class="col">
                            <div class="card radius-10 card radius-10 card-bordered">
                                <div class="card-body">
                                    <div class="d-flex align-items-center height-70px">
                                        <div>
                                            <p class="mb-0 font-12 text-upper font-color-11 font-weight-500 font-nunito">Terminations <span class="my-0 mt-2 font-15 font-color-11 font-weight-600 mb-2 text-left ms-2">11</span></p>
                                            <a href="" class="my-0 mt-2 font-12 font-color-11 text-left d-flex hover-scaled mb-2 pt-1">Amount <span class="ps-2">45 000 SEK</span></a>
                                        </div>
                                        <div class="widgets-icons-2 rounded-circle bg-light-red text-white ms-auto border"><i class='bx bx-calendar-x font-color-purple-3 filter-gray'></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card radius-10 card radius-10 card-bordered">
                                <div class="card-body">
                                    <div class="d-flex align-items-center height-70px">
                                        <div>
                                            <p class="mb-0 font-12 text-upper font-color-11 font-weight-500 font-nunito">Evaluate <span class="my-0 mt-2 font-15 font-color-11 font-weight-600 mb-2 text-left ms-2">10</span></p>
                                            <a href="" class="my-0 mt-2 font-12 font-color-11 text-left d-flex hover-scaled mb-2 pt-1">Amount <span class="ps-2">15 000 SEK</span></a>
                                        </div>
                                        <div class="widgets-icons-2 rounded-circle bg-light-yellow text-white ms-auto border">
                                            <img class="w-15rem filter-gray" src="{{URL::asset('assets/images/icons/handshake.svg')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card radius-10 card radius-10 card-bordered">
                                <div class="card-body">
                                    <div class="d-flex align-items-center height-70px">
                                        <div>
                                            <p class="mb-0 font-12 text-upper font-color-11 font-weight-500 font-nunito">Renewals <span class="my-0 mt-2 font-15 font-color-11 font-weight-600 mb-2 text-left ms-2">21</span></p>
                                            <a href="" class="my-0 mt-2 font-12 font-color-11 text-left d-flex hover-scaled mb-2 pt-1">Amount <span class="ps-2">75 000 SEK</span></a>
                                        </div>
                                        <div class="widgets-icons-2 rounded-circle bg-light-green text-white ms-auto border"><i class='bx bx-revision font-color-purple-3 filter-gray'></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="card radius-10 card radius-10 card-bordered">
                                <div class="card-body">
                                    <div class="d-flex align-items-center height-70px">
                                        <div>
                                            <p class="mb-0 font-12 text-upper font-color-11 font-weight-500 font-nunito">Total Reminders <span class="my-0 mt-2 font-15 font-color-11 font-weight-600 mb-2 text-left ms-2">13</span></p>
                                            <a href="" class="my-0 mt-2 font-12 font-color-11 text-left d-flex hover-scaled mb-2 pt-1">Amount <span class="ps-2">135 000 SEK</span></a>
                                        </div>
                                        <div class="widgets-icons-2 rounded-circle bg-light-grey text-white ms-auto border"><i class='bx bx-alarm font-color-purple-3 filter-gray'></i></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="card card-bordered radius-10 wave-analitycs h-380">
                                <div class="card-body">
                                    <div class="d-flex w-100 justify-content-between">
                                        <div class="d-flex align-items-center mt-2 mb-2 w-auto py-4 px-4 ps-2 pe-0 pt-1 mb-0">
                                            <div>
                                                <h6 class="mb-0 font-13 font-color-11 p-relative">Contract Expiring Monthly &nbsp;<span class="font-11">2024</span></h6>
                                            </div>
                                        </div>
                                        <div class="flex-row d-flex gap-4 py-4 px-4 calendars-block__list ps-4 pe-0 pt-1 w-100 align-items-center justify-content-end w-auto">
                                            <div class="d-flex justify-content-center flex-row align-items-center gap-2 mb-0">
                                                <!-- <span >Add to Calendar</span> -->
                                            </div>
                                            <!-- <a class="d-flex justify-content-center flex-row align-items-center gap-3 calendars-block__list--link hover-scaled me-0"><img src="{{URL::asset('assets/images/icons/ms-outlook.svg')}}">Sync to Outlook Calendar</a> -->
                                            <a class="d-flex justify-content-center flex-row align-items-center gap-3 calendars-block__list--link hover-scaled google-calendar ms-0 me-0"><img src="{{URL::asset('assets/images/icons/g-calendar.svg')}}">Sync to Google Calendar</a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="chart-container-1 chart-container-1-1 w-100 mt-2">
                                            <canvas id="chart_reminders"></canvas>
                                            <div class="chart_reminders--monthes">
                                                <i class='bx'></i>
                                                <i class='bx'></i>
                                                <i class='bx'></i>
                                                <i class='bx'></i>
                                                <i class='bx'></i>
                                                <i class='bx'></i>
                                                <i class='bx-active'></i>
                                                <i class='bx'></i>
                                                <i class='bx'></i>
                                                <i class='bx'></i>
                                                <i class='bx'></i>
                                                <i class='bx'></i>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12 d-none">
                           <div class="card no-bg all-contracts">
                                <div class="card-body ps-0 pe-0">
                                    <div class="mb-4 d-flex flex-row justify-content-between">
                                        <div class="d-flex align-items-center gap-4">
                                            <div>
                                                <h6 class="mb-0 font-15 font-color-11">Contracts to Manage</h6>
                                            </div>
                                            <ul class="list-group list-group-flush flex-row">
                                                <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center ps-2 pe-2 border-none pb-0 pt-0">
                                                    <a class="badge border-type-16 btn w-100 font-type-16 font-11 gap-2 justify-content-between pe-3 ps-3 bg-color-16 list-badges active">Terminates <b>6</b></a>
                                                </li>
                                                <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center ps-2 pe-2 border-none pb-0 pt-0">
                                                    <a class="badge border-type-17 btn w-100 font-type-17 font-11 gap-2 justify-content-between pe-3 bg-color-17 list-badges ps-3">Renegotiate <b>4</b></a>
                                                </li>
                                                <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center ps-2 pe-2 border-none pb-0 pt-0">
                                                    <a class="badge border-type-18 btn w-100 font-type-18 font-11 gap-2 justify-content-between bg-color-18 pe-3 list-badges ps-3">Renew <b>2</b></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div><!--end row-->
                <div class="row">
                    <div class="col-12 col-lg-4 analitycs-blocks">
                        <div class="card card-bordered radius-10">
                            <div class="card-body pb-3">
                                <div class="d-flex justify-content-between mb-2 align-items-center mt-0">
                                    <div class="d-flex align-items-center gap-1 ps-2">
                                        <h6 class="mb-0 font-15 font-color-11 d-flex gap-3 justify-content-center align-items-center chart-costs-heading"><span class="chart-costs-heading__title3">Terminate</span></h6>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        <i class='bx bx-calendar fs-1rem font-color-7' ></i>
                                        <select class="form-select fs-07" id="ReminderNoticeDate" aria-label="Currency">
                                            <option disabled selected hidden value="">February</option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="contracts-expiring p-4 pt-1">
                                <div class="contracts-expiring__heading d-flex justify-content-between">
                                    <div class="font-weight-500">Date</div>
                                    <div class="font-weight-500">Contract</div>
                                </div>
                                <div class="contracts-expiring__item">
                                    <div class="d-flex flex-column contracts-expiring__due">
                                        <span><span class="font-color-7">5 days</span></span>
                                        <span>Jan 01, 2024</span>
                                    </div>
                                    <div class="contracts-expiring__name"><a href="/contract/ending/red" class="hover-scaled">Car | Johanna Väst</a></div>
                                </div>
                                <div class="contracts-expiring__item">
                                    <div class="d-flex flex-column contracts-expiring__due">
                                        <span><span class="font-color-7">14 days</span></span>
                                        <span>Jan 20, 2024</span>
                                    </div>
                                    <div class="contracts-expiring__name"><a href="/contract/ending/red" class="hover-scaled">Samsung | John Eriksson</a></div>
                                </div>
                                <div class="contracts-expiring__item">
                                    <div class="d-flex flex-column contracts-expiring__due">
                                        <span><span class="font-color-7">18 days</span></span>
                                        <span>Feb 08, 2024</span>
                                    </div>
                                    <div class="contracts-expiring__name"><a href="/contract/ending/red" class="hover-scaled">Volvo  | Ronny Karlsson</a></div>
                                </div>
                                <div class="contracts-expiring__item">
                                    <div class="d-flex flex-column contracts-expiring__due">
                                        <span><span class="font-color-7">24 days</span></span>
                                        <span>Feb 10, 2024</span>
                                    </div>
                                    <div class="contracts-expiring__name"><a href="/contract/ending/red" class="hover-scaled">Spotify Premium</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 analitycs-blocks">
                        <div class="card card-bordered radius-10">
                            <div class="card-body pb-3">
                                <div class="d-flex justify-content-between mb-2 align-items-center mt-0">
                                    <div class="d-flex align-items-center gap-1 ps-2">
                                        <h6 class="mb-0 font-15 font-color-11 d-flex gap-3 justify-content-center align-items-center chart-costs-heading"><span class="chart-costs-heading__title3">Evaluate</span></h6>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        <i class='bx bx-calendar fs-1rem font-color-6' ></i>
                                        <select class="form-select fs-07" id="ReminderNoticeDate" aria-label="Currency">
                                            <option disabled selected hidden value="">February</option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="contracts-expiring p-4 pt-1">
                                <div class="contracts-expiring__heading d-flex justify-content-between">
                                    <div class="font-weight-500">Date</div>
                                    <div class="font-weight-500">Contract</div>
                                </div>
                                <div class="contracts-expiring__item">
                                    <div class="d-flex flex-column contracts-expiring__due">
                                        <span><span class="font-color-7">5 days</span></span>
                                        <span>Jan 01, 2024</span>
                                    </div>
                                    <div class="contracts-expiring__name"><a href="/contract/ending/red" class="hover-scaled">Car | Johanna Väst</a></div>
                                </div>
                                <div class="contracts-expiring__item">
                                    <div class="d-flex flex-column contracts-expiring__due">
                                        <span><span class="font-color-7">14 days</span></span>
                                        <span>Jan 20, 2024</span>
                                    </div>
                                    <div class="contracts-expiring__name"><a href="/contract/ending/red" class="hover-scaled">Samsung | John Eriksson</a></div>
                                </div>
                                <div class="contracts-expiring__item">
                                    <div class="d-flex flex-column contracts-expiring__due">
                                        <span><span class="font-color-7">17 days</span></span>
                                        <span>Feb 08, 2024</span>
                                    </div>
                                    <div class="contracts-expiring__name"><a href="/contract/ending/red" class="hover-scaled">Volvo  | Ronny Karlsson</a></div>
                                </div>
                                <div class="contracts-expiring__item">
                                    <div class="d-flex flex-column contracts-expiring__due">
                                        <span><span class="font-color-7">25 days</span></span>
                                        <span>Feb 10, 2024</span>
                                    </div>
                                    <div class="contracts-expiring__name"><a href="/contract/ending/red" class="hover-scaled">Spotify Premium</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 analitycs-blocks">
                        <div class="card card-bordered radius-10">
                            <div class="card-body pb-3">
                                <div class="d-flex justify-content-between mb-2 align-items-center mt-0">
                                    <div class="d-flex align-items-center gap-1 ps-2">
                                        <!-- <i class='bx bxs-square-rounded font-color-3 fs-05 opacity-08'></i> -->
                                        <h6 class="mb-0 font-15 font-color-11 d-flex gap-3 justify-content-center align-items-center chart-costs-heading"><span class="chart-costs-heading__title3">Renew</span></h6>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        <i class='bx bx-calendar fs-1rem font-color-3' ></i>
                                        <select class="form-select fs-07" id="ReminderNoticeDate" aria-label="Currency">
                                            <option disabled selected hidden value="">February</option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="contracts-expiring p-4 pt-1">
                                <div class="contracts-expiring__heading d-flex justify-content-between">
                                    <div class="font-weight-500">Date</div>
                                    <div class="font-weight-500">Contract</div>
                                </div>
                                <div class="contracts-expiring__item">
                                    <div class="d-flex flex-column contracts-expiring__due">
                                        <span><span class="font-color-7">5 days</span></span>
                                        <span>Jan 01, 2024</span>
                                    </div>
                                    <div class="contracts-expiring__name"><a href="/contract/ending/red" class="hover-scaled">Car | Johanna Väst</a></div>
                                </div>
                                <div class="contracts-expiring__item">
                                    <div class="d-flex flex-column contracts-expiring__due">
                                        <span><span class="font-color-7">14 days</span></span>
                                        <span>Jan 20, 2024</span>
                                    </div>
                                    <div class="contracts-expiring__name"><a href="/contract/ending/red" class="hover-scaled">Samsung | John Eriksson</a></div>
                                </div>
                                <div class="contracts-expiring__item">
                                    <div class="d-flex flex-column contracts-expiring__due">
                                        <span><span class="font-color-7">24 days</span></span>
                                        <span>Feb 08, 2024</span>
                                    </div>
                                    <div class="contracts-expiring__name"><a href="/contract/ending/red" class="hover-scaled">Volvo  | Ronny Karlsson</a></div>
                                </div>
                                <div class="contracts-expiring__item">
                                    <div class="d-flex flex-column contracts-expiring__due">
                                        <span><span class="font-color-7">30 days</span></span>
                                        <span>Feb 10, 2024</span>
                                    </div>
                                    <div class="contracts-expiring__name"><a href="/contract/ending/red" class="hover-scaled">Spotify Premium</a></div>
                                </div>
                            </div>
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
                            <h5 class="bs-stepper-content__title font-17 font-weight-600 mb-4 w-100">
                                <span class="bs-stepper-content__title--status ps-3"><i class='bx bx-check'></i> Active</span>
                                Rental Agreement - Office | Stockholm
                                <span class="bs-stepper-content__title--note alert closed ps-4">Notice Period Expires in <b>5 days</b></span></h5>
                        </div>


                        <form name="frmSummary" id="frmSummary">
                            <div class="row g-4 steps-summary__row">
                                <div class="col-6 col-lg-6 mt-3 steps-summary__left">
                                    <fieldset class="steps-summary__group mb-4">
                                        <legend class="">Generally</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Folder</span>
                                                <span class="folder-label changeble-text font-type-6 border-type-6 border px-2 py-1 rounded font-type-6 width-fit d-flex fs-07 mt-1">EMPLOYMENT CONTRACTS</span>
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
                                                        @foreach($file_types as $key => $type)
                                                            @if($key != 7)
                                                            <option {{ $type === 'Contract' ? 'selected' : '' }} value="{{ $key }}">{{ $type }}</option>
                                                            @endif
                                                        @endforeach
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
                                                        @foreach($file_types as $key => $type)
                                                            @if($key != 7)
                                                            <option {{ $type === 'Appendix' ? 'selected' : '' }} value="{{ $key }}">{{ $type }}</option>
                                                            @endif
                                                        @endforeach
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


            <div class="modal fade" id="showReminderInfo" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xs">
                    <div class="modal-content rounded-4">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn-close mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card p-4 w-100">
                                <h5 class="text-upper d-flex justify-content-center mb-0">REMINDER ACTION</h5>
                                <div class="d-flex justify-content-center gap-3 mt-4">
                                    <span>You must call this telephone number to terminate this contract <br> <a class="font-17 d-flex justify-content-center mt-3 gap-2" href="callto:+0467980000"><i class='bx bx-phone'></i> 046 798 00 00</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="showReminderInfoEmail" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xs">
                    <div class="modal-content rounded-4">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn-close mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card p-4 w-100">
                                <h5 class="text-upper d-flex justify-content-center mb-0">REMINDER ACTION</h5>
                                <div class="d-flex justify-content-center gap-3 mt-4">
                                    <span>You must send a written email to terminate this contract to <br> <a class="font-17 d-flex justify-content-center mt-3 gap-2" href="mailto:info@support.com "><i class='bx bx-envelope'></i> info@support.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="showReminderInfoLetter" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xs">
                    <div class="modal-content rounded-4">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn-close mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card p-4 w-100">
                                <h5 class="text-upper d-flex justify-content-center mb-0">REMINDER ACTION</h5>
                                <div class="d-flex justify-content-center gap-3 mt-4">
                                    <div>You must send a written letter to this address to terminate this contract <br> 
                                        <span class="font-17 d-flex justify-content-center mt-3 gap-2 flex-column align-items-center">
                                        <p class="mb-0">Företagsnamn AB</p>
                                        <p class="mb-0">Storgatan 55</p>
                                        <p class="mb-0">124 55 Stockholm</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    

    @section("script")

    <script>
    $( document ).ready(function() {
        $(function () {
            $('[data-bs-toggle="popover-responsible"]').popover({ placement: 'bottom', trigger: 'hover' });
            $('[data-bs-toggle="popover"]').popover({ placement: 'bottom', trigger: 'hover' });
            $('[data-bs-toggle="tooltip"]').tooltip();
        });
        $('[data-bs-toggle="popover"]').click(function(){
        });
    });
    </script>

    <!-- Vector map JavaScript -->
    <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <script src="{{URL::asset('assets/plugins/chartjs/js/chart.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/chartjs/js/chartjs-plugin-datalabels.min.js')}}"></script>
    <script src="assets/js/index.js"></script>
    <script type="text/javascript">
        var chart_reminders = document.getElementById("chart_reminders");
          if(chart_reminders != null){
          chart_reminders = chart_reminders.getContext('2d');
          var color1 = '#EB6363';
          var color2 = '#fba26f';
          var color3 = '#1CB079';
          var myChart = new Chart(chart_reminders, {
            type: 'bar',
            data: {
              labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
              datasets: [{
                label: 'Terminate',
                data: [1, 2, 0, 1,4, 0, 0, 1,1, 0,1, 0],
                borderColor: color1,
                borderWidth: 2,
                // borderWidth: {
                //   top: 0,
                //   left: 1,
                //   right: 1
                // }
                backgroundColor: '#e93b3b61',
                hoverBackgroundColor: color1,
                pointRadius: 0,
                fill: false,
                borderRadius: 1,
                // borderWidth: 0
              },{
                label: 'Evaluate',
                data: [0, 0, 1, 4,2, 0, 2, 4,0, 0,0, 1],
                borderColor: color2,
                backgroundColor: '#fba26f80',
                hoverBackgroundColor: color2,
                pointRadius: 0,
                fill: false,
                borderRadius: 0,
                borderWidth: 2
              },{
                label: 'Renew',
                data: [3, 2, 0, 3,0, 0, 4, 0,2, 1, 4,2],
                borderColor: color3,
                backgroundColor: '#1db07975',
                hoverBackgroundColor: color3,
                pointRadius: 0,
                fill: false,
                borderRadius: 0,
                borderWidth: 2
              }
              ]
            },

            options: {
              maintainAspectRatio: false,
              barPercentage: 0.8,
              categoryPercentage: 0.92,
              plugins: {
                legend: {
                  labels: {
                    boxHeight: 5,
                    boxWidth: 5
                  },
                  display: false,
                },
                datalabels: {
                  anchor: 'end',
                  align: 'top',
                  formatter: function(value, context) {
                    Math.round;
                    var title = value.toLocaleString().replaceAll(',',' ');
                    var title_to_publish = title;
                    if(title_to_publish == '0'){title_to_publish = '';}
                        return title_to_publish
                    },  
                  font: {
                  }
                },
              },
              scales: {
                x: {
                  grid: {
                    // display: false
                  }
                },
                y: {
                  beginAtZero: true,
                  grace: '3%',
                  ticks: {
                    // forces step size to be 50 units
                    stepSize: 1,
                    display: false, //this will remove only the label

                  },
                  grid: {
                    // display: false
                  }
                }
              },


              layout: {
                padding: {
                  // top: 5
                }
              },

            },
            plugins: [ChartDataLabels],

          });
        }
    </script>
    @endsection 