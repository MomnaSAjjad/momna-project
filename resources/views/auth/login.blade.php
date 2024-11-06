@extends('layouts.unlogged')
@section('css')
@endsection
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

  <!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-cover">
            <div>
                <div class="row g-0">
                    <div class="col-12 col-xl-6 col-xxl-6 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">
                        <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0 login-left">
                            <div>
                                 <a href="http://kontroll.se"><img src="{{URL::asset('assets/images/logo-kontroll.svg')}}" class="img-fluid auth-img-cover-login" width="650" alt=""></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xl-6 col-xxl-6 auth-cover-right align-items-center justify-content-center">
                        <div class="language-conv">
                            <div class="nav-wrapper">
                                <div class="sl-nav">
                                    <ul class="language-card">
                                        <li class="selected__name">
                                        <div class="d-flex align-items-center">
                                            <div class="flag-size">
                                                <img src="/assets/images/language-icon/{{ app()->getLocale() == 'sv' ? 'sweden.png' : 'united-kingdom.png' }}" class="sl-flag" alt="">
                                                <div id="{{ app()->getLocale() == 'sv' ? __('messages.Swedish') : __('messages.English') }}"></div>
                                            </div>
                                            <b class="active-display country-lng-name">{{ app()->getLocale() == 'sv' ? __('messages.Swedish') : __('messages.English') }}</b>
                                        </div>
                                        <div class="select-dropdown_arrow">
                                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                                        </div>
                                        <ul class="language__dropdown-show">
                                            <li onclick="setLanguages('sv')" class="@if(app()->getLocale() == 'sv') active-setlanguage @endif">
                                                <div class="sl-flag-0 flag-austria flag-size">
                                                    <img src="/assets/images/language-icon/sweden.png" class="sl-flag"  alt="sweden">
                                                    <div id="Swedish"></div>
                                                </div>
                                                <span class="{{ app()->getLocale() == 'sv' ? 'active' : '' }}">{{__('messages.Swedish')}}</span>
                                            </li>
                                            <li onclick="setLanguages('en')" class="@if(app()->getLocale() == 'en') active-setlanguage @endif">
                                                <div class="sl-flag-0 flag-de flag-size">
                                                    <img src="/assets/images/language-icon/united-kingdom.png" class="sl-flag" alt="united-kingdom">
                                                    <div id="English"></div>
                                                </div>

                                                <span class="{{ app()->getLocale() == 'en' ? 'active' : '' }}">{{__('messages.English')}}</span>
                                            </li>
                                        </ul>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row col-xl-8 col-xxl-8 col-12">
                        <div class="col mx-auto">
                            <div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
                                <div class="card-body p-sm-4">
                                    <div>
                                     @if (session('status'))
                                        <div class="alert alert-success" id="success-alert">
                                            {{ session('status') }}
                                        </div>
                                     @endif

                                        @if(session()->has('error'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('error') }}
                                        </div>
                                      @endif
                                        <div class="mb-0 text-center logo-wrapper">
                                            <!-- <img src="{{URL::asset('assets/images/logo-img.png')}}" width="180" alt=""> -->
                                            <h2 class="text-primary auth-cover-right__title">{{__('messages.Welcome')}}</h2>
                                        </div>
                                        <div class="text-center mb-5">
                                            <p class="mb-0 text-primary auth-cover-right__subtitle">{{__('messages.Log in to your account')}}</p>
                                        </div>
                                        <div class="form-body">
                                            {{-- <form class="row g-3" method="POST" action="{{ route('login_post') }}">
                                                @csrf
                                                <div class="col-12">
                                                    <label for="username" class="form-label">{{__('messages.Email')}}</label>
                                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="" required autocomplete="username" autofocus placeholder="{{ __('login.email') }}">
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputChoosePassword" class="form-label">{{__('messages.Password')}}</label>
                                                    <div class="input-group" id="show_hide_password">
                                                        <input type="password" class="form-control border-end-0 @error('password') is-invalid @enderror" name="password" id="password" value="" placeholder="{{ __('login.password') }}"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mt-0">
                                                   <!--  <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                        <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                                    </div> -->
                                                </div>
                                                <div class="col-md-6 text-end mt-1"> <a class="text-primary auth-cover-right__fp" href="{{ url('forgot-password') }}">{{__('messages.Forgot your password?')}}</a>
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-primary text-upper btn-rounded btn-login">{{__('messages.LOG IN')}}</button>
                                                    </div>
                                                </div>
                                               <!--  <div class="col-12">
                                                    <div class="d-flex flex-column justify-content-center align-items-center mt-4">
                                                        <a href="#" class="btn text-upper social-login"><div class="social-login__btn"><img src="{{URL::asset('assets/images/icons/Google.svg')}}"> Logga in med Google</div></a>
                                                        <a href="#" class="btn text-upper social-login"><div class="social-login__btn"><img src="{{URL::asset('assets/images/icons/microsoft.svg')}}"> Logga in med Microsoft</div></a>
                                                    </div>
                                                </div> -->
                                            </form> --}}
                                            <form class="row g-3" method="POST" action="{{ route('login_post') }}">
                                                @csrf

                                                <input type="hidden" name="set_lang" id="selected-language" value="{{ app()->getLocale() }}">
                                                <div class="col-12">
                                                    <label for="username" class="form-label">{{__('messages.Email')}}</label>
                                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" required autocomplete="username" autofocus placeholder="{{__('messages.Email')}}">
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputChoosePassword" class="form-label">{{__('messages.Password')}}</label>
                                                    <div class="input-group" id="show_hide_password">
                                                        <input type="password" class="form-control border-end-0 @error('password') is-invalid @enderror" name="password" id="password" placeholder="{{ __('messages.Password') }}">
                                                        <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                    </div>
                                                </div> <div class="col-md-6 mt-0">
                                                 </div>
                                                 <div class="col-md-6 text-end mt-1"> <a class="text-primary auth-cover-right__fp" href="{{ url('forgot-password') }}">{{__('messages.Forgot your password?')}}</a>
                                                 </div>


                                                <div class="col-12 mt-4">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-primary text-upper btn-rounded btn-login">{{__('messages.LOG IN')}}</button>
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


                    </div>
                </div>
                <!--end row-->
            </div>
            <input type="hidden" name="loginType" value="{{ $type }}">
        </div>
  <!--end wrapper-->
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
        if($('input[name=loginType]').val() == 1){
            $('input[name=username]').val('Demo');
            $('input[name=password]').val('Demo');
            $('.btn-login').trigger('click');
        }

      $("#show_hide_password a").on('click', function (event) {
          event.preventDefault();
          if ($('#show_hide_password input').attr("type") == "text") {
              $('#show_hide_password input').attr('type', 'password');
              $('#show_hide_password i').addClass("bx-hide");
              $('#show_hide_password i').removeClass("bx-show");
          } else if ($('#show_hide_password input').attr("type") == "password") {
              $('#show_hide_password input').attr('type', 'text');
              $('#show_hide_password i').removeClass("bx-hide");
              $('#show_hide_password i').addClass("bx-show");
          }
      });
  });
</script>
{{-- <script>
$(function(){
    $('.selectpicker').selectpicker();
});
</script> --}}
<script>
    function setLanguages(locale) {
        document.getElementById('selected-language').value = locale;
        $.ajax({
            type: "POST",
            url: "{{ route('set.languageszz') }}",
            data: {
                locale: locale,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                if (response.success) {
                    location.reload();
                }
            },
            error: function(xhr) {
                console.error('Error changing language:', xhr);
            }
        });
    }
</script>
<script>
    $(document).click(function(event) {
        // Agar click .selected__name ya .language__dropdown-show ke andar nahi hai
        if (!$(event.target).closest('.selected__name, .language__dropdown-show').length) {
            $(".language__dropdown-show").hide(); // Dropdown ko hide kar do
            $(".fa-caret-down").removeClass("rotate"); // Rotate class ko bhi remove kar do
        }
    });

    $(".selected__name").click(function(event) {
        event.stopPropagation(); // Ye ensure karega ke click event document par bubble nahi hoga
        $(".language__dropdown-show").toggle(); // Dropdown ko toggle karne ke liye
        $(".fa-caret-down").toggleClass("rotate"); // Rotate class ko toggle karne ke liye
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var successAlert = document.getElementById('success-alert');
        if (successAlert) {
            setTimeout(function() {
                successAlert.style.transition = "opacity 0.5s ease";
                successAlert.style.opacity = "0";
                setTimeout(function() {
                    successAlert.remove();
                }, 500);
            }, 5000);
        }
    });
</script>
@endsection
