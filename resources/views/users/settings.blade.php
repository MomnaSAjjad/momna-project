@extends("layouts.app")

@section("content")

<style>
.language-radio[type="radio"] {
  display: none;
}

.label-radio {
  display : flex;
  padding :10px;
  gap :10px;
  align-items : center
}

.container-btn {
  width :22px;
  aspect-ratio : 1;
  overflow : hidden;
  border-radius : 50%;
  /* box-shadow : 2px 5px 5px rgba(0,0,0,0.2); */
}

.cRadioBtn {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  aspect-ratio: 1;
  border-radius: 50%;
  background: #fff;
  position: relative;
  border: solid 3px #d4d7eb;
  box-sizing: border-box;
  transition: all 0.1s ease-in;
  cursor: pointer;

}

.cRadioBtn:hover {
  border: solid 5px #3B317A;
}

.check:checked + .label-radio > .container-btn > .cRadioBtn > .overlay {
  background: #fff;
  animation: shrink 0.3s ease-in-out forwards;
}

.check:checked + .label-radio > .container-btn  > .cRadioBtn {
  background: #3B317A;
  border-color: #3B317A;
}

.drops {
  position: absolute;
  background: #fff;
  top: -100%;
  left: 50%;
  transform: translate(-50%);
  border-radius: 50%;
  aspect-ratio: 1;
}

.lgDrop {
  width: 50%;
}

.xsDrop {
  width: 20%;
}

.mdDrop {
  width: 30%;
}

.language-radio:checked + .label-radio > .container-btn  > .cRadioBtn > .lgDrop {
  animation: drop 0.5s ease-in-out forwards;
}

.language-radio:checked + .label-radio > .container-btn  > .cRadioBtn > .mdDrop {
  animation: drop 0.8s ease-in forwards;
}

.language-radio:checked + .label-radio > .container-btn  > .cRadioBtn > .xsDrop {
  animation: drop 0.9s linear forwards;
}
.language__txt{
    cursor: pointer;
}
@keyframes drop {
  0% {
    top: -100%;
  }
  50% {
    top: -100%;
  }
  75% {
    top: 10%;
  }
  100% {
    top: 25%;
  }
}

@keyframes shrink {
  0% {
    width: 100%;
  }
  100% {
    width: 0px;
  }
}
html, body {
  scroll-behavior: auto;
  overflow-x: hidden;
}
</style>
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-end mb-3">
					<div class="breadcrumb-title pe-3 border-none font-16 ps-2"><strong>{{__('setting.User Setting')}}</strong></div>
					<div class="ps-3">
					</div>
				 	<div class="ms-auto d-flex align-items-center">
                        <a href="{{ url('/users') }}" class="btn btn-secondary pe-4 ps-4 me-0">{{__('setting.Back')}}</a>
				 	</div>
				</div>
			</div>
			 <div class="container user-card">
                <div class="main-body">
                    <div class="row m-0">
                        <div class="col-lg-8 mb-5">
                            <form action="{{ route('TwoFactor') }}" method="POST">
                                @csrf
                                <div class="row user-card__contracts">
                                    <div class="col-sm-12">
                                        <h5 class="mb-3 font-16">
                                            <strong>
                                                {{ auth()->user()->two_factor_auth ? __('setting.Turn-Off Two Factor Authentication(TFA)') : __('setting.Turn-On Two Factor Authentication(TFA)') }}
                                            </strong>
                                        </h5>
                                        <div class="card card-bordered mb-0">
                                            <div class="card-body card-body-2FA">
                                                <div class="bordered">
                                                    <label class="TFA-switch">
                                                        <input type="checkbox" name="two_factor_auth" id="twoFactorToggle" class="twoFactorToggle" value="1"
                                                            {{ auth()->user()->two_factor_auth ? 'checked' : '' }}
                                                            onchange="this.form.submit()">
                                                        <span class="TFA_slider round"></span>
                                                    </label>
                                                    <label for="twoFactorToggle" class="ml-3 cursor-pointer">
                                                        {{ __('setting.Secure your account with two-factor authentication for enhanced protection') }}
                                                    </label>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-8 mb-5">
                            <div class="payment-setting">
                                <h5 class="mb-3 font-16">
                                    <strong>{{__('setting.password_change')}}</strong></h5>
                                <div class="row m-0 card card-bordered flex-row">
                                    <div class="card-body col-md-12">
                                        <!-- <h5 class="mb-4 font-16">{{__('setting.Update your payment method')}}</h5> -->
                                        <form action="/change-password" class="row g-3" method="POST">
                                            @csrf
                                            <input type="hidden" name="" value="" autocomplete="off">
                                            <div class="col-md-4">
                                                <label for="old_password">{{__('setting.old_password')}}</label>
                                                <input id="old_password" type="password" class="form-control" maxlength="6" name="old_password" required autocomplete="" placeholder="***********">
                                                {{-- @error('old_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror --}}
                                            </div>
                                            <div class="col-md-4">
                                                <label for="new_password">{{__('setting.new_password')}}</label>
                                                <input id="new_password" type="password" class="form-control" maxlength="6" name="new_password" required autocomplete="" placeholder="***********">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="new_password_confirmation">{{__('setting.confrm_password')}}</label>
                                                <input id="new_password_confirmation" type="password" class="form-control" maxlength="6" name="new_password_confirmation" requiredautocomplete="" placeholder="***********">
                                                {{-- @error('new_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror --}}

                                            </div>
                                            <div class="col-12 text-end">
                                                <button type="submit" class="btn btn-primary">{{ __('setting.change_password') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 mb-5">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="mb-3 font-16">
                                        <strong>{{__('setting.Change Language')}}</strong>
                                    </h5>
                                    <div class="langauge-changer-setting">
                                        <div class="card card-bordered mb-0">
                                            <div class="card-body">
                                                <form action="{{ route('user.settings.language') }}" method="POST">
                                                    @csrf
                                                    <div class="bordered mb-3">
                                                        <label class="TFA-radio" value="sv">
                                                            <input type="radio" name="language" value="sv" onclick="this.form.submit()"
                                                                   {{ auth()->user()->language == 'sv' ? 'checked' : '' }}>
                                                            <img src="/assets/images/language-icon/sweden.png"  alt="sweden">
                                                            <span>{{ __('setting.Swedish') }}</span>
                                                        </label>
                                                    </div>

                                                    <div class="bordered">
                                                        <label class="TFA-radio" value="en">
                                                            <input type="radio" name="language" value="en" onclick="this.form.submit()"
                                                                   {{ auth()->user()->language == 'en' ? 'checked' : '' }}>
                                                            <img src="/assets/images/language-icon/united-kingdom.png"  alt="united-kingdom">
                                                            <span>{{ __('setting.English') }}</span>
                                                        </label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 mb-5">
                            <div class="payment-setting">
                                <h5 class="mb-3 font-16">
                                    <strong>{{__('setting.Subscription')}}</strong></h5>
                                <div class="row m-0 card card-bordered flex-row">
                                    <div class="card-body col-md-8">
                                        <ul class="biling-list-subscription">
                                            <li>
                                                <span>{{__('setting.Subscription')}}: </span> Kontroll
                                            </li>
                                            <!-- <li>
                                                <span>{{__('setting.Subscription')}}: </span>349 SEK /{{__('setting.Month (Basic Subscription)')}}
                                    2        </li> -->
                                            <!-- <li>
                                                <span>{{__('setting.Next Biling Date:')}}</span>Nov 10, 2024 05:56
                                            </li> -->
                                            <li>
                                                <span>{{__('setting.Price:')}}</span> 349 SEK
                                            </li>
                                            <!-- <li>
                                                <span>{{__('setting.Biling Period:')}} </span>{{__('setting.Monthly')}}
                                            </li> -->
                                            <li>
                                                <span>{{__('setting.Payment Period:')}} </span>{{__('setting.Monthly_Annualy')}}
                                            </li>
                                            <li>
                                                <span>{{__('setting.Payment Method:')}} </span>{{__('setting.Card Payment / Invoice')}}
                                            </li>
                                            <li>
                                                <span>{{__('setting.Next Billing Period:')}} </span>Nov 10, 2025
                                            </li>
                                            <!-- <li>
                                                {{__('setting.To cancel your subscription,')}}<a href="#0">{{__('setting.click here')}}</a>.
                                            </li>
                                            <li>
                                                {{__('setting.To permanently delete your account,')}}<a href="#0">{{__('setting.click here')}}</a>.
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 mb-5">
                            <div class="payment-setting">
                                <h5 class="mb-3 font-16">
                                    <strong>{{__('setting.Payment Details')}}</strong></h5>
                                <div class="row m-0 card card-bordered flex-row">
                                    <div class="card-body col-md-8">
                                        <h5 class="mb-4 font-16">{{__('setting.Update your payment method')}}</h5>
                                        <form class="row g-3" method="POST" action="">
                                            <input type="hidden" name="" value="" autocomplete="off">                                                <div class="col-md-6">
                                                <label for="username" class="form-label">{{__('setting.Name On Card')}}</label>
                                                <input id="username" type="text" class="form-control " name="username" value="" required="" autocomplete="username" placeholder="Enter Card Hold...">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="form-label">{{__('setting.Card Number')}}</label>
                                                <input id="" type="text" class="form-control " name="" value="" required="" maxlength="16"  autocomplete="" @if(!auth()) placeholder="{{__('setting.Enter Card Num...')}}" @else placeholder="************4672" @endif>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="form-label">{{__('setting.Expiry Month')}}</label>
                                                <input id="" type="text" class="form-control " name="" value="" required="" autocomplete="" placeholder="MM">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="form-label">{{__('setting.Expiry Year')}}</label>
                                                <input id="" type="text" class="form-control " name="" value="" required="" autocomplete="" placeholder="YYYY">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="form-label">{{__('setting.CVC')}}</label>
                                                <input id="" type="text" class="form-control " name="" value="" required="" autocomplete="" placeholder="ex.311">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-body col-md-4">
                                        <div class="paypal-wrap stripe">
                                            <img src="../assets/images/stripe-bg-logo.png" alt="stripe-bg">
                                                <div class="chngecredit-card-btn">
                                                    <input class="method_class  d-none " id="stripe" type="radio" name="default_method" value="stripe" checked="">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">{{__('setting.Update Card Details')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>

<!--end page wrapper -->

@endsection
@section("script")

<script>

 $('#flexSwitchCheckSuccess').click(function(){
    if( $('#flexSwitchCheckSuccess').is(':checked') ){
        $('.form-check-success .user-status-check').html('Active');
        $('.form-check-success .user-status-check').removeClass('font-color-7');
        $('.form-check-success .user-status-check').addClass('font-color-4');
    }else{
        $('.form-check-success .user-status-check').html('Inactive');
        $('.form-check-success .user-status-check').removeClass('font-color-4');
        $('.form-check-success .user-status-check').addClass('font-color-7');
    }
 });

// $( document ).ready(function() {
// 		$('.user-permissions__values--incl .permissions').css('pointer-events','none');
// 	$(function () {
// 		$('[data-bs-toggle="popover"]').popover();
// 		$('[data-bs-toggle="tooltip"]').tooltip();
// 	});
// 	$('[data-bs-toggle="popover"]').click(function(){
// 	    $('[data-bs-toggle="popover"]').not(this).popover('hide'); //all but this
// 	});
// 	$('#UserType1').click(function() {
// 	   if($('#UserType1').is(':checked')) {
// 	   		$('.user-permissions__values--incl .permissions').css('pointer-events','none');
// 	   }else{
// 	   	    $('.user-permissions__values--incl .permissions').css('pointer-events','all');
// 	   }
// 	});
// 	$('#UserType2').click(function() {
// 	   if($('#UserType2').is(':checked')) {
// 	   		$('.user-permissions__values--incl .permissions').css('pointer-events','all');
// 	   }else{
// 	   	    $('.user-permissions__values--incl .permissions').css('pointer-events','none');
// 	   }
// 	});
// 	$('.show-categories-list-popup').click(function() {
// 		$('#AddCategoryFirst').modal("hide");
// 		$('#AddCategorySecond').modal("show");
// 	});
// });
</script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<!-- <script>
    // Event listener for the toggle switch
    $('#twoFactorToggle').on('change', function() {
        // Check if the toggle is on or off
        var isTwoFactorEnabled = $(this).is(':checked');

        // Make an AJAX call to the API
        $.ajax({
            url: '/users/two-factor-auth',  // Your API endpoint
            method: 'POST',
            data: {
                two_factor_enabled: isTwoFactorEnabled
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  // CSRF token for Laravel if needed
            },
            success: function(response) {
                // Show success message using Toastr
                toastr.success(response.message, 'Two Factor Authentication status updated successfully');

                console.log(response.message);  // Handle success response
            },
            error: function(xhr) {
                toastr.error('Something went wrong. Please try again.', 'Error');

                console.error(xhr.responseText);
            }
        });
    });
</script> -->
{{-- <script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "timeOut": "20000",
        "extendedTimeOut": "10000"
    };
    @if (session('status'))
        toastr.success("{{ session('status') }}");
    @endif

    @if ($errors->has('old_password'))
        toastr.error("{{ $errors->first('old_password') }}");
    @endif
</script> --}}

<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "timeOut": "20000",
        "extendedTimeOut": "10000"
    };

    @if (session('status'))
        toastr.success("{{ session('status') }}");
    @endif

    @if ($errors->has('old_password'))
        toastr.error("{{ $errors->first('old_password') }}");
    @endif

    @if ($errors->has('new_password'))
        toastr.error("{{ $errors->first('new_password') }}");
    @endif
</script>


<script>
    window.history.pushState("", document.title, window.location.pathname);
    window.scrollTo(0, 0);
    document.documentElement.style.scrollBehavior = 'auto';

    $('.twoFactorToggle').on('change', function() {

        setTimeout(function() {
            var isTwoFactorEnabled = $('.twoFactorToggle').is(':checked');
            console.log("Two-factor authentication status:", isTwoFactorEnabled);
        }, 1000);
        $.ajax({
            url: '/users/two-factor-auth',
            method: 'POST',
            data: {
                two_factor_enabled: isTwoFactorEnabled
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (isTwoFactorEnabled) {
                    toastr.success('Two Factor Authentication turned on successfully.', 'Success');
                } else {
                    toastr.success('Two Factor Authentication turned off successfully.', 'Success');
                }

                console.log(response.message);
            },
            error: function(xhr) {
                toastr.error('Something went wrong. Please try again.', 'Error');
                console.error(xhr.responseText);
            }
        });
    });

</script>

<script>
    function setLanguage(language) {
        fetch('/set-language', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ locale: language })
        }).then(response => {
            if (response.ok) {
                window.location.reload();
            }
        }).catch(error => {
            console.error('Error setting language:', error);
        });
    }

</script>

@endsection
