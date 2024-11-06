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
                                            <p class="mb-0 font-12 text-upper font-color-11 font-weight-500 font-nunito">{{ __('dashboard.pills.active') }} <span class="my-0 mt-2 font-25 font-color-000 font-weight-700 mb-2 text-left ms-2">{{ $total_contracts_active }}</span></p>
                                            <!-- <a href="" class="my-0 mt-2 font-12 font-color-11 text-left d-flex hover-scaled mb-2 pt-1">{{ __('dashboard.view_all') }}</a> -->
                                        </div>
                                        <div class="widgets-icons-2 rounded-circle bg-light-sky text-white ms-auto border">
                                            <i class='font-color-sky-3 bx fw-500 bx-file filter-gray-0 font-25'></i>
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
                                            <p class="mb-0 font-12 text-upper font-color-11 font-weight-500 font-nunito">{{ __('dashboard.pills.alert') }} <span class="my-0 mt-2 font-25 font-color-000 font-weight-700 mb-2 text-left ms-2">{{ $total_contracts_alerts }}</span></p>
                                            <!-- <a href="" class="my-0 mt-2 font-12 font-color-11 text-left d-flex hover-scaled mb-2 pt-1">{{ __('dashboard.view_all') }}</a> -->
                                        </div>
                                        <div class="widgets-icons-2 rounded-circle border-color-gray bg-light-purple-3 text-white ms-auto border">
                                            <div class="widgets-icons-2 rounded-circle bg-red-coral text-white ms-auto border"><i class="bx fw-500 bx-error font-color-coral-3 filter-gray-0 font-25"></i>
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
                                            <p class="mb-0 font-12 text-upper font-color-11 font-weight-500 font-nunito">{{ __('dashboard.pills.overdue') }} <span class="my-0 mt-2 font-25 font-color-000 font-weight-700 mb-2 text-left ms-2">0</span></p>
                                            <!-- <a href="" class="my-0 mt-2 font-12 font-color-11 text-left d-flex hover-scaled mb-2 pt-1">{{ __('dashboard.view_all') }}</a> -->
                                        </div>
                                        <div class="widgets-icons-2 rounded-circle  border-color-gray bg-light-purple-3 text-white ms-auto border">
                                            <div class="widgets-icons-2 rounded-circle bg-light-parrot text-white ms-auto border"><i class='bx fw-500 bx-time-five font-color-parrot-3 filter-gray-0 font-25'></i>
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
                                            <p class="mb-0 font-12 text-upper font-color-11 font-weight-500 font-nunito">{{ __('dashboard.pills.archived') }} <span class="my-0 mt-2 font-25 font-color-000 font-weight-700 mb-2 text-left ms-2">{{ $total_contracts_archived }}</span></p>
                                            <!-- <a href="" class="my-0 mt-2 font-12 font-color-11 text-left d-flex hover-scaled mb-2 pt-1">{{ __('dashboard.view_all') }}</a> -->
                                        </div>
                                        <div class="widgets-icons-2 rounded-circle border-color-gray bg-light-purple-3 text-white ms-auto border">
                                            <div class="widgets-icons-2 rounded-circle bg-light-parple text-white ms-auto border"><i class="bx fw-500 bx-archive font-color-blue-3 filter-gray-0 font-25"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->


                    <div class="row">
                        <div class="col-12 col-lg-12 analitycs-blocks contracts-folders">
                            <div class="card card-bordered radius-10 pb-4">
                                <div class="card-body pb-3">
                                    <div class="d-flex align-items-center mb-2 mt-2 justify-content-between">
                                        <div>
                                            <h6 class="mb-0 font-13 font-color-11 mb-2 d-flex gap-3 justify-content-center align-items-center chart-costs-heading"><span class="chart-costs-heading__title2">{{ $total_contracts_title }}</span></h6>
                                        </div>
                                        <div class="contracts-folders__change-folders edit-folder_hvr font-color-11 position-relative">
                                            <a class="font-color-11"><i class="bx bx-edit-alt"></i>{{ __('dashboard.Edit Folders') }}</a>
                                            <i class="fa fa-caret-down" aria-hidden="true"></i>

                                            <ul class="edit-dropdown-list" style="display: none;">
                                                <li>
                                                    <a href="#" class="dropdown-list-number"><img src="assets/images/folder-edit.png" alt=""><span>Create Folder</span></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-list-number">
                                                        <img src="assets/images/folder-hiiden.png" alt="">
                                                        Hide Folder</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="contracts-folders__wrapper">
                                    @foreach ($foldersWithContractCounts as $folder)
                                        <a href="/contract/list" class="contracts-folders__wrapper--item hover-scaled">
                                            <div class="contracts-folders__wrapper--folder">
                                                <div class='folder-icon bg-type-5' style="background:{{ $folder->color }}"></div><span style="color:{{ $folder->color }}">{{ $folder->contract_count }}</span>
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
                                </div> --}}
                                <div class="contracts-folders__wrapper">
                                    @foreach ($foldersWithContractCounts as $folder)
                                        <a href="{{ url('/contract/list') }}?folder_id={{ $folder->id }}" class="contracts-folders__wrapper--item hover-scaled">
                                            <div class="contracts-folders__wrapper--folder">
                                                <div class='folder-icon bg-type-5' style="background:{{ $folder->color }}"></div>
                                                <span style="color:{{ $folder->color }}">{{ $folder->contract_count }}</span>
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
                        <div class="col-12 col-lg-12 analitycs-blocks d-none">
                            <div class="card card-bordered radius-10 pb-4">
                                <div class="card-body pb-3">
                                    <div class="d-flex align-items-center mb-2 mt-2">
                                        <div>
                                            <h6 class="mb-0 font-13 font-color-11 mb-2 d-flex gap-3 justify-content-center align-items-center chart-costs-heading"><span class="chart-costs-heading__title3">{{ __('dashboard.notification_alert') }}</span></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="contracts-expiring p-4 pt-1">
                                    <div class="contracts-expiring__heading d-flex justify-content-between">
                                        <div class="font-weight-500">{{ __('dashboard.title_date') }}</div>
                                        <div class="font-weight-500">{{ __('dashboard.title_contract') }}</div>
                                    </div>
                                    @forelse ($expiringContracts as $contract)
                                        @php
                                            $endDate = \Carbon\Carbon::parse($contract->duration_end_date);
                                            $daysUntilEnd = \Carbon\Carbon::now()->diffInDays($endDate, false);
                                        @endphp
                                        <div class="contracts-expiring__item">
                                            <div class="d-flex flex-column contracts-expiring__due">
                                                <span><span class="font-color-7">{{ $daysUntilEnd }} {{ __('dashboard.days') }}</span></span>
                                                <span>{{ $endDate->format('Y-m-d') }}</span>
                                            </div>
                                            <div class="contracts-expiring__name"><a data-bs-toggle="modal" data-bs-target="#RemindersPopup" class="hover-scaled">{{ $contract->name }}</a></div>
                                        </div>
                                    @empty
                                        <p class="text-center pt-4 fs-07">{{ __('dashboard.no_results') }}</p>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12 analitycs-blocks d-none">
                            <div class="card card-bordered radius-10 pb-4">
                                <div class="card-body pb-3">
                                    <div class="d-flex align-items-center mb-2 mt-2">
                                        <div>
                                            <h6 class="mb-0 font-13 font-color-11 mb-2 d-flex gap-3 justify-content-center align-items-center chart-costs-heading"><span class="chart-costs-heading__title3">{{ __('dashboard.notification_alert') }}</span></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="contracts-expiring p-4 pt-1">
                                    <div class="contracts-expiring__heading d-flex justify-content-between">
                                        <div class="font-weight-500">{{ __('dashboard.title_date') }}</div>
                                        <div class="font-weight-500">{{ __('dashboard.title_contract') }}</div>
                                    </div>
                                    @forelse ($expiringContracts as $contract)
                                        @php
                                            $endDate = \Carbon\Carbon::parse($contract->duration_end_date);
                                            $daysUntilEnd = \Carbon\Carbon::now()->diffInDays($endDate, false);
                                        @endphp
                                        <div class="contracts-expiring__item">
                                            <div class="d-flex flex-column contracts-expiring__due">
                                                <span><span class="font-color-7">{{ $daysUntilEnd }} {{ __('dashboard.days') }}</span></span>
                                                <span>{{ $endDate->format('Y-m-d') }}</span>
                                            </div>
                                            <div class="contracts-expiring__name"><a data-bs-toggle="modal" data-bs-target="#RemindersPopup" class="hover-scaled">{{ $contract->name }}</a></div>
                                        </div>
                                    @empty
                                        <p class="text-center pt-4 fs-07">{{ __('dashboard.no_results') }}</p>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12">
                            <div class="card card-bordered radius-10 pb-3">
                                <div class="card-body pb-3">
                                    <div class="d-flex align-items-center mb-4 mt-2">
                                        <h6 class="mb-0 font-13 font-color-11 mb-2 d-flex gap-3 justify-content-between align-items-center chart-costs-heading w-100"><span class="chart-costs-heading__title3">{{ __('dashboard.expires_table.Notice Period Expiring in Next 30 Days') }}</span>
                                        </h6>
                                    </div>
                                    <div class="table-responsive bordered bg-warn">
                                        <table class="table mb-0 table-striped contracts-list-table">
                                            <thead class="table-dark bg-warn">
                                                <tr>
                                                    <th class="text-left">{{ __('dashboard.expires_table.folder') }}</th>
                                                    <th class="text-left">{{ __('dashboard.expires_table.type') }}</th>
                                                    <th class="text-left">{{ __('dashboard.expires_table.counterparty') }}</th>
                                                    <th class="text-left">{{ __('dashboard.expires_table.contract') }}</th>
                                                    <th class="text-left">{{ __('dashboard.expires_table.notice_period') }}</th>
                                                    <th class="text-left">{{ __('dashboard.expires_table.contract_manager') }}</th>
                                                    <th class="text-left">{{ __('dashboard.expires_table.amount') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>

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
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-2 mt-2">
                                        <div>
                                            <div class="mb-0 font-13 font-color-11 mb-2 d-flex gap-3 justify-content-center align-items-center chart-costs-heading">
                                                <h6 class="font-13 font-color-11 mb-0">{{ __('dashboard.costs_income_overview') }}</h6>
                                                <!-- <span class="d-flex badge costs-income-total __costs font-color-7 h-24 fs-08"><div class="costs-income-total__costs">{{ $total_contracts_costs }}</div><div class="costs-income-total__income">0 SEK</div></span> -->

                                                <div class="d-flex align-items-center gap-2">
                                                    <button class="dshb-dropdown__btn active">{{ __('dashboard.Total') }}</button>
                                                    <button class="dshb-dropdown__btn">{{ __('dashboard.Monthly') }}</button>
                                                    <button class="dshb-dropdown__btn">{{ __('dashboard.Quarterly') }}</button>
                                                    <button class="dshb-dropdown__btn">{{ __('dashboard.Yearly') }}</button>
                                                    <!-- <button class="dshb-dropdown__btn">{{ __('dashboard.One Time') }}</button> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto d-flex gap-4 analitycs-blocks__range align-items-center">
                                            <select class="form-select d-none" id="CostOrIncome" aria-label="">
                                            @foreach($payment_periods as $key => $period)
                                                @if($key == 0)
                                                <option selected value="{{ $key }}">{{ $period }}</option>
                                                @else
                                                <option value="{{ $key }}">{{ $period }}</option>
                                                @endif
                                            @endforeach
                                            </select>
                                            <span class="d-flex badge costs-income-total __costs font-color-7 h-24 fs-08"><div class="costs-income-total__costs">{{ $total_contracts_costs }}</div><div class="costs-income-total__income">0 SEK</div></span>

                                            <div class="dt-buttons">
                                                <button class="btn btn-outline-secondary buttons-html5 actives chart-costs dt-buttons__costs" tabindex="0" aria-controls="costs" type="button">
                                                    <span>{{ __('dashboard.button_costs') }}</span>
                                                </button>
                                                <button class="btn btn-outline-secondary buttons-html5 chart-costs dt-buttons__income" tabindex="1" aria-controls="income" type="button">
                                                    <span>{{ __('dashboard.button_income') }}</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="analitycs-blocks__wrapper costs" id="scrollable-costs-wrapper">
                                        @foreach($foldersWithContractData as $folder)
                                            <div class="analitycs-blocks__item @if(app()->getLocale() === 'sv') folder_sv @endif">
                                                <div class="analitycs-blocks__item--numbers">
                                                    <div class="analitycs-numbers__costs">{{ $folder->total_costs }}</div>
                                                    <div class="analitycs-numbers__income">{{ $folder->total_income }}</div>  <span>SEK</span>
                                                </div>
                                                <div class="analitycs-blocks__item--bar" style="border-color:{{ $folder->color }}">
                                                    <img src="{{ asset('assets/images/icons/types/' . $folder->icon) }}">
                                                    <!-- <i class="{{$folder->icon}}"></i> -->
                                                </div>
                                                {{-- <div class="analitycs-blocks__item--title {{ strtolower($folder->name) }}">{{ strtolower($folder->name) }}</div> --}}
                                                <div class="analitycs-blocks__item--title  {{ strtolower($folder->name) }}">
                                                    @if (app()->getLocale() === 'en')
                                                        {{ $folder->name }}
                                                    @else
                                                        {{ $folder->name_sv }}
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="scroll-hint scroll-right"><i class='bx bx-chevron-right'></i></div>
                                    <div class="scroll-hint scroll-left" style="display: none;"><i class='bx bx-chevron-left'></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade NotificationAlert" id="NotificationAlert" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-md NotificationAlert__wrapper">
                    <div class="modal-content">
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
        $('.chart-costs-heading .costs-income-total').addClass('font-color-7');
        $('.chart-costs-heading .costs-income-total').removeClass('font-color-4');
        $('.analitycs-blocks__wrapper').removeClass('income');
        $('.analitycs-blocks__wrapper').addClass('costs');
        $('.costs-income-total').removeClass('__income');
        $('.costs-income-total').addClass('__costs');
     });
     $('.dt-buttons__income').click(function(){
        $('.dt-buttons__costs').removeClass('actives');
        $('.dt-buttons__income').addClass('actives');
        // $('#ChooseMonthlyIncome').addClass('active');
        $('.chart-costs-heading .costs-income-total').removeClass('font-color-7');
        $('.chart-costs-heading .costs-income-total').addClass('font-color-4');
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

    $('.dshb-dropdown__btn').on('click', function() {
    $('.dshb-dropdown__btn').removeClass('active');
    $(this).addClass('active');
    });

    // Jab "costs" button par click ho
    $('.dt-buttons__costs').on('click', function() {
        // span se 'font-color-8' ko remove kar ke 'font-color-7' add karo
        $('.costs-income-total').removeClass('font-color-gr').addClass('font-color-7');
    });

    // Jab "income" button par click ho
    $('.dt-buttons__income').on('click', function() {
        // span se 'font-color-7' ko remove kar ke 'font-color-8' add karo
        $('.costs-income-total').removeClass('font-color-7').addClass('font-color-gr');
    });
    document.addEventListener("DOMContentLoaded", function () {
    // Select elements
    const staticDemoDataDef = document.querySelector('.static-demo-data-def');
    const contractsWrapper = document.querySelector('.contracts-folders__wrapper');
    const navContractLink = document.querySelector('li a[href*="contract/list"]');

    // Check if elements exist on the page
    if (staticDemoDataDef && contractsWrapper && navContractLink) {
        // Hide static data by default
        staticDemoDataDef.style.display = 'none';

        // Show static data when clicking on contracts folders wrapper
        contractsWrapper.addEventListener('click', function () {
            staticDemoDataDef.style.display = 'block';
        });

        // Toggle static data when clicking on the navigation link
        navContractLink.addEventListener('click', function () {
            staticDemoDataDef.style.display =
                staticDemoDataDef.style.display === 'none' ? 'block' : 'none';
        });
    }
});

    </script>

    <script>
        $(document).ready(function () {
            // Toggle dropdown with smooth slide effect
            $('.contracts-folders__change-folders').on('click', function (event) {
                event.stopPropagation(); // Prevent immediate close
                $(this).find('.edit-dropdown-list').slideToggle(200); // Adjust duration for smoothness
            });

            // Hide dropdown smoothly when clicking outside
            $(document).on('click', function () {
                $('.edit-dropdown-list').slideUp(200);
            });
        });
    </script>

    <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <script src="{{URL::asset('assets/plugins/chartjs/js/chart.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/raphael/raphael-min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/morris/js/morris.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/chartjs/js/chartjs-plugin-datalabels.min.js')}}"></script>
    <script src="assets/js/index.js"></script>
    @endsection
