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

                    <div class="col-12 col-xl-6 col-xxl-6 auth-cover-right align-items-center justify-content-center">
                        <div class="row col-xl-8 col-xxl-8 col-12">
                        <div class="col mx-auto">
                            <div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
                                <div class="card-body p-sm-4">
                                    <div>
                                        <div class="mb-0 text-center logo-wrapper">
                                            <div class="container">
                                                @if(session('flash_message'))
                                                    <div class="alert alert-success" id="flashMessage">
                                                        {{ session('flash_message') }}
                                                    </div>
                                                @endif

                                                @if(session('info_message'))
                                                    <div class="alert alert-info" id="infoMessage" style="display: none;">
                                                        {{ session('info_message') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <!-- <img src="{{URL::asset('assets/images/logo-img.png')}}" width="180" alt=""> -->
                                            <h2 class="text-primary auth-cover-right__title">{{__('messages.Welcome')}}</h2>
                                        </div>
                                        <div class="text-center mb-5">
                                            <p class="mb-0 text-primary auth-cover-right__subtitle">{{__('messages.Log in to your account')}}</p>
                                        </div>
                                        <div class="form-body">
                                        {{-- <form action="{{ route('two_factor_verify') }}" method="POST">
                                            @csrf
                                            <div class="col-12">
                                                <label for="username" class="form-label">{{__('messages.Enter the 6 - digit code')}}</label>
                                                <input type="text" maxlength="6" name="verification_code" id="verification_code" class="form-control" required>
                                                <input type="hidden" name="email" id="email" class="form-control" value="@if(isset($_GET['token'])){{$_GET['token']}}@endif">

                                                @error('verification_code')
                                                    <small class="text-danger"> {{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-12 mt-4">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary text-upper btn-rounded btn-login">{{__('messages.Verify')}}</button>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-4 text-center">
                                                <p id="timer">{{__('messages.The code expires in ')}} <span id="countdown">60</span> {{__('messages. seconds')}}</p>
                                                <button type="button" id="resendButton" class="btn btn-secondary d-none" onclick="resendCode()">{{__('messages.Resend code')}}</button>
                                            </div>
                                        </form> --}}
                                        <form action="{{ route('two_factor_verify') }}" method="POST">
                                            @csrf
                                            <div class="col-12">
                                                <label for="verification_code" class="form-label">{{__('messages.Enter the 6 - digit code')}}</label>
                                                <input type="text" maxlength="6" name="verification_code" id="verification_code" class="form-control" required>
                                                <input type="hidden" name="email" id="email" class="form-control" value="@if(isset($_GET['token'])){{$_GET['token']}}@endif">

                                                @error('verification_code')
                                                    <small class="text-danger"> {{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-12 mt-4">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary text-upper btn-rounded btn-login">{{__('messages.Verify')}}</button>
                                                </div>
                                            </div>
                                            {{-- <div class="col-12 mt-4 text-center">
                                                <p id="timer">{{__('messages.The code expires in ')}} <span id="countdown">60</span> {{__('messages. seconds')}}</p>
                                                <button type="button" id="resendButton" class="btn btn-secondary d-none" onclick="resendCode()">{{__('messages.Resend code')}}</button>
                                            </div> --}}
                                            <div class="col-12 mt-4 text-center">
                                                <p id="timer">{{__('messages.The code expires in ')}} <span id="countdown">60</span> {{__('messages. seconds')}}</p>
                                                <p id="expiredMessage" class="text-danger d-none">{{__('messages.The time has been expired')}}</p>
                                                <button type="button" id="resendButton" class="btn btn-secondary d-none" onclick="resendCode()">{{__('messages.Resend code')}}</button>
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
        <script>
            // Check if the flash message is present
            const flashMessage = document.getElementById('flashMessage');
            const infoMessage = document.getElementById('infoMessage');
            // If the flash message exists, wait for it to disappear and then show the info message
            // if (flashMessage) {
            //     setTimeout(() => {
            //         flashMessage.style.display = 'none'; // Hide the flash message
            //         if (infoMessage) {
            //             infoMessage.style.display = 'block'; // Show the info message
            //         }
            //     }, 5000);
            // }
        </script>
{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        let countdownElement = document.getElementById('countdown');
        let resendButton = document.getElementById('resendButton');
        let countdown = 60;
        let timer;
        function startCountdown() {
            timer = setInterval(function () {
                countdown--;
                countdownElement.textContent = countdown;

                if (countdown <= 0) {
                    clearInterval(timer);
                    countdownElement.textContent = '0';
                    resendButton.classList.remove('d-none');
                }
            }, 1000);
        }
        startCountdown();
        document.querySelector('form').addEventListener('submit', function () {
            clearInterval(timer);
        });
    });

    function resendCode() {
        window.location.href = "{{ route('resend_code') }}?token={{ request()->get('token') }}";
        countdown = 60;
        document.getElementById('countdown').textContent = countdown;
        document.getElementById('resendButton').classList.add('d-none');
        startCountdown();
    }
</script> --}}
{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        let countdownElement = document.getElementById('countdown');
        let resendButton = document.getElementById('resendButton');
        let countdown = localStorage.getItem('countdown') ? parseInt(localStorage.getItem('countdown')) : 60;
        let timer;

        function startCountdown() {
            timer = setInterval(function () {
                countdown--;
                countdownElement.textContent = countdown;
                localStorage.setItem('countdown', countdown);
                if (countdown <= 0) {
                    clearInterval(timer);
                    countdownElement.textContent = '0';
                    resendButton.classList.remove('d-none');
                    localStorage.removeItem('countdown');
                }
            }, 1000);
        }
        countdownElement.textContent = countdown;
        if (countdown > 0) {
            startCountdown();
        } else {
            resendButton.classList.remove('d-none');
        }
        document.querySelector('form').addEventListener('submit', function () {
            clearInterval(timer);
            localStorage.removeItem('countdown');
        });
    });

    function resendCode() {
        window.location.href = "{{ route('resend_code') }}?token={{ request()->get('token') }}";
        countdown = 60;
        document.getElementById('countdown').textContent = countdown;
        document.getElementById('resendButton').classList.add('d-none');
        localStorage.setItem('countdown', countdown);
        startCountdown();
    }
</script> --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let countdownElement = document.getElementById('countdown');
        let expiredMessage = document.getElementById('expiredMessage');
        let resendButton = document.getElementById('resendButton');
        let countdown = localStorage.getItem('countdown') ? parseInt(localStorage.getItem('countdown')) : 60;
        let timer;

        function startCountdown() {
            timer = setInterval(function () {
                countdown--;
                countdownElement.textContent = countdown;
                localStorage.setItem('countdown', countdown);

                if (countdown <= 0) {
                    clearInterval(timer);
                    countdownElement.textContent = '0';
                    document.getElementById('timer').classList.add('d-none');
                    expiredMessage.classList.remove('d-none');
                    resendButton.classList.remove('d-none');
                    localStorage.removeItem('countdown');
                }
            }, 1000);
        }

        countdownElement.textContent = countdown;

        if (countdown > 0) {
            startCountdown();
        } else {
            document.getElementById('timer').classList.add('d-none');
            expiredMessage.classList.remove('d-none');
            resendButton.classList.remove('d-none');
        }
        document.querySelector('form').addEventListener('submit', function () {
            clearInterval(timer);
            localStorage.removeItem('countdown');
        });
    });

    function resendCode() {
        window.location.href = "{{ route('resend_code') }}?token={{ request()->get('token') }}";
        countdown = 60;
        document.getElementById('countdown').textContent = countdown;
        document.getElementById('timer').classList.remove('d-none');
        document.getElementById('expiredMessage').classList.add('d-none');
        document.getElementById('resendButton').classList.add('d-none');

        localStorage.setItem('countdown', countdown);
        startCountdown();
    }
</script>
  <!--end wrapper-->
@endsection
