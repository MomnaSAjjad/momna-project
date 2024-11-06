@extends('layouts.unlogged')
@section('css')
@endsection
@section('content')
  <!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        @if(session()->has('error'))
                          <div class="alert alert-danger">
                              {{ session()->get('error') }}
                          </div>
                        @endif
                        <div class="mb-4 text-center">
                            <img src="{{URL::asset('assets/images/logo-img.png')}}" width="180" alt="">
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class=" p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">Sign in</h3>
                                        </p>
                                    </div>
                                    <div class="login-separater text-center mb-4"> <span> SIGN IN WITH EMAIL</span>
                                        <hr/>
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="col-12">
                                                <label for="username" class="form-label">Email Address</label>
                                                <!-- <input type="email" class="form-control" id="inputEmailAddress" placeholder="Email Address"> -->
                                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="{{ __('login.username') }}">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                                <div class="input-group" id="show_hide_password">

                                                    <input type="password" class="form-control border-end-0 @error('password') is-invalid @enderror" name="password" id="password" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 text-end"> <a href="{{ url('authentication-forgot-password') }}">Forgot Password ?</a>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
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
