@extends('layouts.unlogged')
@section('css')
@endsection
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
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
                        {{-- Optional Language Switch --}}
                        <div class="row col-xl-8 col-xxl-8 col-12">
                        <div class="col mx-auto">
                            <div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
                                <div class="card-body p-sm-4">
                                    <div>
                                        <div class="mb-0 text-center logo-wrapper">
                                            <h2 class="text-primary auth-cover-right__title">{{__('messages.Forgot your password?')}}</h2>
                                        </div>
                                        <div class="text-center mb-5">
                                            <p class="mb-0 text-primary auth-cover-right__subtitle">{{__('messages.Enter your email associated with your account so we can send you a link to create a new password.')}}</p>
                                        </div>
                                        <div class="form-body mt-5">
                                            <form class="row g-3" method="POST" action="{{ route('updatePassword') }}">
                                                @csrf
                                                <input type="hidden" name="token" value="{{ $token }}">

                                                <div class="col-12">
                                                    <label for="email" class="form-label">{{__('messages.Email')}}</label>
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $email) }}" required readonly>
                                                    @error('email')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="col-12">
                                                    <label for="password" class="form-label">{{ __('messages.Password') }}</label>
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" maxlength="8" required>
                                                    @error('password')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="col-12">
                                                    <label for="password-confirm" class="form-label">{{ __('messages.Confirm Password') }}</label>
                                                    <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" maxlength="8" required>
                                                    @error('password_confirmation')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="col-12 mt-4">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-primary text-upper btn-rounded">{{ __('messages.Reset Password') }}</button>
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
