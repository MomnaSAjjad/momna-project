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
                                            <p class="mb-0 font-12 text-upper font-color-11 font-weight-500 font-nunito">Contracts in the system</p>
                                            <h5 class="my-0 mt-2 font-15 font-color-11 font-weight-500 mb-2 text-left">110 </h5>
                                        </div>
                                        <div class="widgets-icons-2 rounded-circle border-color-gray bg-light-purple-3 text-white ms-auto border">
                                            <img class="filter-gray w-125rem" src="{{URL::asset('assets/images/icons/cog-file.svg')}}">
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
                                            <p class="mb-0 font-12 text-upper font-color-11 font-weight-500 font-nunito">Active contracts</p>
                                            <h5 class="my-0 mt-2 font-15 font-color-11 font-weight-500 mb-2 text-left">48</h5>
                                        </div>
                                        <div class="widgets-icons-2 rounded-circle border-color-gray bg-light-purple-3 text-white ms-auto border">
                                            <!-- <i class='font-color-purple-3 bx bx-file filter-gray'></i> -->
                                            <img class="filter-gray w-125rem" src="{{URL::asset('assets/images/icons/document-checked.svg')}}">

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
                                            <p class="mb-0 font-12 text-upper font-color-11 font-weight-500 font-nunito">Contract income</p>
                                            <h5 class="my-0 mt-2 font-15 font-color-11 font-weight-500 mb-2 text-left">500 000 SEK</h5>
                                        </div>
                                        <div class="widgets-icons-2 rounded-circle border-color-gray bg-light-purple-3 text-white ms-auto border"><i class='bx bxs-up-arrow-alt font-color-4'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card radius-10 border border-start border-1">
                                <div class="card-body">
                                    <div class="d-flex align-items-center height-70px">
                                        <div>
                                            <p class="mb-0 font-12 text-upper font-color-11 font-weight-500 font-nunito">Contract costs</p>
                                            <h5 class="my-0 mt-2 font-15 font-color-11 font-weight-500 mb-2 text-left">150 000 SEK</h5>
                                        </div>
                                        <div class="widgets-icons-2 rounded-circle border-color-gray bg-light-purple-3 text-white ms-auto border"><i class='bx bxs-down-arrow-alt font-color-7' ></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-12 col-lg-6">
                           <!--  <div class="card card-bordered radius-10 wave-analitycs">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h6 class="mb-0 font-16 font-color-11">Contract Status</h6>
                                        </div>
                                        <div class="dropdown ms-auto"> -->
                                            <!-- <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:;">Contract cost</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:;">Contract status</a>
                                                </li>
                                            </ul> -->
                                       <!--  </div>
                                    </div>
                                    <div class="chart-container-1">
                                        <canvas id="chart1"></canvas>
                                    </div>
                                </div>
                            </div> -->
                            <div class="card card-bordered radius-10 wave-analitycs">
                                <!-- <div class="card-body">
                                    <div id="chartCosts" class="h-100"></div>
                                </div> -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4 mt-1">
                                        <div>
                                            <h6 class="mb-0 font-15 font-color-11 mb-2 d-flex gap-3 justify-content-center align-items-center chart-costs-heading"><span class="chart-costs-heading__title">Monthly Costs</span> <span class="d-flex badge bg-color-6 h-22 opacity-7">10 005 SEK</span></h6>
                                        </div>
                                        <div class="dropdown ms-auto"> 
                                            <a class="dropdown-toggle dropdown-toggle-nocaret d-flex gap-2 fs-08" href="#" data-bs-toggle="dropdown">Monthly <i class='bx bx-chevron-down'></i>
                                            </a>
                                            <ul class="dropdown-menu short-dropdown">
                                               <!--  <li><a class="dropdown-item" href="javascript:;">Monthly</a>
                                                </li> -->
                                                <li><a class="dropdown-item" href="javascript:;">Variable</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:;">Quarterly</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:;">Annually</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:;">Hybrid</a>
                                                </li>
                                            </ul>
                                       </div>
                                        <!-- <div class="ms-auto">
                                            <div class="dt-buttons">      
                                                <button class="btn btn-outline-secondary buttons-html5 active chart-costs chart-costs-monthly" tabindex="0" aria-controls="monthly" type="button">
                                                    <span>Monthly</span>
                                                </button> 
                                                <button class="btn btn-outline-secondary buttons-html5 chart-costs chart-costs-quarterly" tabindex="1" aria-controls="quarterly" type="button">
                                                    <span>Quarterly</span>
                                                </button> 
                                                <button class="btn btn-outline-secondary buttons-html5 chart-costs chart-costs-annually" tabindex="2" aria-controls="annually" type="button">
                                                    <span>Annually</span>
                                                </button> 
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="chart-container-16">
                                        <canvas id="chart_costs"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="card card-bordered circle-analitycs costs-pie radius-10 flex-row">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mt-2">
                                        <div>
                                            <h6 class="mb-0 font-15 font-color-11">Cost Per Department</h6>
                                        </div>
                                        <div class="dropdown ms-auto">
                                        </div>
                                    </div>
                                    <div class="flex-row d-flex align-items-center h-100 pb-4">
                                       <!--  <div class="chart-container-2">
                                            <canvas id="costs_pie"></canvas>
                                        </div> -->

                                        <div class="card-body">
                                            <div class="">
                                                <div id="costs_pie_new" style="height:250px;"></div>
                                            </div>
                                        </div>
                                        
                                        <!-- <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center pe-2"><span class="badge bg-color-1 w-4rem">IT</span> <b class="mb-0 font-12 font-color-11">2 240 SEK</b>
                                            </li>
                                            <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center pe-2"><span class="badge bg-color-2 w-4rem">HR</span> <b class="mb-0 font-12 font-color-11">1 400 SEK</b>
                                            </li>
                                            <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center pe-2"><span class="badge bg-color-3 w-4rem">Leases</span> <b class="mb-0 font-12 font-color-11">1 875 SEK</b>
                                            </li>
                                            <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center pe-2"><span class="badge bg-color-4 w-4rem">Rental</span> <b class="mb-0 font-12 font-color-11">2 350 SEK</b>
                                            </li>
                                            <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center pe-2"><span class="badge bg-color-5 w-4rem">Phones</span> <b class="mb-0 font-12 font-color-11">890 SEK</b>
                                            </li>
                                        </ul> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="card card-bordered radius-10 flex-row circle-analitycs contract-categories-chart">
                                <div class="card-body">
                                  <div class="d-flex align-items-center mt-2">
                                        <div>
                                            <h6 class="mb-0 font-15 font-color-11">Contracts  Expiring</h6>
                                        </div>
                                        <div class="dropdown ms-auto">
                                        </div>
                                    </div>
                                    <div class="flex-row d-flex mt-4 flex-column">
                                        <div class="chart-container-2">
                                            <canvas id="contracts_expiring"></canvas>
                                            <!-- <div id="chartjs-tooltip" class="chart-container__total">
                                                <div>Total<p>6</p></div>
                                              </div> -->
                                            <!-- <div class="chart-container__total"><span>Total</span>6</div> -->
                                          </div>
                                        <!--   <div class="d-flex justify-content-between px-4 mt-1">
                                              <a href="#" class="btn btn-default px-3 w-auto pt-2 pb-2 font-12 bg-white font-color-11 ms-2 hover-scaled">View</a>
                                              <a href="#" class="btn btn-default px-3 w-auto pt-2 pb-2 font-12 bg-white font-color-11 pe-2 me-2 hover-scaled">View</a>
                                          </div> -->
                                       <!-- <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                                                <a class="badge bg-color-1 btn w-100 color-white font-13 gap-2 justify-content-between pe-3 ps-3">IT <b>11</b></a>
                                            </li>
                                            <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                                                <a class="badge bg-color-2 btn w-100 color-white font-13 gap-2 justify-content-between pe-3 ps-3">Leases <b>10</b></a>
                                            </li>
                                            <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                                                <a class="badge bg-color-3 btn w-100 color-white font-13 gap-2 justify-content-between pe-3 ps-3">Office <b>6</b></a>
                                            </li>
                                            <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                                                <a class="badge bg-color-6 btn w-100 color-white font-13 gap-2 justify-content-between pe-3 ps-3">Employment <b>5</b></a>
                                            </li>
                                            <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                                                <a class="badge bg-color-4 btn w-100 color-white font-13 gap-2 justify-content-between pe-3 ps-3">Staff <b>4</b></a>
                                            </li>
                                            <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                                                <a class="badge bg-color-5 btn w-100 color-white font-13 gap-2 justify-content-between pe-3 ps-3">Company Car <b>2</b></a>
                                            </li>
                                        </ul> -->
                                    </div>
                                </div>
                           </div>

                        </div>
                    </div><!--end row-->


                    


                    <div class="card no-bg radius-10 recent-list">
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
                                        <a class="badge border-type-2 btn w-100 font-type-2 font-11 gap-2 justify-content-between pe-3 ps-3 bg-color-2 list-badges ">Staff <b>4</b></a>
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
                                        <th width="9%" class="text-left">Contract Manager</th>
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
                        <h5 class="bs-stepper-content__title font-17 font-weight-600">Rental Agreement - Office | Stockholm<span class="bs-stepper-content__title--note ps-4"><i class='bx bx-time-five ps-2'></i> Notice Period Expires in <b>96 days</b></span></h5>
                        <form name="frmSummary" id="frmSummary">
                            <div class="row g-4 steps-summary__row">
                                <div class="col-6 col-lg-6 steps-summary__left">
                                    <fieldset class="steps-summary__group mb-4">
                                        <legend class="">Counterparty</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Company Name</span>
                                                <span class="mb-2">Lomo AB</span>
                                                <span class="title mt-3">Address</span>
                                                <span>Streets 53</span>
                                                <span class="title mt-3">City</span>
                                                <span>Stockholm</span>
                                                <!-- <span class="title title mt-4">Contact Person</span>
                                                <span><i class='bx bx-user'></i> Anna Karlsson</span>
                                                <span class="title">Telephone</span>
                                                <span class="d-flex gap-1"><i class='bx bx-phone'></i> 08 554 332 12</span> -->
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Org nr</span>
                                                <span class="mb-2">556511-4021</span>
                                                <span class="title mt-3">Postal Code</span>
                                                <span>012 34</span>
                                                <span class="title mt-3">Country</span>
                                                <span>Sweden</span>
                                                <!-- <span class="title title mt-4">Title</span>
                                                <span>CEO</span>
                                                <span class="title">Email</span>
                                                <span class="d-flex gap-1"><a href="mailto:info@lomo.se"><i class='bx bx-envelope' ></i> info@lomo.se</a></span> -->
                                            </div>

                                        </div>
                                        <div class="d-flex px-2 mx-3 my-4 mt-0 py-3 gap-2" style="background: #f2f2f2;border-radius: 0.5rem;border: 1px solid#c0c0c0;">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title title mt-2">Contact Person</span>
                                                <span><i class='bx bx-user'></i> Anna Karlsson</span>
                                                <span class="title mt-3">Telephone</span>
                                                <span class="d-flex gap-1"><i class='bx bx-phone'></i> 08 554 332 12</span>
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex ps-1">
                                                <span class="title title mt-2">Title</span>
                                                <span>CEO</span>
                                                <span class="title mt-3">Email</span>
                                                <span class="d-flex gap-1"><a href="mailto:info@lomo.se"><i class='bx bx-envelope' ></i> info@lomo.se</a></span>
                                            </div>
                                        </div>

                                        <a class="steps-summary__group--edit" href="#"><i class='bx bx-edit-alt'></i></a>
                                    </fieldset>
                                    <fieldset class="steps-summary__group mb-4">
                                        <legend class="">Contract Information</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Category</span>
                                                <span>Office</span>
                                                <span class="title mt-3">Contract Type</span>
                                                <span class="mb-2">Rental Agreement</span>
                                                <span class="title mt-3">Department</span>
                                                <span>Finance</span>
                                                <span class="title mt-3">Cost</span>
                                                <span class="font-color-7">30 000 SEK</span>
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title"></span>
                                                <span>&nbsp;</span>
                                                <span class="title mt-3">Contract Name</span>
                                                <span class="mb-2">Office | Stockholm</span>
                                                <span class="title mt-3">Region</span>
                                                <span>Stockholm</span>
                                                <span class="title mt-3">Payment Period</span>
                                                <span>Monthly</span>
                                            </div>
                                        </div>
                                        <div class="d-flex px-2 mx-3 my-4 mt-0 py-3 gap-2" style="background: #f2f2f2;border-radius: 0.5rem;border: 1px solid#c0c0c0;">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title mt-2">Contract Manager</span>
                                                <span><i class='bx bx-user'></i> David Carlsson</span>
                                                <span class="title mt-3">Telephone</span>
                                                <span class="d-flex gap-1"><i class='bx bx-phone'></i> 046 789 99 95</span>
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex ps-1">
                                                <span class="title mt-2"></span>
                                                <span>&nbsp;</span>
                                                <span class="title mt-3">Email</span>
                                                <span class="d-flex gap-1"><a href="mailto:david@foretag.se"><i class='bx bx-envelope' ></i> david@foretag.se</a></span>
                                            </div>
                                        </div>
                                        <a class="steps-summary__group--edit" href="#"><i class='bx bx-edit-alt'></i></a>
                                    </fieldset>
                                    <fieldset class="steps-summary__group mb-4">
                                        <legend class="">Contract Duration</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Contract Start</span>
                                                <span>2020-11-29</span>
                                                <span class="title mt-3">Contract Period</span>
                                                <span>Auto Renew Annually</span>
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Contract End</span>
                                                <span>2023-11-29</span>
                                                <span class="title mt-3">Notice Period</span>
                                                <span class="">2 Months</span>
                                            </div>
                                        </div>
                                        <a class="steps-summary__group--edit" href="#"><i class='bx bx-edit-alt'></i></a>
                                    </fieldset>
                                    <fieldset class="steps-summary__group mb-4">
                                        <legend class="">Email Reminder</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Type of Reminder</span>
                                                <span>Renegotiate Contract</span>
                                                <!-- <span class="title mt-4">Mail Recipient Group</span>
                                                <span class="font-13 mt-1"><span class="focused-email">david@guetta.com</span><span class="focused-email">info@davidguetta.com</span></span> -->
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Reminder Date</span>
                                                <span><i class='bx bx-alarm'></i> 2023-09-29</span>
                                             <!--    <span class="title mt-4">How to cancell contract</span>
                                                <span class="font-13">By telephone : 046 789 99 95</span> -->
                                            </div>
                                            <div class="col-12 col-lg-12 flex-column d-flex">
                                                <span class="title mt-3">Email recipient</span>
                                                <span class="font-13 mt-1"><span class="focused-email">david@guetta.com</span><span class="focused-email">info@davidguetta.com</span></span>
                                            </div>
                                        </div>
                                        <a class="steps-summary__group--edit" href="#"><i class='bx bx-edit-alt'></i></a>
                                    </fieldset>
                                    <fieldset class="steps-summary__group">
                                        <legend class="">Notes</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-12 col-lg-12 flex-column d-flex">
                                                <span>We're satisfied with this contract </span>
                                            </div>
                                        </div>
                                        <a class="steps-summary__group--edit" href="#"><i class='bx bx-edit-alt'></i></a>
                                    </fieldset>
                                   
                                </div>
                                <div class="col-6 col-lg-6 mt-3 steps-summary__right">
                                    <div class="mb-3 d-flex align-items-start">
                                        <div class="d-flex mt-1">
                                            <a class="d-flex justify-content-center align-items-center text-gray gap-1" href="#"><i class="bx bx-paperclip fs-5 pe-0 rotated-270"></i> See attached files</a>
                                        </div>
                                        <div class="ms-auto">
                                            <div>
                                                <button data-step-action="back" type="button" class="step btn btn-secondary pe-3 ps-3 pb-2 pt-2 me-2 steps-summary-back">Go Back</button>
                                                <button type="button" class="btn btn-primary pe-3 ps-3 pb-2 pt-2">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="steps-summary__right--img">
                                        <img src="/assets/images/demo/1853_Subscription_document.jpeg">
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
    $( document ).ready(function() {
        $(function () {
            $('[data-bs-toggle="popover-responsive"]').popover({ placement: 'bottom', trigger: 'hover' });
            $('[data-bs-toggle="popover"]').popover({ placement: 'bottom', trigger: 'hover' });
            $('[data-bs-toggle="tooltip"]').tooltip();
        });
        $('[data-bs-toggle="popover-responsive"]').click(function(){
        });

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
    <script src="assets/js/index.js"></script>
    <!-- <script src="assets/js/dashboard-analytics.js"></script> -->
    <script>
        // new PerfectScrollbar('.dashboard-top-countries');
    </script>
    @endsection 