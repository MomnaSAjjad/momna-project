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
                                            <!-- <img src="{{URL::asset('assets/images/logo-img.png')}}" width="180" alt=""> -->
                                            <h2 class="text-primary auth-cover-right__title">Glömt ditt lösenord?</h2>
                                        </div>
                                        <div class="text-center mb-5">
                                            <p class="mb-0 text-primary auth-cover-right__subtitle">Ange din e-post som är kopplad till ditt konto så att vi kan skicka en länk där du skapar ett nytt lösenord.</p>
                                        </div>
                                        <div class="form-body">
                                            <form class="row g-3" method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="col-12">
                                                    <label for="username" class="form-label">E-post</label>
                                                    <!-- <input type="email" class="form-control" id="inputEmailAddress" placeholder="Email Address"> -->
                                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="{{ __('login.email') }}">
                                                </div>
                                                <div class="col-md-12 text-center mt-5">Har du inget konto? <a class="text-primary auth-cover-right__fp" href="{{ url('register') }}">Skapa ett här. </a>
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-primary text-upper btn-rounded">FORTSÄTT</button>
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
        </div>
  <!--end wrapper-->
@endsection
@section('js')
<script type="text/javascript">
  $(document).ready(function () {
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
