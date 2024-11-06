    @extends("layouts.app")
    @section("style")
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- <link href="assets/plugins/highcharts/css/highcharts.css" rel="stylesheet" /> -->
    <link href="{{URL::asset('assets/plugins/datetimepicker/css/classic.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datetimepicker/css/classic.time.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datetimepicker/css/classic.date.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css')}}">
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
                                            <p class="mb-0 font-13 text-upper font-color-11 font-weight-500">Monthly </p>
                                            <h5 class="my-0 mt-1 font-15 font-color-11 font-weight-800">3 000 SEK</h5>
                                        </div>
                                        <div class="widgets-icons-2 rounded-circle border-color-purple-2 bg-light-purple-3 text-white ms-auto border">
                                            <img class="w-09rem" src="{{URL::asset('assets/images/icons/course-down.svg')}}">
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
                                            <p class="mb-0 font-13 text-upper font-color-11 font-weight-500">Quarterly </p>
                                            <h5 class="my-0 mt-1 font-15 font-color-11 font-weight-800">20 000 SEK</h5>
                                        </div>
                                        <div class="widgets-icons-2 rounded-circle border-color-purple-2 bg-light-purple-3 text-white ms-auto border"><img class="w-09rem" src="{{URL::asset('assets/images/icons/course-down.svg')}}"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card radius-10 card radius-10 card-bordered">
                                <div class="card-body">
                                    <div class="d-flex align-items-center height-70px">
                                        <div>
                                            <p class="mb-0 font-13 text-upper font-color-11 font-weight-500">Annually </p>
                                            <h5 class="my-0 mt-1 font-15 font-color-11 font-weight-800">100 000 SEK</h5>
                                        </div>
                                        <div class="widgets-icons-2 rounded-circle border-color-purple-2 bg-light-purple-3 text-white ms-auto border"><img class="w-09rem" src="{{URL::asset('assets/images/icons/course-down.svg')}}"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card radius-10 card radius-10 card-bordered">
                                <div class="card-body">
                                    <div class="d-flex align-items-center height-70px">
                                        <div>
                                            <p class="mb-0 font-13 text-upper font-color-11 font-weight-500">Total costs</p>
                                            <h5 class="my-0  mt-1 font-15 font-color-11 font-weight-800">150 000 SEK</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->
                  <!--   <div class="row justify-content-center">
                        <div class="col-6 col-lg-6">
                            <div class="card card-bordered radius-10">
                                <div class="card-body pt-3 pb-3 ps-4 pe-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="mb-0 font-15">Select period </h6>
                                        </div>
                                        <div class="datepicker-wrap">
                                            <input placeholder="From" class="form-control text-left datepicker" type="text"/>
                                            <i class='bx bx-calendar'></i>
                                        </div>
                                        <div class="datepicker-wrap">
                                            <input placeholder="To" class="form-control text-left datepicker" type="text"/>
                                            <i class='bx bx-calendar'></i>
                                        </div>
                                        <a class="btn btn-default px-3 w-auto pt-1 pb-1 font-13">Filter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="card card-bordered radius-10 h-150 wave-analitycs">
                                <div class="card-body">
                                    <div class="chart-container-5">
                                        <canvas id="compare_chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <div class="card card-bordered radius-10 h-435 wave-analitycs">
                                <!-- <div class="card-body">
                                    <div id="chartCosts" class="h-100"></div>
                                </div> -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4 mt-1">
                                        <div>
                                            <h6 class="mb-0 font-16 font-color-11 mb-2">Monthly Costs </h6>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="dt-buttons">      
                                                <button class="btn btn-outline-secondary buttons-html5 active" tabindex="0" aria-controls="example2" type="button">
                                                    <span>Monthly</span>
                                                </button> 
                                                <button class="btn btn-outline-secondary buttons-html5" tabindex="0" aria-controls="example2" type="button">
                                                    <span>Quarterly</span>
                                                </button> 
                                                <button class="btn btn-outline-secondary buttons-html5" tabindex="0" aria-controls="example2" type="button">
                                                    <span>Annually</span>
                                                </button> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chart-container-15">
                                        <canvas id="chart_costs"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                           <div class="card card-bordered circle-analitycs radius-10 flex-row h-435">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mt-2">
                                        <div>
                                            <h6 class="mb-0 font-16 font-color-11">Cost Per Department</h6>
                                        </div>
                                        <div class="dropdown ms-auto">
                                        </div>
                                    </div>
                                    <div class="flex-row d-flex align-items-center h-100 pb-5">
                                        <div class="chart-container-2">
                                            <canvas id="costs_pie"></canvas>
                                        </div>
                                        <ul class="list-group list-group-flush">
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
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->


                    


                </div>
            </div>
        @endsection
    
    @section("script")
    <!-- Vector map JavaScript -->
    <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- highcharts js -->
    <!-- <script src="assets/plugins/highcharts/js/highcharts.js"></script>
    <script src="assets/plugins/highcharts/js/highcharts-more.js"></script>
    <script src="assets/plugins/highcharts/js/highcharts-3d.js"></script>
    <script src="assets/plugins/highcharts/js/highcharts-custom.script.js"></script>
 -->
    <!-- <script src="assets/plugins/highcharts/js/highcharts.js"></script>
	<script src="assets/plugins/highcharts/js/highcharts-more.js"></script>
	<script src="assets/plugins/highcharts/js/variable-pie.js"></script>
	<script src="assets/plugins/highcharts/js/solid-gauge.js"></script>
	<script src="assets/plugins/highcharts/js/highcharts-3d.js"></script>
	<script src="assets/plugins/highcharts/js/cylinder.js"></script>
	<script src="assets/plugins/highcharts/js/funnel3d.js"></script>
	<script src="assets/plugins/highcharts/js/exporting.js"></script>
	<script src="assets/plugins/highcharts/js/export-data.js"></script>
	<script src="assets/plugins/highcharts/js/accessibility.js"></script> -->
	<!-- <script src="assets/plugins/highcharts/js/highcharts-custom.script.js"></script> -->
    <script src="{{URL::asset('assets/plugins/datetimepicker/js/legacy.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datetimepicker/js/picker.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datetimepicker/js/picker.time.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datetimepicker/js/picker.date.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js')}}"></script>
    <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <!-- <script src="{{URL::asset('assets/plugins/chartjs/js/Chart.min.js')}}"></script> -->
    <!-- <script src="{{URL::asset('assets/plugins/chartjs/js/Chart.extension.js')}}"></script> -->
    <script src="{{URL::asset('assets/plugins/chartjs/js/chart.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/chartjs/js/chartjs-plugin-datalabels.min.js')}}"></script>
    <!-- <script src="{{URL::asset('assets/plugins/chartjs/js/utils.js')}}"></script> -->

    <script src="assets/js/index.js"></script>
    <!-- <script src="assets/js/dashboard-analytics.js"></script> -->
    <script>
        // new PerfectScrollbar('.dashboard-top-countries');
    </script>
    <script>
        $(document).ready(function () {
            $('.datepicker').pickadate({
                selectMonths: true,
                selectYears: true
            })
        })
    </script>
    @endsection 