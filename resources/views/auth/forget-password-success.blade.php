@extends('layouts.unlogged')
@section('css')
@endsection
@section('content')
  <!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-cover forgot-password-section">
            <div>
                <div class="row g-0">
                    <div class="col-12 col-xl-6 col-xxl-6 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">
                        <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0 login-left">
                            <div>
                                 <img src="{{URL::asset('assets/images/logo-kontroll.svg')}}" class="img-fluid auth-img-cover-login" width="650" alt="">
                            </div>
                        </div>
                    </div>
                        @if(session()->has('error'))
                          <div class="alert alert-danger">
                              {{ session()->get('error') }}
                          </div>
                        @endif
                    <div class="col-12 col-xl-6 col-xxl-6 auth-cover-right align-items-center justify-content-center">
                        <div class="row col-xl-8 col-xxl-8 col-12">
                        <div class="col mx-auto">
                            <div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
                                <div class="card-body p-sm-4">
                                    <div>
                                        <div class="mb-0 text-center logo-wrapper">
                                            <h2 class="text-primary auth-cover-right__title mb-5">{{__('messages.Link Sent!')}}</h2>
                                        </div>
                                        <div class="text-center mb-5">
                                            <p class="mb-0 text-primary auth-cover-right__subtitle">{{__('messages.We have sent you a recovery link Login by following the link')}}</p>
                                        </div>
                                        <div class="form-body">
                                            <!-- <form class="row g-3" method="POST" action="{{ route('login') }}"> -->
                                                <!-- @csrf -->
                                                <div class="col-12 mt-4">
                                                    <div class="d-grid">
                                                        <a class="btn btn-primary text-upper btn-rounded" href="{{ url('login') }}">{{__('messages.BACK TO THE HOME PAGE')}}</a>
                                                    </div>
                                                </div>
                                            <!-- </form> -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>


                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
  <!--end wrapper-->
@endsection
