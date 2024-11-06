<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="/assets/images/kontroll-logo.svg" class="logo-icon" alt="logo icon">
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <!-- <li class="menu-label">Superuser funcs</li> -->
     <!--    <li>
            <a href="/" target="_blank">
                <div class="parent-icon"><i class="bx bx-user-plus color-red"></i>
                </div>
                <div class="menu-title">Create customer</div>
            </a>
        </li> -->

<!--
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-group color-red"></i>
                </div>
                <div class="menu-title">Customers</div>
            </a>
             <ul>
                <li> <a href="{{ url('app-emailbox') }}"><i class="bx bx-right-arrow-alt"></i>List active customers</a>
                </li>
                <li> <a href="{{ url('app-emailbox') }}"><i class="bx bx-right-arrow-alt"></i>List inactive customers</a>
                </li>
                <li> <a href="{{ url('app-emailbox') }}"><i class="bx bx-right-arrow-alt"></i>Terminated customers</a>
                </li>
                <li> <a href="{{ url('app-emailbox') }}"><i class="bx bx-right-arrow-alt"></i>Search</a>
                </li>
            </ul>
        </li> -->
        <!-- <li>
            <a href="/" target="_blank">
                <div class="parent-icon"><i class="bx bx-rotate-right color-red"></i>
                </div>
                <div class="menu-title">Renewals</div>
            </a>
        </li> -->
        <!-- <li class="menu-label">Customers funcs</li> -->
        <li>
            <a href="{{ url('home') }}">
                <div class="parent-icon"><i class='bx bxs-dashboard color-black'></i>
                </div>
                <div class="menu-title">{{ __('general.nav.dashboard') }}</div>
            </a>
        </li>
        <li>
            <a href="{{ url('contract/list') }}" >
                <div class="parent-icon"><i class="bx bx-file color-black"></i>
                </div>
                <div class="menu-title">{{ __('general.nav.contracts') }}</div>
            </a>
        </li>
        {{-- <li>
            @role('superuser')
            <a href="{{ url('/permissions') }}" >
                <div class="parent-icon"><i class="bx bx-lock color-black"></i>
                </div>
                <div class="menu-title">{{ __('general.nav.permissions') }}</div>
            </a>
            @endrole
        </li> --}}
        <li>
            <a href="{{ url('reminders') }}" >
                <div class="parent-icon"><i class="bx bx-alarm color-black"></i>
                </div>
                <div class="menu-title">{{ __('general.nav.reminders') }}</div>
            </a>
        </li>
        <!-- <li> -->
           <!--  <a href="{{ url('costs') }}">
                <div class="parent-icon"><i class="bx bx-dollar-circle color-black"></i>
                </div>
                <div class="menu-title">Economy</div>
            </a> -->
           <!--   <ul>
                <li> <a class="mx-21" href="{{ url('app-emailbox') }}">Costs</a>
                </li>
                <li> <a class="mx-21" href="{{ url('app-emailbox') }}">Revenue</a>
                </li>
            </ul> -->
        <!-- </li> -->
         <li>
            <a href="{{ url('users') }}">
                <div class="parent-icon"><i class="bx bx-user color-black"></i>
                </div>
                <div class="menu-title">{{ __('general.nav.users') }}</div>
            </a>
        </li>
         <li>
            <a href="{{ url('archive') }}">
                <div class="parent-icon"><i class='bx bx-archive color-black'></i>
                </div>
                <div class="menu-title">{{ __('general.nav.archive') }}</div>
            </a>
        </li>
        <li>
            <a href="{{ url('address-book') }}">
                <div class="parent-icon"><i class='bx bx-book color-black'></i>
                </div>
                <div class="menu-title">{{ __('general.nav.address_book') }}</div>
            </a>
        </li>
        <li>
            <a href="{{ url('settings') }}">
                <div class="parent-icon"><i class='bx bx-cog color-black'></i>
                </div>
                <div class="menu-title">{{ __('general.nav.settings') }}</div>
            </a>
        </li>
        <li class="new-agreement mt-4">
            <a data-bs-toggle="modal" data-bs-target="#AddContractMethod">
            <!-- <a class="" href="{{ url('/contract/register') }}"> -->
                <div class="parent-icon"><i class="bx bx-plus color-black"></i>
                </div>
                <div class="menu-title color-black">{{ __('general.nav.add_contract') }}</div>
            </a>
        </li>
        @can('role-delete','role-edit','role-create','role-list')
        @endcan
    </ul>
    @role('superuser')
        <!-- <li class="mt-2">
            <a href="{{ url('customers') }}">
                <div class="parent-icon"><i class='bx bx-user-pin'></i>
                </div>
                <div class="menu-title">{{ __('general.nav.customers') }}</div>
            </a>
        </li>
        <li class="mt-2">
            <a href="{{ url('companies') }}">
                <div class="parent-icon"><i class='bx bx-briefcase'></i>
                </div>
                <div class="menu-title">{{ __('general.nav.companies') }}</div>
            </a>
        </li>
        <li class="mt-2">
            <a href="{{ url('categories') }}">
                <div class="parent-icon"><i class='bx bx-folder'></i>
                </div>
                <div class="menu-title">{{ __('general.nav.folders') }}</div>
            </a>
        </li>
        <li class="mt-2">
            <a href="{{ url('roles') }}">
                <div class="parent-icon"><i class="bx bx-group"></i>
                </div>
                <div class="menu-title">{{ __('general.nav.user_permissions') }}</div>
            </a>
        </li> -->


       <!--  <li style="position: absolute;bottom: 0;">
            <a href="/" target="_blank">
                <div class="parent-icon"><i class="bx bx-support"></i>
                </div>
                <div class="menu-title">Support</div>
            </a>
        </li> -->
        <!-- <div class="demo-version-inform mt-5">
            <span>{{ __('general.demo.line_1') }}</span>
            <span>{{ __('general.demo.line_2') }}</span>
            <span><a class="btn" href="{{ url('become-a-customer') }}">{{ __('general.demo.button') }}</a></span>
        </div> -->
     @endrole
     @if(isset($user_data))
        @if($user_data->id == '8')
        <div class="demo-version-inform mt-5">
            <span>{{ __('general.demo.line_1') }}</span>
            <span>{{ __('general.demo.line_2') }}</span>
            <span><a class="btn" href="{{ url('become-a-customer') }}">{{ __('general.demo.button') }}</a></span>
        </div>
        @endif
    @endif

    <!--end navigation-->
</div>
 <div class="modal fade" id="AddContractMethod" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4">
            <div class="d-flex justify-content-end">
                <button type="button" class="btn-close mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card p-4 w-100 pe-0 ps-0">
                    <h5 class="text-upper d-flex justify-content-center mb-0">{{ __('general.nav.Register your contracts') }}</h5>
                    <div class="d-flex justify-content-center gap-4 mt-5">
                        <a href="{{ url('contract/register') }}" class="btn btn-secondary pe-3 ps-3 me-0 add-contract-manually hover-scaled d-flex flex-column gap-1 pt-3 pb-3"><span class="text-upper">{{ __('general.nav.Add Manually') }}</span></a>
                        <a href="{{ url('contract/register/import') }}" class="btn btn-secondary pe-3 ps-3 me-0 add-contract-xls hover-scaled d-flex flex-column gap-1 pt-3 pb-3"><span class="text-upper">{{ __('general.nav.Import Excel List') }}</span></a>
                        <!-- <a href="{{ url('#') }}" class="btn btn-secondary pe-4 ps-4 me-0 add-contract-ai hover-scaled">Upload With AI</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end sidebar wrapper -->
