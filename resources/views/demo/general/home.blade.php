    @extends("layouts.app")
    @section("style")
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="assets/plugins/highcharts/css/highcharts-white.css" rel="stylesheet" />
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
                                            <p class="mb-0 font-12 text-upper font-color-11 font-weight-500 font-nunito">{{ __('general.pills.active') }} <span class="my-0 mt-2 font-15 font-color-11 font-weight-600 mb-2 text-left ms-2">42</span></p>
                                            <a href="" class="my-0 mt-2 font-12 font-color-11 text-left d-flex hover-scaled mb-2 pt-1">{{ __('general.view_all') }}</a>
                                        </div>
                                        <div class="widgets-icons-2 rounded-circle bg-light-green text-white ms-auto border">
                                            <i class='font-color-purple-3 bx bx-file filter-gray'></i>
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
                                            <p class="mb-0 font-12 text-upper font-color-11 font-weight-500 font-nunito">{{ __('general.pills.alert') }} <span class="my-0 mt-2 font-15 font-color-11 font-weight-600 mb-2 text-left ms-2">3</span></p>
                                            <a href="" class="my-0 mt-2 font-12 font-color-11 text-left d-flex hover-scaled mb-2 pt-1">{{ __('general.view_all') }}</a>
                                        </div>
                                        <div class="widgets-icons-2 rounded-circle text-white ms-auto border">
                                            <div class="widgets-icons-2 rounded-circle bg-light-red text-white ms-auto border"><i class="bx bx-error font-color-purple-3 filter-gray"></i>
                                            </div>
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
                                            <p class="mb-0 font-12 text-upper font-color-11 font-weight-500 font-nunito">{{ __('general.pills.overdue') }} <span class="my-0 mt-2 font-15 font-color-11 font-weight-600 mb-2 text-left ms-2">1</span></p>
                                            <a href="" class="my-0 mt-2 font-12 font-color-11 text-left d-flex hover-scaled mb-2 pt-1">{{ __('general.view_all') }}</a>
                                        </div>
                                        <div class="widgets-icons-2 rounded-circle text-white ms-auto border">
                                            <div class="widgets-icons-2 rounded-circle bg-light-yellow text-white ms-auto border"><i class='bx bx-time-five font-color-purple-3 filter-gray'></i>
                                            </div>
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
                                            <p class="mb-0 font-12 text-upper font-color-11 font-weight-500 font-nunito">{{ __('general.pills.archived') }} <span class="my-0 mt-2 font-15 font-color-11 font-weight-600 mb-2 text-left ms-2">2</span></p>
                                            <a href="" class="my-0 mt-2 font-12 font-color-11 text-left d-flex hover-scaled mb-2 pt-1">{{ __('general.view_all') }}</a>
                                        </div>
                                        <div class="widgets-icons-2 rounded-circle text-white ms-auto border">
                                            <div class="widgets-icons-2 rounded-circle bg-light-grey text-white ms-auto border"><i class="bx bx-archive font-color-purple-3 filter-gray"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col">
                            <div class="card radius-10 card radius-10 card-bordered">
                                <div class="card-body">
                                    <div class="d-flex align-items-center height-70px">
                                        <div>
                                            <p class="mb-0 font-12 text-upper font-color-11 font-weight-500 font-nunito">Contract income</p>
                                            <h5 class="my-0 mt-2 font-15 font-color-11 font-weight-600 mb-2 text-left">0 SEK</h5>
                                        </div>
                                        <div class="widgets-icons-2 rounded-circle bg-light-purple-3 text-white ms-auto border"><i class='bx bxs-up-arrow-alt font-color-4'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col">
                            <div class="card radius-10 card radius-10 card-bordered">
                                <div class="card-body">
                                    <div class="d-flex align-items-center height-70px">
                                        <div>
                                            <p class="mb-0 font-12 text-upper font-color-11 font-weight-500 font-nunito">Fixed costs</p>
                                            <h5 class="my-0 mt-2 font-15 font-color-11 font-weight-600 mb-2 text-left">473 000 SEK</h5>
                                        </div>
                                        <div class="widgets-icons-2 rounded-circle bg-light-purple-3 text-white ms-auto border"><i class='bx bxs-down-arrow-alt font-color-purple-3 filter-gray' ></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div><!--end row-->
                    

                    <div class="row">
                        <div class="col-12 col-lg-12 analitycs-blocks contracts-folders">
                            <div class="card card-bordered radius-10 pb-4">
                                <div class="card-body pb-3">
                                    <div class="d-flex align-items-center mb-2 mt-2 justify-content-between">
                                        <div>
                                            <h6 class="mb-0 font-13 font-color-11 d-flex gap-3 justify-content-center align-items-center chart-costs-heading"><span class="chart-costs-heading__title2">Total 42 Contracts in 15 Folders</span></h6>
                                        </div>
                                        <div class="contracts-folders__change-folders font-color-11">
                                            <a class="font-color-11"><i class='bx bx-edit-alt'></i> Edit Folders</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="contracts-folders__wrapper">
                                    <a class="contracts-folders__wrapper--item hover-scaled contracts-folders__popover"><div class="contracts-folders__wrapper--folder"><div data-bs-toggle="popover" data-bs-content="You have no access!" data-bs-trigger="click" class='folder-icon bg-type-1'></div><span><i class='bx bx-lock-alt font-type-1' ></i></span><div class="contracts-folders__wrapper--title">Employment Contracts</div></div></a>
                                    <a class="contracts-folders__wrapper--item hover-scaled contracts-folders__popover"><div class="contracts-folders__wrapper--folder"><div data-bs-toggle="popover" data-bs-content="You have no access!" data-bs-trigger="click"  class='folder-icon bg-type-2'></div><span><i class='bx bx-lock-alt font-type-2' ></i></span><div class="contracts-folders__wrapper--title">HR</div></div></a>
                                    <a href="/contract/list" class="contracts-folders__wrapper--item hover-scaled"><div class="contracts-folders__wrapper--folder"><div class='folder-icon bg-type-3'></div><span class="font-type-3">14</span><div class="contracts-folders__wrapper--title">Subscriptions</div></div></a>
                                    <a href="/contract/list" class="contracts-folders__wrapper--item hover-scaled"><div class="contracts-folders__wrapper--folder"><div class='folder-icon bg-type-4'></div><span class="font-type-4">3</span><div class="contracts-folders__wrapper--title">Service Agreements</div></div></a>
                                    <a href="/contract/list" class="contracts-folders__wrapper--item hover-scaled"><div class="contracts-folders__wrapper--folder"><div class='folder-icon bg-type-5'></div><span class="font-type-5">2</span><div class="contracts-folders__wrapper--title">Company Cars</div></div></a>
                                    <a href="/contract/list" class="contracts-folders__wrapper--item hover-scaled"><div class="contracts-folders__wrapper--folder"><div class='folder-icon bg-type-6'></div><span class="font-type-6">0</span><div class="contracts-folders__wrapper--title">Office</div></div></a>
                                    <a href="/contract/list" class="contracts-folders__wrapper--item hover-scaled"><div class="contracts-folders__wrapper--folder"><div class='folder-icon bg-type-7'></div><span class="font-type-7">4</span><div class="contracts-folders__wrapper--title">Suppliers</div></div></a>
                                    <a href="/contract/list" class="contracts-folders__wrapper--item hover-scaled"><div class="contracts-folders__wrapper--folder"><div class='folder-icon bg-type-8'></div><span class="font-type-8">0</span><div class="contracts-folders__wrapper--title">IT</div></div></a>
                                    <a href="/contract/list" class="contracts-folders__wrapper--item hover-scaled"><div class="contracts-folders__wrapper--folder"><div class='folder-icon bg-type-9'></div><span class="font-type-9">4</span><div class="contracts-folders__wrapper--title">Loans</div></div></a>
                                    <a href="/contract/list" class="contracts-folders__wrapper--item hover-scaled"><div class="contracts-folders__wrapper--folder"><div class='folder-icon bg-type-10'></div><span class="font-type-10">0</span><div class="contracts-folders__wrapper--title">Leasing</div></div></a>
                                    <a href="/contract/list" class="contracts-folders__wrapper--item hover-scaled"><div class="contracts-folders__wrapper--folder"><div class='folder-icon bg-type-11'></div><span class="font-type-11">2</span><div class="contracts-folders__wrapper--title">Customer Agreements</div></div></a>
                                    <a href="/contract/list" class="contracts-folders__wrapper--item hover-scaled"><div class="contracts-folders__wrapper--folder"><div class='folder-icon bg-type-12'></div><span class="font-type-12">0</span><div class="contracts-folders__wrapper--title">Insurances</div></div></a>
                                    <a href="/contract/list" class="contracts-folders__wrapper--item hover-scaled"><div class="contracts-folders__wrapper--folder"><div class='folder-icon bg-type-13'></div><span class="font-type-13">1</span><div class="contracts-folders__wrapper--title">NDA</div></div></a>
                                    <a href="/contract/list" class="contracts-folders__wrapper--item hover-scaled"><div class="contracts-folders__wrapper--folder"><div class='folder-icon bg-type-14'></div><span class="font-type-14">3</span><div class="contracts-folders__wrapper--title">Licenses</div></div></a>
                                    <a href="/contract/list" class="contracts-folders__wrapper--item hover-scaled"><div class="contracts-folders__wrapper--folder"><div class="folder-icon bg-type-15"></div><span class="font-type-15">2</span><div class="contracts-folders__wrapper--title">Cooperation Agreements</div></div></a>
                                    <!-- <a href="#" class="contracts-folders__wrapper--item hover-scaled"><div class="contracts-folders__wrapper--folder"><div class="folder-document color-type-16"></div><span class="">2</span><div class="contracts-folders__wrapper--title font-color-7">Saved Drafts</div></div></a> -->
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-12 col-lg-12 analitycs-blocks d-none">
                            <div class="card card-bordered radius-10 pb-4">
                                <div class="card-body pb-3">
                                    <div class="d-flex align-items-center mb-2 mt-2">
                                        <h6 class="mb-0 font-13 font-color-11 mb-2 d-flex gap-3 justify-content-between align-items-center chart-costs-heading w-100"><span class="chart-costs-heading__title3">Notice Period Expires</span> 
                                        </h6>
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
                                            <span>2024-07-12</span>
                                        </div>
                                        <div class="contracts-expiring__name"><a data-bs-toggle="modal" data-bs-target="#RemindersPopup" class="hover-scaled">Car | Johanna Väst</a></div>
                                    </div>
                                    <div class="contracts-expiring__item">
                                        <div class="d-flex flex-column contracts-expiring__due">
                                            <span><span class="font-color-7">14 days</span></span>
                                            <span>2024-07-29</span>
                                        </div>
                                        <div class="contracts-expiring__name"><a data-bs-toggle="modal" data-bs-target="#RemindersPopup" class="hover-scaled">Samsung | John Eriksson</a></div>
                                    </div>
                                    <div class="contracts-expiring__item">
                                        <div class="d-flex flex-column contracts-expiring__due">
                                            <span><span class="font-color-7">18 days</span></span>
                                            <span>2024-08-02</span>
                                        </div>
                                        <div class="contracts-expiring__name"><a data-bs-toggle="modal" data-bs-target="#RemindersPopup" class="hover-scaled">Volvo  | Ronny Karlsson</a></div>
                                    </div>
                                    <div class="contracts-expiring__item">
                                        <div class="d-flex flex-column contracts-expiring__due">
                                            <span><span class="font-color-7">24 days</span></span>
                                            <span>2024-08-12</span>
                                        </div>
                                        <div class="contracts-expiring__name"><a data-bs-toggle="modal" data-bs-target="#RemindersPopup" class="hover-scaled">Spotify Premium</a></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-12 col-lg-12">
                            <div class="card card-bordered radius-10 pb-3">
                                <div class="card-body pb-3">
                                    <div class="d-flex align-items-center mb-4 mt-2">
                                        <h6 class="mb-0 font-13 font-color-11 mb-2 d-flex gap-3 justify-content-between align-items-center chart-costs-heading w-100"><span class="chart-costs-heading__title3">Notice Period Expiring in Next 30 Days</span> 
                                        </h6>
                                    </div>
                                    <div class="table-responsive bordered bg-warn">
                                        <table class="table mb-0 table-striped contracts-list-table">
                                            <thead class="table-dark bg-warn">
                                                <tr>
                                                    <th class="text-left">{{ __('general.expires_table.folder') }}</th>
                                                    <th class="text-left">{{ __('general.expires_table.type') }}</th>
                                                    <th class="text-left">{{ __('general.expires_table.counterparty') }}</th>
                                                    <th class="text-left">{{ __('general.expires_table.contract') }}</th>
                                                    <th class="text-left">{{ __('general.expires_table.notice_period') }}</th>
                                                    <th class="text-left">{{ __('general.expires_table.contract_manager') }}</th>
                                                    <th class="text-left">{{ __('general.expires_table.amount') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-left"><span class="border-type-5 border px-2 py-40 rounded font-type-5">Company Cars</span></td>
                                                    <td class="text-left">Leasing</td>
                                                    <td class="text-left">Volvo Finans</td>
                                                    <!-- <td class="text-left"><a data-bs-toggle="modal" data-bs-target="#RemindersPopup" class="hover-scaled gap-2"><i class='bx bx-file-blank'></i> Car | Johanna Väst</a></td> -->
                                                    <td class="text-left"><a href="/contract/ending/red" class="hover-scaled gap-2"><i class='bx bx-file-blank'></i> Car | Johanna Väst</a></td>
                                                    <td class="text-left">
                                                        <div class="d-flex flex-column contracts-expiring__due">
                                                            <span><span class="font-color-7 mb-1">5 days</span></span>
                                                            <span>June 12, 2024</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-left">Martina Falk</td>
                                                    <td class="text-left"><div class="d-flex justify-content-start align-items-center gap-1 font-color-7"><span class="costs">4 850 SEK</span></div></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left"><span class="border-type-8 border px-2 py-40 rounded font-type-8">IT</span></td>
                                                    <td class="text-left">Cloud Services</td>
                                                    <td class="text-left">Amazon Web</td>
                                                    <td class="text-left"><a href="/contract/ending/red" class="hover-scaled gap-2"><i class='bx bx-file-blank'></i> Servers</a></td>
                                                    <td class="text-left">
                                                        <div class="d-flex flex-column contracts-expiring__due">
                                                            <span><span class="font-color-7 mb-1">14 days</span></span>
                                                            <span>June 21, 2024</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-left">Daniel Andersson</td>
                                                    <td class="text-left"><div class="d-flex justify-content-start align-items-center gap-1 font-color-7"><span class="costs">399 USD</span></div></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left"><span class="border-type-6 border px-2 py-40 rounded font-type-6">Office</span></td>
                                                    <td class="text-left">Rental Agreement</td>
                                                    <td class="text-left">Fastigheter AB</td>
                                                    <td class="text-left"><a href="/contract/ending/red" class="hover-scaled gap-2"><i class='bx bx-file-blank'></i> Office | Stockholm</a></td>
                                                    <td class="text-left">
                                                        <div class="d-flex flex-column contracts-expiring__due">
                                                            <span><span class="font-color-7 mb-1">18 days</span></span>
                                                            <span>June 25, 2024</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-left">David Karlsson</td>
                                                    <td class="text-left"><div class="d-flex justify-content-start align-items-center gap-1 font-color-7"><span class="costs">17 500 SEK</span></div></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12 analitycs-blocks">
                            <div class="card card-bordered radius-10 wave-analitycs">
                                <!-- <div class="card-body">
                                    <div id="chartCosts" class="h-100"></div>
                                </div> -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-2 mt-2">
                                        <div>
                                            <div class="mb-0 font-13 font-color-11 mb-2 d-flex gap-3 justify-content-center align-items-center chart-costs-heading">
                                                <h6 class="font-13 font-color-11 mb-0">{{ __('general.costs_income_overview') }}</h6>
                                                <!-- <span class="d-flex badge costs-income-total __costs font-color-7 h-24 fs-08"><div class="costs-income-total__costs">473 000 SEK</div><div class="costs-income-total__income">0 SEK</div></span> -->
                                            </div>
                                        </div>
                                        <div class="ms-auto d-flex gap-4 analitycs-blocks__range align-items-center">
                                            <select class="form-select" id="CostOrIncome" aria-label="">
                                                <option value="1" selected>Total</option>
                                                <option value="2">Month</option>
                                                <option value="3">Quarter</option>
                                                <option value="4">Year</option>
                                                <option value="5">One Time</option>
                                            </select>

                                            <span class="d-flex badge costs-income-total __costs font-color-7 h-24 fs-08"><div class="costs-income-total__costs">473 000 SEK</div><div class="costs-income-total__income">0 SEK</div></span>

                                            <div class="dt-buttons">
                                                <button class="btn btn-outline-secondary buttons-html5 actives chart-costs dt-buttons__costs" tabindex="0" aria-controls="costs" type="button">
                                                    <span>Costs</span>
                                                </button> 
                                                <button class="btn btn-outline-secondary buttons-html5 chart-costs dt-buttons__income" tabindex="1" aria-controls="income" type="button">
                                                    <span>Income</span>
                                                </button> 
                                                <!-- <button class="btn btn-outline-secondary buttons-html5 chart-costs chart-costs-annually" tabindex="2" aria-controls="annually" type="button">
                                                    <span>Annually</span>
                                                </button>  -->
                                               <!--  <button class="btn btn-outline-secondary buttons-html5 chart-costs chart-costs-hybrid" tabindex="2" aria-controls="hybrid" type="button">
                                                    <span>Hybrid</span>
                                                </button> 
                                                <button class="btn btn-outline-secondary buttons-html5 chart-costs chart-costs-variable" tabindex="2" aria-controls="variable" type="button">
                                                    <span>Variable</span>
                                                </button>  -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="analitycs-blocks__wrapper costs" id="scrollable-costs-wrapper">
                                        <!-- <div class="analitycs-blocks__item"><div class="analitycs-blocks__item--numbers">4 <span>ST</span></div><div class="analitycs-blocks__item--bar border-type-1"><i class='bx bx-briefcase'></i></div><div class="analitycs-blocks__item--title">Employments</div></div> -->
                                        <div class="analitycs-blocks__item"><div class="analitycs-blocks__item--numbers locked"><div class="analitycs-numbers__costs"><i class='bx bx-lock-alt font-16' ></i></div><div class="analitycs-numbers__income"><i class='bx bx-lock-alt font-16' ></i></div></div><div class="analitycs-blocks__item--bar border-type-15"><i class="bx bx-briefcase font-type-1 fs-2"></i></div><div class="analitycs-blocks__item--title">Employment Contracts</div></div>
                                        <div class="analitycs-blocks__item"><div class="analitycs-blocks__item--numbers locked"><div class="analitycs-numbers__costs"><i class='bx bx-lock-alt font-16' ></i></div><div class="analitycs-numbers__income"><i class='bx bx-lock-alt font-16' ></i></div></div><div class="analitycs-blocks__item--bar border-type-2"><img src="{{URL::asset('assets/images/icons/types/people-color.svg')}}"></div><div class="analitycs-blocks__item--title">HR</div></div>
                                        <div class="analitycs-blocks__item"><div class="analitycs-blocks__item--numbers"><div class="analitycs-numbers__costs">40 000</div><div class="analitycs-numbers__income">0</div>  <span>SEK</span></div><div class="analitycs-blocks__item--bar border-type-3"><img src="{{URL::asset('assets/images/icons/types/rss-color.svg')}}"></div><div class="analitycs-blocks__item--title">Subscriptions</div></div>
                                        <div class="analitycs-blocks__item"><div class="analitycs-blocks__item--numbers"><div class="analitycs-numbers__costs">120 000</div><div class="analitycs-numbers__income">0</div>  <span>SEK</span></div><div class="analitycs-blocks__item--bar border-type-4"><img src="{{URL::asset('assets/images/icons/types/shaking-hands-color.svg')}}"></div><div class="analitycs-blocks__item--title">Service Agreements</div></div>
                                        <div class="analitycs-blocks__item"><div class="analitycs-blocks__item--numbers"><div class="analitycs-numbers__costs">250 000</div><div class="analitycs-numbers__income">0</div>  <span>SEK</span></div><div class="analitycs-blocks__item--bar border-type-5"><img src="{{URL::asset('assets/images/icons/types/car-vehicle-transport-color.svg')}}"></div><div class="analitycs-blocks__item--title">Company Cars</div></div>
                                        <div class="analitycs-blocks__item"><div class="analitycs-blocks__item--numbers"><div class="analitycs-numbers__costs">0</div><div class="analitycs-numbers__income">0</div>  <span>SEK</span></div><div class="analitycs-blocks__item--bar border-type-6"><img src="{{URL::asset('assets/images/icons/types/house-color.svg')}}"></div><div class="analitycs-blocks__item--title">Office</div></div>
                                        <div class="analitycs-blocks__item"><div class="analitycs-blocks__item--numbers"><div class="analitycs-numbers__costs">14 500</div><div class="analitycs-numbers__income">0</div>  <span>SEK</span></div><div class="analitycs-blocks__item--bar border-type-7"><img src="{{URL::asset('assets/images/icons/types/delivery-color.svg')}}"></div><div class="analitycs-blocks__item--title">Suppliers</div></div>

                                        <div class="analitycs-blocks__item"><div class="analitycs-blocks__item--numbers"><div class="analitycs-numbers__costs">0</div><div class="analitycs-numbers__income">0</div>  <span>SEK</span></div><div class="analitycs-blocks__item--bar border-type-16"><img src="{{URL::asset('assets/images/icons/types/network-wired-color.svg')}}"></div><div class="analitycs-blocks__item--title">IT</div></div>



                                        <div class="analitycs-blocks__item"><div class="analitycs-blocks__item--numbers"><div class="analitycs-numbers__costs">9 000</div><div class="analitycs-numbers__income">0</div>  <span>SEK</span></div><div class="analitycs-blocks__item--bar border-type-9"><img src="{{URL::asset('assets/images/icons/types/coins-color.svg')}}"></div><div class="analitycs-blocks__item--title">Loans</div></div>
                                        <div class="analitycs-blocks__item"><div class="analitycs-blocks__item--numbers"><div class="analitycs-numbers__costs">0</div><div class="analitycs-numbers__income">0</div>  <span>SEK</span></div><div class="analitycs-blocks__item--bar border-type-10"><img src="{{URL::asset('assets/images/icons/types/accept-agreement-color.svg')}}"></div><div class="analitycs-blocks__item--title">Leasing</div></div>
                                        <!-- <div class="analitycs-blocks__item"><div class="analitycs-blocks__item--numbers">1 000 <span>SEK</span></div><div class="analitycs-blocks__item--bar border-type-11"><img src="{{URL::asset('assets/images/icons/types/office-trophy-color.svg')}}"></div><div class="analitycs-blocks__item--title">Customer Contracts</div></div> -->
                                        <div class="analitycs-blocks__item"><div class="analitycs-blocks__item--numbers"><div class="analitycs-numbers__costs">0</div><div class="analitycs-numbers__income">0</div>  <span>SEK</span></div><div class="analitycs-blocks__item--bar border-type-12"><img src="{{URL::asset('assets/images/icons/types/health-care-color.svg')}}"></div><div class="analitycs-blocks__item--title">Insurances</div></div>
                                        <!-- <div class="analitycs-blocks__item"><div class="analitycs-blocks__item--numbers">1 <span>ST</span></div><div class="analitycs-blocks__item--bar border-type-13"></div><div class="analitycs-blocks__item--title">NDA</div></div> -->
                                        <div class="analitycs-blocks__item"><div class="analitycs-blocks__item--numbers"><div class="analitycs-numbers__costs">9 500</div><div class="analitycs-numbers__income">0</div>  <span>SEK</span></div><div class="analitycs-blocks__item--bar border-type-14"><img src="{{URL::asset('assets/images/icons/types/license-color.svg')}}"></div><div class="analitycs-blocks__item--title">Licenses</div></div>
                                        <div class="analitycs-blocks__item"><div class="analitycs-blocks__item--numbers"><div class="analitycs-numbers__costs">0</div><div class="analitycs-numbers__income">9 000</div>  <span>SEK</span></div><div class="analitycs-blocks__item--bar border-type-3"><img src="{{URL::asset('assets/images/icons/types/office-trophy-color.svg')}}"></div><div class="analitycs-blocks__item--title">Customer Agreements</div></div>
                                        <div class="analitycs-blocks__item"><div class="analitycs-blocks__item--numbers"><div class="analitycs-numbers__costs">30 000</div><div class="analitycs-numbers__income">0</div>  <span>SEK</span></div><div class="analitycs-blocks__item--bar border-type-15"><i class="bx bx-file font-type-15 fs-2"></i></div><div class="analitycs-blocks__item--title">Cooperation Agreements</div></div>
                                    </div>
                                    <div class="scroll-hint scroll-right"><i class='bx bx-chevron-right'></i></div>
                                    <div class="scroll-hint scroll-left" style="display: none;"><i class='bx bx-chevron-left'></i></div>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->

                    


                    <div class="card no-bg radius-10 recent-list" style="display: none!important">
                        <div class="card-body pe-0 ps-0">
                            <div class="d-flex align-items-center gap-4 mb-4 mt-4">
                                <div>
                                    <h6 class="mb-0 font-15 font-color-11">Categories</h6>
                                </div>
                                <ul class="list-group list-group-flush flex-row">
                                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center ps-2 pe-2 border-none pb-0 pt-0">
                                        <a class="badge border-type-3 btn w-100 font-type-3 font-11 gap-2 justify-content-between pe-3 ps-3 bg-color-3 list-badges active">Subscriptions <b>14</b></a>
                                    </li>
                                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center ps-2 pe-2 border-none pb-0 pt-0">
                                        <a class="badge border-type-8 btn w-100 font-type-8 font-11 gap-2 justify-content-between pe-3 ps-3 bg-color-8 list-badges">IT <b>11</b></a>
                                    </li>
                                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center ps-2 pe-2 border-none pb-0 pt-0">
                                        <a class="badge border-type-10 btn w-100 font-type-10 font-11 gap-2 justify-content-between pe-3 ps-3 bg-color-10 list-badges ">Leasing <b>10</b></a>
                                    </li>
                                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center ps-2 pe-2 border-none pb-0 pt-0">
                                        <a class="badge border-type-6 btn w-100 font-type-6 font-11 gap-2 justify-content-between pe-3 ps-3 bg-color-6 list-badges ">Office <b>6</b></a>
                                    </li>
                                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center ps-2 pe-2 border-none pb-0 pt-0">
                                        <a class="badge border-type-1 btn w-100 font-type-1 font-11 gap-2 justify-content-between pe-3 ps-3 bg-color-1 list-badges ">Employments <b>5</b></a>
                                    </li>
                                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center ps-2 pe-2 border-none pb-0 pt-0">
                                        <a class="badge border-type-2 btn w-100 font-type-2 font-11 gap-2 justify-content-between pe-3 ps-3 bg-color-2 list-badges ">HR <b>4</b></a>
                                    </li>
                                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center ps-2 pe-2 border-none pb-0 pt-0">
                                        <a class="badge border-type-5 btn w-100 font-type-5 font-11 gap-2 justify-content-between pe-3 ps-3 bg-color-5 list-badges ">Company Car <b>2</b></a>
                                    </li>
                                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center ps-2 pe-2 border-none pb-0 pt-0">
                                        <a class="badge border-type-4 btn w-100 font-type-4 font-11 gap-2 justify-content-between pe-3 ps-3 bg-color-4 list-badges ">Service Agreements <b>3</b></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-middle mb-0 table-striped">
                                    <thead class="table-dark">
                                    <tr>
                                        <th width="14%" class="text-left ps-45">Contract Type</th>
                                        <th width="16%" class="text-left px-3">Contract Name</th>
                                        <!-- <th width="12%" class="text-left">Contract Start</th> -->
                                        <th width="12%" class="text-left">Notice Period</th>
                                        <th width="11%" class="text-left">Contract Expires</th>
                                        <th width="7%" class="text-center pe-4">Amount</th>
                                        <th width="12%" class="text-center">Payment Period</th>
                                        <th width="9%" class="text-left">Contract Owner</th>
                                    </tr>
                                    </thead>
                                    <tbody><tr>
                                        <td class="text-left ps-45">Rental Agreement</td>
                                        <td class="text-left px-3"><a data-bs-toggle="modal" data-bs-target="#RemindersPopup" class="gap-2"><i class='bx bx-file-blank' ></i> Office | Stockholm</a></td>
                                        <!-- <td class="text-left">01 Sep 2023</td> -->
                                        <td class="text-left">
                                            <div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                <a class="ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Notice Period Expires in <b class='font-2 font-13'>115 days</b></div>" aria-describedby="tooltip">
                                                    <i class='bx bx-time-five'></i> 1 Month
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-left"><div class="d-flex justify-content-start align-items-center gap-2">
                                            <div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                <a class="ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Auto Renewal <b class='font-2 font-13'>( Yes )</b></div>" aria-describedby="tooltip">
                                                    <i class='bx bxs-flag-alt'></i> 10 Jan 2024
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-left ps-0"><div class="d-flex justify-content-center align-items-center gap-1 font-color-7"><span class="price-container costs">23 000 SEK</span></div></td>
                                        <td class="text-center"><div class="d-flex justify-content-center align-items-center">
											<a class="font-color-gray ps-0 pe-0 d-flex gap-1" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Fixed Monthly Price</div>" aria-describedby="tooltip">Monthly</a>
											</div>
										</td>
                                        <td class="text-left">
                                            <a class="font-color-gray ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'><i class='bx bx-envelope' ></i> Email | <i class='bx bx-phone' ></i> Telephone</div>" aria-describedby="tooltip"><i class='bx bx-user'></i> Daniel Lindholm</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left ps-45">Leasing</td>
                                        <td class="text-left px-3"><a data-bs-toggle="modal" data-bs-target="#RemindersPopup" class="gap-2"><i class='bx bx-file-blank' ></i> Car | Johanna Väst</a></td>
                                        <!-- <td class="text-left">05 Sep 2023</td> -->
                                        <td class="text-left">
                                            <div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                <a class="ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Notice Period Expires in <b class='font-2 font-13'>117 days</b></div>" aria-describedby="tooltip">
                                                    <i class='bx bx-time-five'></i> 1 Month
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-left">
                                            <div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                <a class="ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Auto Renewal <b class='font-2 font-13'>( Yes )</b></div>" aria-describedby="tooltip">
                                                    <i class='bx bxs-flag-alt'></i> 01 Jan 2024
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-left ps-0"><div class="d-flex justify-content-center align-items-center gap-1 font-color-7"><span class="price-container">8 500 SEK</span></div></td>
                                        <td class="text-center"><div class="d-flex justify-content-center align-items-center">
											<a class="font-color-gray ps-0 pe-0 d-flex gap-1" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Annual Price</div>" aria-describedby="tooltip">Annually</a>
											</div>
										</td>
                                        <td class="text-left">
                                            <a class="font-color-gray ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'><i class='bx bx-envelope' ></i> Email | <i class='bx bx-phone' ></i> Telephone</div>" aria-describedby="tooltip"><i class='bx bx-user'></i> Viktor Borg</a>
                                        </td>
                                    </tr>
                                    <tr class="clickable" data-bs-toggle="collapse" id="row1" data-bs-target=".row1">
                                        <td class="text-left ps-45 p-relative"><a class="more-items hover-scaled"><i class='bx bx-plus'></i></a> Mobile Phone</td>
                                        <td class="text-left px-3"><a data-bs-toggle="modal" data-bs-target="#RemindersPopup" class="gap-2"><i class='bx bx-file-blank' ></i> Samsung | Johan Nilsson</a></td>
                                        <!-- <td class="text-left">22 Aug 2023</td> -->
                                        <td class="text-left">
                                            <div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                <a class="ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Notice Period Expires in <b class='font-2 font-13'>119 days</b></div>" aria-describedby="tooltip">
                                                    <i class='bx bx-time-five'></i> 2 Months
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-left">
                                            <div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                <a class="ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Auto Renewal <b class='font-2 font-13'>( No )</b></div>" aria-describedby="tooltip">
                                                    <i class='bx bxs-flag-alt'></i> 01 Mar 2024
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-left ps-0"><div class="d-flex justify-content-center align-items-center gap-1 font-color-7"><span class="price-container">299 SEK</span></div></td>
                                        <td class="text-center"><div class="d-flex justify-content-center align-items-center">
                                            <a class="font-color-gray ps-0 pe-0 d-flex gap-1" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Variable Monthly Price</div>" aria-describedby="tooltip">Variable</a>
                                            </div>
                                        </td>
                                        <td class="text-left">
                                            <a class="font-color-gray ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'><i class='bx bx-envelope' ></i> Email | <i class='bx bx-phone' ></i> Telephone</div>" aria-describedby="tooltip"><i class='bx bx-user'></i> Åsa Holmgren</a>
                                        </td>
                                    </tr>

                                    <tr class="collapse row1">
                                        <td class="text-left ps-45 p-relative"><i class='bx bx-reply rotated-180 more-items'></i> Mobile Phone #1</td>
                                        <td class="text-left px-3"><a data-bs-toggle="modal" data-bs-target="#RemindersPopup" class="gap-2"><i class='bx bx-file-blank' ></i> Samsung | John Eriksson</a></td>
                                        <!-- <td class="text-left">22 Aug 2023</td> -->
                                        <td class="text-left">
                                            <div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                <a class="ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Notice Period Expires in <b class='font-2 font-13'>119 days</b></div>" aria-describedby="tooltip">
                                                    <i class='bx bx-time-five'></i> 2 Months
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-left">
                                            <div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                <a class="ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Auto Renewal <b class='font-2 font-13'>( No )</b></div>" aria-describedby="tooltip">
                                                    <i class='bx bxs-flag-alt'></i> 01 Mar 2024
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-left ps-0"><div class="d-flex justify-content-center align-items-center gap-1 font-color-7"><span class="price-container">299 SEK</span></div></td>
                                        <td class="text-left"><div class="d-flex justify-content-center align-items-center">
                                            <a class="font-color-gray ps-0 pe-0 d-flex gap-1" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Variable Monthly Price</div>" aria-describedby="tooltip">Variable</a>
                                            </div>
                                        </td>
                                        <td class="text-left">
                                            <a class="font-color-gray ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'><i class='bx bx-envelope' ></i> Email | <i class='bx bx-phone' ></i> Telephone</div>" aria-describedby="tooltip"><i class='bx bx-user'></i> Åsa Holmgren</a>
                                        </td>
                                    </tr>
                                    <tr class="collapse row1">
                                        <td class="text-left ps-45 p-relative"><i class='bx bx-reply rotated-180 more-items'></i> Mobile Phone #2</td>
                                        <td class="text-left px-3"><a data-bs-toggle="modal" data-bs-target="#RemindersPopup" class="gap-2"><i class='bx bx-file-blank' ></i> Samsung | John Eriksson</a></td>
                                        <!-- <td class="text-left">22 Aug 2023</td> -->
                                        <td class="text-left">
                                            <div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                <a class="ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Notice Period Expires in <b class='font-2 font-13'>119 days</b></div>" aria-describedby="tooltip">
                                                    <i class='bx bx-time-five'></i> 2 Months
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-left">
                                            <div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                <a class="ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Auto Renewal <b class='font-2 font-13'>( Yes )</b></div>" aria-describedby="tooltip">
                                                    <i class='bx bxs-flag-alt'></i> 01 Mar 2024
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-left ps-0"><div class="d-flex justify-content-center align-items-center gap-1 font-color-7"><span class="price-container">299 SEK</span></div></td>
                                        <td class="text-left"><div class="d-flex justify-content-center align-items-center">
                                            <a class="font-color-gray ps-0 pe-0 d-flex gap-1" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Variable Monthly Price</div>" aria-describedby="tooltip">Variable</a>
                                            </div>
                                        </td>
                                        <td class="text-left">
                                            <a class="font-color-gray ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'><i class='bx bx-envelope' ></i> Email | <i class='bx bx-phone' ></i> Telephone</div>" aria-describedby="tooltip"><i class='bx bx-user'></i> Åsa Holmgren</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-left ps-45">Cloud Services</td>
                                        <td class="text-left px-3"><a data-bs-toggle="modal" data-bs-target="#RemindersPopup" class="gap-2"><i class='bx bx-file-blank' ></i> Servers</a></td>
                                        <!-- <td class="text-left">05 May 2023</td> -->
                                        <td class="text-left">
                                            <div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                <a class="ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Notice Period Expires in <b class='font-2 font-13'>120 days</b></div>" aria-describedby="tooltip">
                                                    <i class='bx bx-time-five'></i> 2 Months
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-left">
                                            <div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                <a class="ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Auto Renewal <b class='font-2 font-13'>( No )</b></div>" aria-describedby="tooltip">
                                                    <i class='bx bxs-flag-alt'></i> 01 Apr 2024
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-left ps-0"><div class="d-flex justify-content-center align-items-center gap-1 font-color-7"><span class="price-container">10 000 SEK</span></div></td>
                                        <td class="text-center"><div class="d-flex justify-content-center align-items-center">
                                            <a class="font-color-gray ps-0 pe-0 d-flex gap-1" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Quarterly Price</div>" aria-describedby="tooltip">Quarterly</a>
                                            </div>
                                        </td>
                                        <td class="text-left">
                                            <a class="font-color-gray ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'><i class='bx bx-envelope' ></i> Email | <i class='bx bx-phone' ></i> Telephone</div>" aria-describedby="tooltip"><i class='bx bx-user'></i> Åsa Holmgren</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left ps-45">Car Insurance</td>
                                        <td class="text-left px-3"><a data-bs-toggle="modal" data-bs-target="#RemindersPopup" class="gap-2"><i class='bx bx-file-blank' ></i> Volvo  | Ronny Karlsson</a></td>
                                        <!-- <td class="text-left">05 Sep 2023</td> -->
                                        <td class="text-left">
                                            <div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                <a class="ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Notice Period Expires in <b class='font-2 font-13'>141 days</b></div>" aria-describedby="tooltip">
                                                    <i class='bx bx-time-five'></i> 3 Months
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-left">
                                            <div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                <a class="ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Auto Renewal <b class='font-2 font-13'>( No )</b></div>" aria-describedby="tooltip">
                                                    <i class='bx bxs-flag-alt'></i> 01 Mar 2024
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-left ps-0"><div class="d-flex justify-content-center align-items-center gap-1 font-color-7"><span class="price-container costs">1 500 SEK</span></div></td>
                                        <td class="text-center"><div class="d-flex justify-content-center align-items-center">
											<a class="font-color-gray ps-0 pe-0 d-flex gap-1" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Fixed Monthly Price</div>" aria-describedby="tooltip">Monthly</a>
											</div>
										</td>
                                        <td class="text-left">
                                            <a class="font-color-gray ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'><i class='bx bx-envelope' ></i> Email | <i class='bx bx-phone' ></i> Telephone</div>" aria-describedby="tooltip"><i class='bx bx-user'></i> Lennart Ström</a>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left ps-45">Spotify</td>
                                        <td class="text-left px-3"><a data-bs-toggle="modal" data-bs-target="#RemindersPopup" class="gap-2"><i class='bx bx-file-blank' ></i> Music Premium</a></td>
                                        <!-- <td class="text-left">01 Aug 2023</td> -->
                                        <td class="text-left">
                                            <div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                <a class="ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Notice Period Expires in <b class='font-2 font-13'>155 days</b></div>" aria-describedby="tooltip">
                                                    <i class='bx bx-time-five'></i> 3 Months
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-left">
                                            <div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                <a class="ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Auto Renewal <b class='font-2 font-13'>( Yes )</b></div>" aria-describedby="tooltip">
                                                    <i class='bx bxs-flag-alt'></i> 01 Aug 2024
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-left ps-0"><div class="d-flex justify-content-center align-items-center gap-1 font-color-7"><span class="price-container costs">9 500 SEK</span></div></td>
                                        <td class="text-center"><div class="d-flex justify-content-center align-items-center">
											<a class="font-color-gray ps-0 pe-0 d-flex gap-1" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'>Annual Price</div>" aria-describedby="tooltip">Annually</a>
											</div>
										</td>
                                        <td class="text-left">
                                            <a class="font-color-gray ps-0 pe-0 d-flex gap-2" data-bs-template='<div class="popover alert-notice" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-bs-toggle="popover" data-bs-original-title="" data-bs-html="true" data-bs-content="<div class='d-flex flex-row w-auto gap-1 align-items-center text-no-wrap'><i class='bx bx-envelope' ></i> Email | <i class='bx bx-phone' ></i> Telephone</div>" aria-describedby="tooltip"><i class='bx bx-user'></i> Anna Karlsson</a>
                                    </td>
                                    </tr>
                                  
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
                                    <h5 class="bs-stepper-content__title font-17 font-weight-600 mb-4 w-100">
                                        <span class="bs-stepper-content__title--status ps-3"><i class='bx bx-check'></i> Active</span>
                                        Kontroll
                                        <span class="bs-stepper-content__title--note alert ps-4 closed">Notice Period Expires in <b>5 Days</b></span></h5>
                                </div>

                        <form name="frmSummary" id="frmSummary">
                            <div class="row g-4 steps-summary__row">
                                <div class="col-6 col-lg-6 mt-3 steps-summary__left">
                                    <fieldset class="steps-summary__group mb-4">
                                        <legend class="">Generally</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Folder</span>
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


        @endsection
    
    @section("script")
    <script>
        $(document).ready(function() {
            var $scrollableWrapper = $('#scrollable-costs-wrapper');
            var $scrollRight = $('.scroll-right');
            var $scrollLeft = $('.scroll-left');

            // Function to toggle scroll buttons visibility
            function toggleScrollButtons() {
                var scrollLeft = $scrollableWrapper.scrollLeft();
                var scrollWidth = $scrollableWrapper[0].scrollWidth;
                var clientWidth = $scrollableWrapper.innerWidth();

                console.log('Scroll Left:', scrollLeft);
                console.log('Scroll Width:', scrollWidth);
                console.log('Client Width:', clientWidth);

                if (scrollLeft === 0) {
                    $scrollLeft.fadeOut();
                } else {
                    $scrollLeft.fadeIn();
                }

                if (scrollLeft + clientWidth >= scrollWidth - 1) { // Allow for a small margin of error
                    $scrollRight.fadeOut();
                } else {
                    $scrollRight.fadeIn();
                }
            }

            // Scroll right on right button click
            $scrollRight.on('click', function() {
                $scrollableWrapper.animate({
                    scrollLeft: $scrollableWrapper[0].scrollWidth
                }, 800, function() {
                    toggleScrollButtons(); // Check button visibility after scrolling
                });
            });

            // Scroll left on left button click
            $scrollLeft.on('click', function() {
                $scrollableWrapper.animate({
                    scrollLeft: 0
                }, 800, function() {
                    toggleScrollButtons(); // Check button visibility after scrolling
                });
            });

            // Show/hide buttons based on scroll position
            $scrollableWrapper.on('scroll', function() {
                toggleScrollButtons();
            });

            // Initial check to set the correct visibility of the buttons
            toggleScrollButtons();
        });

        $( document ).ready(function() {

            $('#RemindersPopup').on('shown.bs.modal', function () {
            // Set a timeout to open #NotificationAlert modal after 1 second
            setTimeout(function () {
                $('#NotificationAlert').modal('show');
            }, 1000); // 1000 milliseconds = 1 second
        });

        // When #NotificationAlert modal is shown
        $('#NotificationAlert').on('shown.bs.modal', function () {
            // Make the #RemindersPopup modal's backdrop darker
            $('.modal-backdrop').not(':first').css('z-index', 1049); // Adjust the backdrop z-index for the second modal
            $('#RemindersPopup').css('z-index', 1048); // Adjust the z-index of the first modal
            $(this).css('z-index', 1050); // Ensure the second modal is on top
        });

        // When #NotificationAlert modal is hidden
        $('#NotificationAlert').on('hidden.bs.modal', function () {
            // Reset the #RemindersPopup modal's backdrop
            $('.modal-backdrop').not(':first').remove(); // Remove the second modal's backdrop
            $('#RemindersPopup').css('z-index', 1050); // Reset the z-index of the first modal
            $('body').addClass('modal-open'); // Ensure the body retains the modal-open class
        });

        $(function () {
            $('[data-bs-toggle="popover-responsive"]').popover({ placement: 'bottom', trigger: 'hover' });
            $('[data-bs-toggle="popover"]').popover({ placement: 'bottom', trigger: 'hover' });
            $('[data-bs-toggle="tooltip"]').tooltip();
        });
        $('[data-bs-toggle="popover-responsive"]').click(function(){
        });
        $('.contracts-folders__wrapper [data-bs-toggle="popover"]').popover({ placement: 'right', trigger: 'hover' });

        $('.chart-costs').on('click', function() {
            $('.chart-costs').removeClass('active');
            if($(this).hasClass('chart-costs-quarterly')){
                $('.chart-costs-heading__title').html('Quarterly Cost');
                $(this).addClass('active');
            }
            if($(this).hasClass('chart-costs-monthly')){
                $('.chart-costs-heading__title').html('Monthly Cost');
                $(this).addClass('active');
            }
            if($(this).hasClass('chart-costs-annually')){
                $('.chart-costs-heading__title').html('Annually Costs');
                $(this).addClass('active');
            }
            if($(this).hasClass('chart-costs-variable')){
                $('.chart-costs-heading__title').html('Variable Costs');
                $(this).addClass('active');
            }
            if($(this).hasClass('chart-costs-hybrid')){
                $('.chart-costs-heading__title').html('Hybrid Costs');
                $(this).addClass('active');
            }
        });

        
        $('table tr.clickable').on('click', function() {
            if(!$(this).hasClass('collapsed')){
                $(this).find('.more-items .bx').removeClass('bx-plus').addClass('bx-minus');
            }else{
                $(this).find('.more-items .bx').removeClass('bx-minus').addClass('bx-plus');
            }
        });
        // chart-costs-heading
    });

     $('.dt-buttons__costs').click(function(){
        $('.dt-buttons__costs').addClass('actives');
        $('.dt-buttons__income').removeClass('actives');
        // $('#ChooseMonthlyIncome').removeClass('active');
        $('.costs-income-total').addClass('font-color-7');
        $('.costs-income-total').removeClass('font-color-4');
        $('.analitycs-blocks__wrapper').removeClass('income');
        $('.analitycs-blocks__wrapper').addClass('costs');
        $('.costs-income-total').removeClass('__income');
        $('.costs-income-total').addClass('__costs');
     });
     $('.dt-buttons__income').click(function(){
        $('.dt-buttons__costs').removeClass('actives');
        $('.dt-buttons__income').addClass('actives');
        // $('#ChooseMonthlyIncome').addClass('active');
        $('.costs-income-total').removeClass('font-color-7');
        $('.costs-income-total').addClass('font-color-4');
        $('.analitycs-blocks__wrapper').addClass('income');
        $('.analitycs-blocks__wrapper').removeClass('costs');
        $('.costs-income-total').removeClass('__costs');
        $('.costs-income-total').addClass('__income');
     });
     $('.chart-costs-monthly').click(function(){
        $('#ChooseMonthlyIncome').html('Monthly Income');
        $('#ChooseMonthlyCosts').html('Monthly Costs');
     });
     $('.chart-costs-quarterly').click(function(){
        $('#ChooseMonthlyIncome').html('Quarterly Income');
        $('#ChooseMonthlyCosts').html('Quarterly Costs');
     });
     $('.chart-costs-annually').click(function(){
        $('#ChooseMonthlyIncome').html('Annually Income');
        $('#ChooseMonthlyCosts').html('Annually Costs');
     });


    </script>

    <!-- Vector map JavaScript -->
    <!-- <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script> -->
    <!-- <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script> -->
    <!-- highcharts js -->
    <!-- <script src="assets/plugins/highcharts/js/highcharts.js"></script> -->
    <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <!-- <script src="{{URL::asset('assets/plugins/chartjs/js/Chart.min.js')}}"></script> -->
    <!-- <script src="{{URL::asset('assets/plugins/chartjs/js/Chart.extension.js')}}"></script> -->
    <script src="{{URL::asset('assets/plugins/chartjs/js/chart.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/raphael/raphael-min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/morris/js/morris.js')}}"></script>

    <script src="{{URL::asset('assets/plugins/chartjs/js/chartjs-plugin-datalabels.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/index.js')}}"></script>
    <!-- <script src="assets/js/dashboard-analytics.js"></script> -->
    <script>
        // new PerfectScrollbar('.dashboard-top-countries');
    </script>
    @endsection 