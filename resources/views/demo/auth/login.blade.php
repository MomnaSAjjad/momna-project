@extends('layouts.unlogged')
@section('css')
@endsection
@section('content')
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
                                            <!-- <img src="{{URL::asset('assets/images/logo-img.png')}}" width="180" alt=""> -->
                                            <h2 class="text-primary auth-cover-right__title">Välkommen</h2>
                                        </div>
                                        <div class="text-center mb-5">
                                            <p class="mb-0 text-primary auth-cover-right__subtitle">Logga in på ditt konto</p>
                                        </div>
                                        <div class="form-body">
                                            <form class="row g-3" method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="col-12">
                                                    <label for="username" class="form-label">E-post</label>
                                                    <!-- <input type="email" class="form-control" id="inputEmailAddress" placeholder="Email Address"> -->
                                                    <!-- <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="{{ __('login.email') }}"> -->
                                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="" required autocomplete="username" autofocus placeholder="{{ __('login.email') }}">
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputChoosePassword" class="form-label">Lösenord</label>
                                                    <div class="input-group" id="show_hide_password">

                                                        <!-- <input type="password" class="form-control border-end-0 @error('password') is-invalid @enderror" name="password" id="password" value="12345678" placeholder="{{ __('login.password') }}"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a> -->
                                                        <input type="password" class="form-control border-end-0 @error('password') is-invalid @enderror" name="password" id="password" value="" placeholder="{{ __('login.password') }}"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mt-0">
                                                   <!--  <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                        <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                                    </div> -->
                                                </div>
                                                <div class="col-md-6 text-end mt-1"> <a class="text-primary auth-cover-right__fp" href="{{ url('forgot-password') }}">Glömt ditt lösenord?</a>
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-primary text-upper btn-rounded btn-login">LOGGA IN</button>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-flex flex-column justify-content-center align-items-center mt-4">
                                                        <a href="#" class="btn text-upper social-login"><div class="social-login__btn"><img src="{{URL::asset('assets/images/icons/Google.svg')}}"> Logga in med Google</div></a>
                                                        <a href="#" class="btn text-upper social-login"><div class="social-login__btn"><img src="{{URL::asset('assets/images/icons/microsoft.svg')}}"> Logga in med Microsoft</div></a>
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
@endsection
