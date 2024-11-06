    @extends("layouts.app")
        @section("content")
        <!--start page wrapper -->
        <div class="page-wrapper register-agreement">
            <div class="page-content">
                <div class="d-flex justify-content-center">
                    <h5 class="mb-0 text-center mb-2rem mt-3 register-agreement__title pe-5 px-5">{{ __('contracts.register_title'); }}</h5>
                </div>
                <div class="agreements agreements-stack row row-cols-1 row-cols-md-5 row-cols-lg-5 row-cols-xl-5 justify-content-sm-start justify-content-xl-start justify-content-start justify-content-lg-start gap-2-0vw">
                    @foreach ($folders as $folder)
                        <div class="agreements-item col">
                            <div class="card h-100" style="border-color:{{ $folder->color  }}" onmouseover="this.style.background='{{ $folder->color  }}'" onmouseout="this.style.background='#fff'">
                                <div class="card-body">
                                    <div class="card-body__titlewrap">
                                        <div class="card-body__typeicon widgets-icons-2 rounded-circle text-white m-auto mt-3 mb-3">
                                            <!-- style="background-color:{{ $folder->color  }}" -->
                                            <img src="{{ asset('assets/images/icons/types/' . $folder->icon) }}">
                                        </div>
                                        <h5 class="card-title text-center" style="color:{{ $folder->color  }}">
                                            @if (app()->getLocale() === 'en')
                                            {{ $folder->name }}
                                        @else
                                            {{ $folder->name_sv }}
                                        @endif
                                        </h5>
                                        <div class="agreements-item__hovered">
                                            <ul>
                                                @foreach ($folder->subcategories as $subcategory)
                                                <li>
                                                    @if (app()->getLocale() === 'en')
                                                        {{ $subcategory->name }}
                                                    @else
                                                        {{ $subcategory->name_sv }}
                                                    @endif
                                                </li>
                                            @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="{{ url('contract/register/register-steps/' . $folder->id) }}" class="btn mt-3 p-0"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--end page wrapper -->
    @endsection

    @section("script")
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="{{URL::asset('assets/js/main.js')}}"></script>
    @endsection
