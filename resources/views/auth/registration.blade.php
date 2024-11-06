@extends('layouts.signup')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css"
integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw=="
crossorigin="anonymous" referrerpolicy="no-referrer"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icons/4.1.6/css/flag-icons.min.css" rel="stylesheet" />
  <!--wrapper-->
  <style>
    input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  /* Firefox */
  input[type=number] {
    -moz-appearance: textfield;
  }

  .wizard,
.wizard .nav-tabs,
.wizard .nav-tabs .nav-item {
	position: relative;
}
.wizard .nav-tabs:after {
	content: "";
	width: 80%;
	border-bottom: solid 2px #ccc;
	position: absolute;
	margin-left: auto;
	margin-right: auto;
	top: 38%;
	z-index: -1;
}
.wizard .nav-tabs .nav-item .nav-link {
	width: 50px;
	height: 50px;
	margin-bottom: 6%;
	background: white;
	border: 2px solid #ccc;
	color: #ccc;
	z-index: 10;
}
.wizard .nav-tabs .nav-item .nav-link:hover {
	color: #333;
	border: 2px solid #333;
}
.wizard .nav-tabs .nav-item .nav-link.active {
	background: #fff;
	border: 2px solid #0dcaf0;
	color: #0dcaf0;
}
.wizard .nav-tabs .nav-item .nav-link:after {
	content: " ";
	position: absolute;
	left: 50%;
	transform: translate(-50%);
	opacity: 0;
	margin: 0 auto;
	bottom: 0px;
	border: 5px solid transparent;
	border-bottom-color: #0dcaf0;
	transition: 0.1s ease-in-out;
}

.nav-tabs .nav-item .nav-link.active:after {
	content: " ";
	position: absolute;
	left: 50%;
	transform: translate(-50%);
	opacity: 1;
	margin: 0 auto;
	bottom: 0px;
	border: 10px solid transparent;
	border-bottom-color: #0dcaf0;
}
.wizard .nav-tabs .nav-item .nav-link svg {
	font-size: 25px;
}
.nav-item .nav-link i{
    font-size: 22px;
}
.step-tab-height{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-height: 400px;
    max-height: 100%;
}

.pricing-nav-link{
    background-color: #fff !important;
    border-radius: 30px !important;
    margin-right: 10px;
    margin-bottom: 10px !important;
    border: none !important;
    transition: 0.2s all ease-in-out;
    min-width: 120px !important;
    max-width: 190px !important;
    font-size: 16px !important;
}
.pricing-nav-link:hover{
    background-color: #FED065 !important;
    border-radius: 30px !important;
    margin-right: 10px;
    margin-bottom: 10px !important;
    color: #fff !important;
    border: none !important;
}
.pricing-nav-link:focus{
    border: none !important;
    outline: none !important;
}
.pricing-nav-link.active{
    background-color: #FED065 !important;
    border-radius: 30px !important;
    margin-right: 10px;
    margin-bottom: 10px !important;
    color: #fff !important;
    border: none !important;
    min-width: 120px !important;
    max-width: 190px !important;
}
.pricing-nav-card{
    background-color: transparent !important;
    border-radius: 10px !important;
    padding: 10px;
    color: #fff !important;
    /* width: 100%; */
    margin-bottom: 10px !important;
    margin-top: 10px !important;
    border: 1px solid #fff !important;
    transition: 0.2s all ease-in-out;
}
.pricing-nav-card.active{
    background-color: #FED065 !important;
    border-radius: 10px !important;
    padding: 10px;
    color: #fff !important;
    /* width: 100%; */
    margin-bottom: 10px !important;
    margin-top: 10px !important;
    border: 1px solid #fff !important;
}
.pricing-nav-card.active h2{
    color: #000;
}
.pricing-nav-card:hover{
    background-color: #FED065 !important;
    border-radius: 10px !important;
    padding: 10px;
    color: #fff !important;
    /* width: 100%; */
    margin-bottom: 10px !important;
    margin-top: 10px !important;
    border: 1px solid #fff !important;
}
.pricing-nav-card:hover h2{
    color: #000;
}
.pricing-nav-card h2{
    color: #000;
    font-size: 18px;
}
.pricing-nav-card h3{
    color: #fff;
    font-size: 20px;
}
.pricing-nav-card:focus{
    border: none !important;
    outline: none !important;
}


.wizard-content-left {
  background-blend-mode: darken;
  background-color: rgba(0, 0, 0, 0.45);
  background-image: url("https://i.ibb.co/X292hJF/form-wizard-bg-2.jpg");
  background-position: center center;
  background-size: cover;
  height: 100vh;
  padding: 30px;
}
.wizard-content-left h1 {
  color: #ffffff;
  font-size: 38px;
  font-weight: 600;
  padding: 12px 20px;
  text-align: center;
}

.form-wizard {
  color: #888888;
  padding: 0px;
}
.form-wizard .wizard-form-radio {
  display: inline-block;
  margin-left: 5px;
  position: relative;
}
.form-wizard .wizard-form-radio input[type="radio"] {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  background-color: #dddddd;
  height: 25px;
  width: 25px;
  display: inline-block;
  vertical-align: middle;
  border-radius: 50%;
  position: relative;
  cursor: pointer;
}
.form-wizard .wizard-form-radio input[type="radio"]:focus {
  outline: 0;
}
.form-wizard .wizard-form-radio input[type="radio"]:checked {
  background-color: #fb1647;
}
.form-wizard .wizard-form-radio input[type="radio"]:checked::before {
  content: "";
  position: absolute;
  width: 10px;
  height: 10px;
  display: inline-block;
  background-color: #ffffff;
  border-radius: 50%;
  left: 1px;
  right: 0;
  margin: 0 auto;
  top: 8px;
}
.form-wizard .wizard-form-radio input[type="radio"]:checked::after {
  content: "";
  display: inline-block;
  webkit-animation: click-radio-wave 0.65s;
  -moz-animation: click-radio-wave 0.65s;
  animation: click-radio-wave 0.65s;
  background: #000000;
  content: '';
  display: block;
  position: relative;
  z-index: 100;
  border-radius: 50%;
}
.form-wizard .wizard-form-radio input[type="radio"] ~ label {
  padding-left: 10px;
  cursor: pointer;
}
.form-wizard .form-wizard-header {
  text-align: center;
  /* background-color: #F1F1F1;
    border-radius: 5px;
    padding: 15px 7px; */
}
.form-wizard .form-wizard-next-btn, .form-wizard .form-wizard-previous-btn, .form-wizard .form-wizard-submit {
  background-color: #d65470;
  color: #ffffff;
  display: inline-block;
  min-width: 100px;
  min-width: 120px;
  padding: 10px;
  text-align: center;
}
.form-wizard .form-wizard-next-btn:hover, .form-wizard .form-wizard-next-btn:focus, .form-wizard .form-wizard-previous-btn:hover, .form-wizard .form-wizard-previous-btn:focus, .form-wizard .form-wizard-submit:hover, .form-wizard .form-wizard-submit:focus {
  color: #ffffff;
  opacity: 1;
  text-decoration: none;
}
.form-wizard .wizard-fieldset {
  display: none;
}
.form-wizard .wizard-fieldset.show {
  display: block;
}
.form-wizard .wizard-form-error {
  display: none;
  background-color: #d70b0b;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  height: 2px;
  width: 100%;
}
.form-wizard .form-wizard-previous-btn {
  background-color: #fb1647;
}
.form-wizard .form-control {
  font-weight: 300;
  height: auto !important;
  padding: 12px;
  color: #000;
  background-color: #f1f1f1;
  border: none;
}
.form-wizard .form-control:focus {
  box-shadow: none;
}
.form-wizard .form-group {
  position: relative;
  margin: 25px 0;
}
.form-wizard .wizard-form-text-label {
  position: absolute;
  left: 10px;
  top: 16px;
  transition: 0.2s linear all;
}
.form-wizard .focus-input .wizard-form-text-label {
  color: #d65470;
  top: -18px;
  transition: 0.2s linear all;
  font-size: 12px;
}
.form-wizard .form-wizard-steps {
    margin: 0px 0px 20px 0px;
}
.form-wizard .form-wizard-steps li {
  width: 20%;
  float: left;
  position: relative;
}
.form-wizard .form-wizard-steps li::after {
  background-color: #f3f3f3;
  content: "";
  height: 5px;
  left: 0;
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  width: 100%;
  border-bottom: 1px solid #dddddd;
  border-top: 1px solid #dddddd;
}
.form-wizard .form-wizard-steps li span {
  background-color: #dddddd;
  border-radius: 50%;
  display: inline-block;
  height: 40px;
  line-height: 40px;
  position: relative;
  text-align: center;
  width: 40px;
  z-index: 1;
}
.form-wizard .form-wizard-steps li:last-child::after {
  width: 50%;
}
.form-wizard .form-wizard-steps li.active span, .form-wizard .form-wizard-steps li.activated span {
  background-color: #FED065;
  color: #ffffff;
}
.form-wizard .form-wizard-steps li.active::after, .form-wizard .form-wizard-steps li.activated::after {
  background-color: #FED065;
  left: 50%;
  width: 50%;
  border-color: #FED065;
}
.form-wizard .form-wizard-steps li.activated::after {
  width: 100%;
  border-color: #FED065;
}
.form-wizard .form-wizard-steps li:last-child::after {
  left: 0;
}
.form-wizard .wizard-password-eye {
  position: absolute;
  right: 32px;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
}
@keyframes click-radio-wave {
  0% {
    width: 25px;
    height: 25px;
    opacity: 0.35;
    position: relative;
  }
  100% {
    width: 60px;
    height: 60px;
    margin-left: -15px;
    margin-top: -15px;
    opacity: 0.0;
  }
}
@media screen and (max-width: 767px) {
  .wizard-content-left {
    height: auto;
  }
}
.error {
        color: red;
        font-size: 0.9em;
    }
.form-control {
            height: 58px;
            width: 100%;
            border: none;
            background-color: var(--solox-gray, #f9f6f1);
            padding-left: 30px;
            padding-right: 30px;
            outline: none;
            font-size: 14px;
            color: var(--solox-text, #838184);
            display: block;
            font-weight: 500;
        }
        .iti {
            width: 100%;

        }
        .iti__country-list{
            width: 24%;
        }
    .select2-container--default .select2-selection--single {
            height: 50%;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;

        }

    </style>
    <div class="wrapper">
        <div class="section-authentication-signin online-payment d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container">
                <div class="row basic-card__row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                    <div class="col col-xl-8 mx-auto me-0">

                        <div class="card basic-card">
                            <div class="card-body">
                                <div class=" p-3 rounded">
                                    <!-- <div class="text-center">
                                        <h3 class="basic-card__title mb-0">Your Contact Details</h3>
                                    </div> -->
                                    <div class="form-body d-none">
                                        <form class="row g-3" action="{{route('customers.store')}}" method="post">
                                            @csrf
                                            <div class="row m-0 g-3 form__1">
                                                <div class="col-12 mt-0">
                                                    <h4 class="text-left text-white mt-0 basic-card__title mb-1 m-0">Your Company Details</h4>
                                                </div>
                                                <div class="col-6">
                                                    <label for="inputCompanyName" class="form-label">Company *</label>
                                                    <input type="text" class="form-control required" name="name" value="{{ old('name') }}" maxlength="30"id="inputCompanyName" placeholder="e.g: Ericsson">
                                                    @error('name')
                                                        <div class="error text-white">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-6">
                                                    <label for="inputOrgName" class="form-label">Organization number</label>
                                                    <input type="text" class="form-control" name="org_num" value="{{ old('org_num') }}" maxlength="30" id="inputOrgName" placeholder="Enter organization number">
                                                    @error('org_num')
                                                    <div class="error text-white">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-6">
                                                    <label for="inputAddress" class="form-label">Address*</label>
                                                    <input type="text" class="form-control required" name="address" value="{{ old('address') }}" maxlength="150" id="inputAddress" placeholder="Write here address">
                                                    @error('address')
                                                    <div class="error text-white">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-6">
                                                    <label for="inputPostCode" class="form-label">Postal code*</label>
                                                    <input type="text" class="form-control required" id="inputPostCode" value="{{ old('postcode') }}" maxlength="30" name="postcode"  placeholder="Postal code" >
                                                    @error('postcode')
                                                    <div class="error text-white">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-6">
                                                    <label for="inputCity" class="form-label">City*</label>
                                                    <input type="text" class="form-control required" id="inputCity" name="city" value="{{ old('city') }}" maxlength="30" placeholder="City">
                                                    @error('city')
                                                    <div class="error text-white">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-6">
                                                    <label for="inputCountry" class="form-label">Country*</label>
                                                    <input type="text" class="form-control required" id="inputCountry" name="country" value="{{ old('country') }}" maxlength="30" placeholder="Country">
                                                    @error('country')
                                                    <div class="error text-white">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12 p-0 mt-5">
                                                    <div class="row m-0 justify-content-end">
                                                        <div class="col-md-3 text-center mt-2">
                                                            <button class="btn btn-primary text-upper btn-rounded btn-login w-100 btn-next">Next</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-0 g-3 form__2" style="display:none;">
                                                <div class="col-12">
                                                    <h4 class="text-left text-white mt-0 basic-card__title mb-1 m-0">Your Contact Details</h4>
                                                </div>
                                                <div class="col-6">
                                                    <label for="inputFirstName" class="form-label">First name*</label>
                                                    <input type="text" class="form-control required" id="inputFirstName" name="first_name"  value="{{ old('first_name') }}" maxlength="30" placeholder="First name">

                                                </div>
                                                <div class="col-6">
                                                    <label for="inputLastName" class="form-label">Last name*</label>
                                                    <input type="text" class="form-control required" id="inputLastName" name="last_name"  value="{{ old('last_name') }}" maxlength="30" placeholder="Last name">
                                                </div>
                                                <input type="hidden" id="fullName" name="name" value="">
                                                <div class="col-6">
                                                    <label for="inputFirstName" class="form-label">Username*</label>
                                                    <input type="text" class="form-control required" id="inputFirstName" name="username"  value="{{ old('username') }}" maxlength="30" placeholder="First name">

                                                </div>
                                                <div class="col-6">
                                                    <label for="inputWorkEmail" class="form-label">Work e-mail*</label>
                                                    <input type="email" class="form-control required" name="email" value="{{ old('email') }}" maxlength="30" id="inputWorkEmail" placeholder="Email">
                                                    @error('email')
                                                    <div class="error text-white">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-6">
                                                    <label for="inputTelephone" class="form-label">Telephone*</label>
                                                    <input type="number" class="form-control required" name="telephone" value="{{ old('telephone') }}" maxlength="30" id="inputTelephone" placeholder="Telephone">
                                                    @error('telephone')
                                                    <div class="error text-white">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12 mt-5">
                                                    <div class="row m-0 justify-content-end">
                                                    <div class="col-md-3 text-center">
                                                            <button class="btn btn-primary text-upper btn-rounded btn-login w-100 btn-back">Back</button>
                                                        </div>
                                                        <div class="col-md-3 text-center">
                                                            <button class="btn btn-primary text-upper btn-rounded btn-login w-100 btn-next">Next</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-0 form__3" style="display:none;">
                                                <div class="col-12">
                                                    <h4 class="text-left text-white mt-0 basic-card__title mb-1 m-0">Your Payment Details</h4>
                                                </div>
                                                <div class="col-12"><h2 class="text-center text-white mt-0 line-top-white-0 pt-4 mb-3">How do you want to pay?</h2></div>
                                                <!-- <span class="text-white mt-0">The subscription and the commitment period are renewed automatically after each period. Termination must reach Kontroll.se no later than 30 days before the start of the next period.</span> -->
                                                <div class="col-12 mt-3">
                                                    <div class="d-flex align-items-start justify-content-between gap-5">
                                                        <div class="d-flex flex-column">
                                                            <h4 class="text-white font-weight-600 mb-3">Card Payment</h4>
                                                            <div class="form-check mb-2">
                                                                <input class="form-check-input packageOptions checked" name="paymentOption" value="Card / Direct Debit|34 USD / month" type="radio" name="monthlyPackage" id="monthly">
                                                                <label class="form-check-label" for="monthly">
                                                                Direct Debit <strong class="ps-2">34 USD / month</strong>
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input packageOptions" type="radio" name="paymentOption" value="Card / Direct Debit|384 USD / year" name="yearlyPackage" id="yearly">
                                                                <label class="form-check-label" for="yearly">
                                                                Annual Payment <strong class="ps-2">384 USD  / year</strong>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <h4 class="text-white font-weight-600 mb-3">Invoice</h4>
                                                            <div class="form-check form-check-success">
                                                                <input class="form-check-input packageOptions" type="radio" name="paymentOption" value="Invoice|384 USD / year" name="invoicePackage" id="invoice">
                                                                <label class="form-check-label" for="invoice">
                                                                Annual Payment <strong class="ps-2">384 USD  / year</strong>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <p class="note note-monthly">We will automatically take SEK 349 per month from your bank card for a 12-month period. When your registration is complete, we will send your login details to your email address.</p>
                                                    <p class="note note-yearly d-none">When your payment is approved, we will send your personal login details to your email address.</p>
                                                    <p class="note note-invoice d-none">We send an invoice and your personal login details to your email address when your registration is complete.</p>
                                                </div>
                                                <div class="col-md-12 mt-5">
                                                    <div class="row m-0 justify-content-end">
                                                        <div class="col-md-3 text-center">
                                                            <button class="btn btn-primary text-upper btn-rounded btn-login w-100 btn-back">Back</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>


                                    <div class="container p-0 d-none">
                                        <div class="wizard my-0">
                                            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                                                <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip" data-bs-placement="top" title="Company Details">
                                                    <a class="nav-link active rounded-circle mx-auto d-flex align-items-center justify-content-center " href="#step1" id="step1-tab" data-bs-toggle="tab" role="tab" aria-controls="step1" aria-selected="true" title="Company Details">
                                                        <i class="fa fa-building-o" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip" data-bs-placement="top" title="Contact Details">
                                                    <a class="nav-link rounded-circle mx-auto d-flex align-items-center justify-content-center" href="#step2" id="step2-tab" data-bs-toggle="tab" role="tab" aria-controls="step2" aria-selected="false" title="Contact Details">
                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip" data-bs-placement="top" title="Payment Details">
                                                    <a class="nav-link rounded-circle mx-auto d-flex align-items-center justify-content-center" href="#step3" id="step3-tab" data-bs-toggle="tab" role="tab" aria-controls="step3" aria-selected="false" title="Payment Details">
                                                        <i class="fa fa-credit-card" aria-hidden="true"></i>

                                                    </a>
                                                </li>
                                                <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Details">
                                                    <a class="nav-link rounded-circle mx-auto d-flex align-items-center justify-content-center" href="#step4" id="step4-tab" data-bs-toggle="tab" role="tab" aria-controls="step4" aria-selected="false" title="Card Details">
                                                        <i class="fa fa-cc-visa" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip" data-bs-placement="top" title="Completed">
                                                    <a class="nav-link rounded-circle mx-auto d-flex align-items-center justify-content-center" href="#step5" id="step5-tab" data-bs-toggle="tab" role="tab" aria-controls="step5" aria-selected="false" title="Completed">
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content form-body" id="myTabContent">
                                                <form class="row g-3"  action="{{route('customers.store')}}" method="post">
                                                    @csrf
                                                    <div class="tab-pane fade show active" role="tabpanel" id="step1" aria-labelledby="step1-tab">
                                                        <div class="step-tab-height">
                                                            <div class="row m-0 g-3">
                                                                <div class="col-12 mt-3">
                                                                    <h4 class="text-left text-white mt-0 basic-card__title mb-1 m-0">Your Company Details</h4>
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <label for="inputCompanyName" class="form-label">Company name *</label>
                                                                    <input type="text" class="form-control required" name="name" value="{{ old('name') }}" maxlength="30"id="inputCompanyName" placeholder="e.g., Ericsson">
                                                                    @error('name')
                                                                        <div class="error text-white">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <label for="inputOrgName" class="form-label">Organization number</label>
                                                                    <input type="text" class="form-control" name="org_num" value="{{ old('org_num') }}" maxlength="30" id="inputOrgName" placeholder="12345678">
                                                                    @error('org_num')
                                                                    <div class="error text-white">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <label for="inputAddress" class="form-label">Address *</label>
                                                                    <input type="text" class="form-control required" name="address" value="{{ old('address') }}" maxlength="150" id="inputAddress" placeholder="Street Address, City, State/Province, Postal Code, Country">
                                                                    @error('address')
                                                                    <div class="error text-white">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <label for="inputPostCode" class="form-label">Postal code *</label>
                                                                    <input type="text" class="form-control required" id="inputPostCode" value="{{ old('postcode') }}" maxlength="30" name="postcode"  placeholder="123 45" >
                                                                    @error('postcode')
                                                                    <div class="error text-white">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <label for="inputCity" class="form-label">City *</label>
                                                                    <input type="text" class="form-control required" id="inputCity" name="city" value="{{ old('city') }}" maxlength="30" placeholder="e.g., Stockholm">
                                                                    @error('city')
                                                                    <div class="error text-white">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <label for="inputCountry" class="form-label">Country *</label>
                                                                    <input type="text" class="form-control required" id="inputCountry" name="country" value="{{ old('country') }}" maxlength="30" placeholder="e.g., Sweden">
                                                                    @error('country')
                                                                    <div class="error text-white">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-end">
                                                                <a class="btn btn-info next btn btn-primary text-upper btn-rounded btn-login btn-next">Next <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" role="tabpanel" id="step2" aria-labelledby="step2-tab">
                                                        <div class="step-tab-height">
                                                            <div class="row m-0 g-3">
                                                                <div class="col-12 mt-3">
                                                                    <h4 class="text-left text-white mt-0 basic-card__title mb-1 m-0">Your Contact Details</h4>
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <label for="inputFirstName" class="form-label">First name *</label>
                                                                    <input type="text" class="form-control required" id="inputFirstName" name="first_name"  value="{{ old('first_name') }}" maxlength="30" placeholder="e.g., John">

                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <label for="inputLastName" class="form-label">Last name *</label>
                                                                    <input type="text" class="form-control required" id="inputLastName" name="last_name"  value="{{ old('last_name') }}" maxlength="30" placeholder="e.g., Doe">
                                                                </div>
                                                                <input type="hidden" id="fullName" name="name" value="">
                                                                <div class="col-md-6 col-12 d-none">
                                                                    <label for="inputFirstName" class="form-label">Username*</label>
                                                                    <input type="text" class="form-control required" id="inputFirstName" name="username"  value="{{ old('username') }}" maxlength="30" placeholder="First name">

                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <label for="inputWorkEmail" class="form-label">E-mail *</label>
                                                                    <input type="email" class="form-control required" name="email" value="{{ old('email') }}" maxlength="30" id="inputWorkEmail" placeholder="e.g., name@example.com">
                                                                    @error('email')
                                                                    <div class="error text-white">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <label for="inputTelephone" class="form-label">Telephone *</label>
                                                                    <input type="number" class="form-control required" name="telephone" value="{{ old('telephone') }}" maxlength="30" id="inputTelephone" placeholder="e.g., +46 70 123 45 67">
                                                                    @error('telephone')
                                                                    <div class="error text-white">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-end">
                                                                <a class="btn btn-secondary previous btn btn-primary text-upper btn-rounded btn-login btn-back"><i class="fa fa-angle-left"></i> Back</a>
                                                                <a class="btn btn-info next btn btn-primary text-upper btn-rounded btn-login btn-next">Next <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" role="tabpanel" id="step3" aria-labelledby="step3-tab">
                                                        <div class="step-tab-height">
                                                            <div class="row m-0">
                                                                <div class="col-12 mt-3">
                                                                    <h4 class="text-left text-white mt-0 basic-card__title mb-1 m-0">How do you want to pay?</h4>
                                                                </div>
                                                                <!-- <div class="col-12"><h2 class="text-center text-white mt-0 line-top-white-0 pt-4 mb-3">How do you want to pay?</h2></div> -->
                                                                <!-- <span class="text-white mt-0">The subscription and the commitment period are renewed automatically after each period. Termination must reach Kontroll.se no later than 30 days before the start of the next period.</span> -->
                                                                <div class="col-12 mt-3">
                                                                    <div class="d-flex align-items-start justify-content-between gap-5">
                                                                        <div class="d-flex flex-column">
                                                                            <h4 class="text-white font-weight-600 mb-3">Card Payment</h4>
                                                                            <div class="form-check card-payment-card active mb-3">
                                                                                <input class="form-check-input packageOptions checked ms-0" name="paymentOption" value="Card / Direct Debit|34 USD / month" type="radio" name="monthlyPackage" id="monthly">
                                                                                <label class="form-check-label" for="monthly">
                                                                                    <div class="card-payment-card-text">
                                                                                        <h3> <i class="fa fa-credit-card" aria-hidden="true"></i>  Direct Debit</h3>
                                                                                        <strong class="ps-0">34 USD / month</strong>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check card-payment-card">
                                                                                <input class="form-check-input packageOptions" type="radio" name="paymentOption" value="Card / Direct Debit|384 USD / year" name="yearlyPackage" id="yearly">
                                                                                <label class="form-check-label" for="yearly">
                                                                                    <div class="card-payment-card-text">
                                                                                        <h3> <i class="fa fa-credit-card" aria-hidden="true"></i> Annual Payment</h3>
                                                                                        <strong class="ps-0">384 USD  / year</strong>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex flex-column">
                                                                            <h4 class="text-white font-weight-600 mb-3">Invoice</h4>
                                                                            <div class="form-check card-payment-card form-check-success">
                                                                                <input class="form-check-input packageOptions" type="radio" name="paymentOption" value="Invoice|384 USD / year" name="invoicePackage" id="invoice">
                                                                                <label class="form-check-label" for="invoice">
                                                                                    <div class="card-payment-card-text">
                                                                                        <h3> <i class="fa fa-credit-card" aria-hidden="true"></i> Annual Payment</h3>
                                                                                        <strong class="ps-0">384 USD  / year</strong>
                                                                                    </div>
                                                                                <!-- Annual Payment <strong class="ps-2">384 USD  / year</strong> -->
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 mt-4">
                                                                    <p class="note note-monthly mb-0">
                                                                        <i class="fa fa-info-circle" aria-hidden="true" style="font-size: 22px; color: #7265BC; margin-right: 8px;"></i>
                                                                        <span>
                                                                        Our payment partner STRIPE will deduct the amount every month for a months period of the amount 349 SEK from the bankcard number.
                                                                        </span>
                                                                    </p>
                                                                    <p class="note note-yearly d-none mb-0">
                                                                        <i class="fa fa-info-circle" aria-hidden="true" style="font-size: 22px; color: #7265BC; margin-right: 8px;"></i>
                                                                        <span>
                                                                            Our payment partner STRIPE will deduct the amount every month for a 12 months period of the amount 349 SEK from the bankcard number.
                                                                        </span>
                                                                    </p>
                                                                    <p class="note note-invoice d-none mb-0">
                                                                        <i class="fa fa-info-circle" aria-hidden="true" style="font-size: 22px; color: #7265BC; margin-right: 8px;"></i>
                                                                        <span>
                                                                            Our payment partner STRIPE will deduct the amount every month for a 12 months period of the amount 349 SEK from the bankcard number.
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-end">
                                                                <a class="btn btn-secondary previous btn btn-primary text-upper btn-rounded btn-login btn-back"><i class="fa fa-angle-left"></i> Back</a>
                                                                <a class="btn btn-info next btn btn-primary text-upper btn-rounded btn-login btn-next">Next <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="tab-pane fade" role="tabpanel" id="step4" aria-labelledby="step4-tab">
                                                    <form id="payment-form" action="{{ route('subscription.create') }}" method="POST">
                                                    @csrf
                                                        <div class="step-tab-height">
                                                            <div class="row m-0 g-3">
                                                                <div class="col-12 mt-3">
                                                                    <h4 class="text-left text-white mt-0 basic-card__title mb-1 m-0">Your Card Details</h4>
                                                                </div>

                                                                <div class="col-md-6 col-12">
                                                                    <label for="inputFirstName" class="form-label">Full name *</label>
                                                                    <input type="text" class="form-control required" id="inputFirstName" name="first_name"  value="{{ old('first_name') }}" maxlength="30" placeholder="Full Name (e.g., John Doe)">

                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <label for="inputLastName" class="form-label">Card Number *</label>
                                                                    <input type="text" class="form-control required" id="inputLastName" name="last_name"  value="{{ old('last_name') }}" maxlength="30" placeholder="1234 1234 1234 1234">
                                                                </div>
                                                                <input type="hidden" id="fullName" name="name" value="">
                                                                <div class="col-md-6 col-12">
                                                                    <label for="inputFirstName" class="form-label">Expiry Date *</label>
                                                                    <input type="text" class="form-control required" id="inputFirstName" name="username"  value="{{ old('username') }}" maxlength="30" placeholder="MM / YY">

                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <label for="inputWorkEmail" class="form-label">CVC *</label>
                                                                    <input type="email" class="form-control required" name="email" value="{{ old('email') }}" maxlength="3" id="inputWorkEmail" placeholder="CVC (e.g., 123)">
                                                                    @error('email')
                                                                    <div class="error text-white">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-end">
                                                                <a class="btn btn-secondary previous btn btn-primary text-upper btn-rounded btn-login btn-back"><i class="fa fa-angle-left"></i> Back</a>
                                                                <a class="btn btn-info next btn btn-primary text-upper btn-rounded btn-login btn-next">Submit <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" role="tabpanel" id="step5" aria-labelledby="step5-tab">
                                                    <div class="step-tab-height">
                                                        <div class="complete-section ">
                                                            <img src="/assets/images/wizard/thanku-img.png" alt="thanku-img">
                                                            <h3>Thank You!</h3>
                                                            <p>Your submission has been received. Please check your email.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- new  -->
                                    <section class="wizard-section">
                                        <div class="row no-gutters">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-wizard">
                                                    <div>
                                                        <div class="form-wizard-header">
                                                            <ul class="list-unstyled form-wizard-steps clearfix">
                                                                <li class="active">
                                                                    <span><i class="fa fa-building-o" aria-hidden="true"></i></span>
                                                                </li>
                                                                <li><span><i class="fa fa-user" aria-hidden="true"></i></span></li>
                                                                <li><span><i class="fa fa-credit-card" aria-hidden="true"></i></span></li>
                                                                <li><span><i class="fa fa-cc-visa" aria-hidden="true"></i></span></li>
                                                                <li><span><i class="fa fa-check" aria-hidden="true"></i></span></li>
                                                            </ul>
                                                        </div>
                                                        <!-- form start  -->
                                                    <form  id="myForm" class="row g-3" action="{{ route('customers.store') }}" method="post">
                                                               @csrf
                                                                <fieldset class="wizard-fieldset show">
                                                                    <div class="step-tab-height">
                                                                        <div class="row g-3">
                                                                            <div class="col-12 mt-4">
                                                                                <h4 class="text-left text-white mt-0 basic-card__title mb-1 m-0">Your Company Details</h4>
                                                                            </div>
                                                                            <div class="col-md-6 col-12">
                                                                                <label for="company" class="form-label">Company *</label>
                                                                                <input type="text" class="form-control required" name="company" value="{{ old('company') }}" maxlength="30" id="inputname" placeholder="e.g., Ericsson">
                                                                                @error('company')
                                                                                    <div class="error text-white">{{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6 col-12">
                                                                                <label for="org_num" class="form-label">Organization number</label>
                                                                                <input type="number" class="form-control" name="org_num" value="{{ old('org_num') }}" maxlength="30" id="inputOrgName" placeholder="12345678">
                                                                                @error('org_num')
                                                                                  <div class="error text-white">{{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6 col-12">
                                                                                <label for="inputAddress" class="form-label">Address *</label>
                                                                                <input type="text" class="form-control required" name="address" value="{{ old('address') }}" maxlength="150" id="inputAddress" placeholder="Street Address">
                                                                                @error('address')
                                                                                <div class="error text-white">{{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6 col-12">
                                                                                <label for="inputPostCode" class="form-label">Postal code *</label>
                                                                                <input type="number" class="form-control required" id="inputPostCode" value="{{ old('postcode') }}" maxlength="30" name="postcode"  placeholder="123 45" >
                                                                                @error('postcode')
                                                                                <div class="error text-white">{{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6 col-12">
                                                                                <label for="inputCity" class="form-label">City *</label>
                                                                                <input type="text" class="form-control required" id="inputCity" name="city" value="{{ old('city') }}" maxlength="30" placeholder="e.g., Stockholm">
                                                                                @error('city')
                                                                                <div class="error text-white">{{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6 col-12">
                                                                                <label for="countries" class="form-label">Country *</label>
                                                                                <select id="countries" name="country" class="form-control required">
                                                                                    <option value=""></option>
                                                                                </select>
                                                                                @error('country')
                                                                                    <div class="error text-danger">{{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                            {{-- <div class="col-md-6 col-12">
                                                                                <label for="inputCountry" class="form-label">Country *</label>
                                                                                <select id="countries" name="country" class="form-control  required">
                                                                                    <option value=""></option>
                                                                                </select>
                                                                                @error('country')
                                                                                    <div class="error text-danger">{{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                            <input type="hidden" id="selectedCountry" name="country"> --}}

                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group clearfix text-end m-0">
                                                                        <button class="form-wizard-next-btn float-right btn btn-primary text-upper btn-rounded btn-login btn-next m-0">Next</button>
                                                                        {{-- <button  class="form-wizard-next-btn float-right btn btn-primary text-upper btn-rounded btn-login btn-next m-0">Next</button> --}}
                                                                    </div>
                                                                </fieldset>
                                                                <fieldset class="wizard-fieldset">
                                                                    <div class="step-tab-height">
                                                                        <div class="row g-3">
                                                                            <div class="col-12 mt-4">
                                                                                <h4 class="text-left text-white mt-0 basic-card__title mb-1 m-0">Your Contact Details</h4>
                                                                            </div>
                                                                            <div class="col-md-6 col-12">
                                                                                <label for="inputFirstName" class="form-label">First name *</label>
                                                                                <input type="text" class="form-control required" id="inputFirstName" name="first_name"  value="{{ old('first_name') }}" maxlength="30" placeholder="e.g., Amna">

                                                                            </div>
                                                                            <div class="col-md-6 col-12">
                                                                                <label for="inputLastName" class="form-label">Last name *</label>
                                                                                <input type="text" class="form-control required" id="inputLastName" name="last_name"  value="{{ old('last_name') }}" maxlength="30" placeholder="e.g., LOKALER">
                                                                            </div>
                                                                            <input type="hidden" id="com_name" name="com_name" value="">
                                                                            <div class="col-md-6 col-12 d-none">
                                                                                <label for="username" class="form-label">Username*</label>
                                                                                <input type="text" class="form-control required" id="inputFirstName" name="username"  value="{{ old('username') }}" maxlength="30" placeholder="First name">
                                                                                @error('username')
                                                                                <div class="error text-white">{{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6 col-12">
                                                                                <label for="inputWorkEmail" class="form-label">E-mail *</label>
                                                                                <input type="email" class="form-control required" name="email" value="{{ old('email') }}" maxlength="30" id="inputWorkEmail" placeholder="e.g., name@example.com">
                                                                                @error('email')
                                                                                <div class="error text-white">{{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6 col-12">
                                                                                <label for="inputTelephone" class="form-label">Number *</label>
                                                                                <br>
                                                                                {{-- <input type="tel" name="phone" id="phone" class="form-control required"  value="{{ old('telephone') }}" maxlength="30"  placeholder="e.g., +46 70 123 45 67"> --}}
                                                                                <input type="tel" class="form-control required" name="mobile" value="{{ old('mobile') }}" maxlength="30" id="mobile" placeholder="70 123 45 67">
                                                                                @error('mobile')
                                                                                <div class="error text-white">{{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group clearfix text-end m-0">
                                                                        <a href="javascript:;" class="form-wizard-previous-btn float-left btn btn-primary text-upper btn-rounded btn-login btn-back m-0">Previous</a>
                                                                        <button type="submit" class="form-wizard-next-btn float-right btn btn-primary text-upper btn-rounded btn-login btn-next m-0">Next</button>
                                                                    </div>
                                                                </fieldset>
                                                                <fieldset class="wizard-fieldset">
                                                                    <div class="step-tab-height">
                                                                        <div class="row g-3">
                                                                            <div class="col-12 mt-4">
                                                                                <h4 class="text-left text-white mt-0 basic-card__title mb-1 m-0">How do you want to pay?</h4>
                                                                            </div>
                                                                            <!-- <div class="col-12"><h2 class="text-center text-white mt-0 line-top-white-0 pt-4 mb-3">How do you want to pay?</h2></div> -->
                                                                            <!-- <span class="text-white mt-0">The subscription and the commitment period are renewed automatically after each period. Termination must reach Kontroll.se no later than 30 days before the start of the next period.</span> -->
                                                                            <div class="col-12 mt-3">
                                                                                <div class="d-flex align-items-start justify-content-between gap-5">
                                                                                    <div class="d-flex flex-column">
                                                                                        <h4 class="text-white font-weight-600 mb-3">Card Payment</h4>
                                                                                        <div class="form-check card-payment-card active mb-3">
                                                                                            <input class="form-check-input packageOptions checked ms-0" name="paymentOption" value="Card / Direct Debit|34 USD / month" type="radio" name="monthlyPackage" id="monthly">
                                                                                            <label class="form-check-label" for="monthly">
                                                                                                <div class="card-payment-card-text">
                                                                                                    <h3> <i class="fa fa-credit-card" aria-hidden="true"></i>  Direct Debit</h3>
                                                                                                    <strong class="ps-0">34 USD / month</strong>
                                                                                                </div>
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check card-payment-card">
                                                                                            <input class="form-check-input packageOptions" type="radio" name="paymentOption" value="Card / Direct Debit|384 USD / year" name="yearlyPackage" id="yearly">
                                                                                            <label class="form-check-label" for="yearly">
                                                                                                <div class="card-payment-card-text">
                                                                                                    <h3> <i class="fa fa-credit-card" aria-hidden="true"></i> Annual Payment</h3>
                                                                                                    <strong class="ps-0">384 USD  / year</strong>
                                                                                                </div>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="d-flex flex-column">
                                                                                        <h4 class="text-white font-weight-600 mb-3">Invoice</h4>
                                                                                        <div class="form-check card-payment-card form-check-success">
                                                                                            <input class="form-check-input packageOptions" type="radio" name="paymentOption" value="Invoice|384 USD / year" name="invoicePackage" id="invoice">
                                                                                            <label class="form-check-label" for="invoice">
                                                                                                <div class="card-payment-card-text">
                                                                                                    <h3> <i class="fa fa-credit-card" aria-hidden="true"></i> Annual Payment</h3>
                                                                                                    <strong class="ps-0">384 USD  / year</strong>
                                                                                                </div>
                                                                                            <!-- Annual Payment <strong class="ps-2">384 USD  / year</strong> -->
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 mt-5">
                                                                                <p class="note note-monthly mb-0">
                                                                                    <i class="fa fa-info-circle" aria-hidden="true" style="font-size: 22px; color: #7265BC; margin-right: 8px;"></i>
                                                                                    <span>
                                                                                    Our payment partner STRIPE will deduct the amount every month for a months period of the amount 349 SEK from the bankcard number.
                                                                                    </span>
                                                                                </p>
                                                                                <p class="note note-yearly d-none mb-0">
                                                                                    <i class="fa fa-info-circle" aria-hidden="true" style="font-size: 22px; color: #7265BC; margin-right: 8px;"></i>
                                                                                    <span>
                                                                                        Our payment partner STRIPE will deduct the amount every month for a 12 months period of the amount 349 SEK from the bankcard number.
                                                                                    </span>
                                                                                </p>
                                                                                <p class="note note-invoice d-none mb-0">
                                                                                    <i class="fa fa-info-circle" aria-hidden="true" style="font-size: 22px; color: #7265BC; margin-right: 8px;"></i>
                                                                                    <span>
                                                                                        Our payment partner STRIPE will deduct the amount every month for a 12 months period of the amount 349 SEK from the bankcard number.
                                                                                    </span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group clearfix text-end m-0">
                                                                        <a href="javascript:;"   class="form-wizard-previous-btn float-left btn btn-primary text-upper btn-rounded btn-login btn-back m-0">Previous</a>
                                                                        <abutton type="submit"  class="form-wizard-next-btn float-right btn btn-primary text-upper btn-rounded btn-login btn-next m-0">Next</abutton>
                                                                    </div>
                                                                </fieldset>
                                                                <fieldset class="wizard-fieldset">
                                                                    <div class="step-tab-height">
                                                                        <div class="row g-3">
                                                                            <div class="col-12 mt-4">
                                                                                <h4 class="text-left text-white mt-0 basic-card__title mb-1 m-0">Your Card Details</h4>
                                                                            </div>
                                                                             <!-- Full Name Field -->
                                                                                <div class="col-md-6 col-12 mb-3">
                                                                                    <label for="fullName" class="form-label">Full Name *</label>
                                                                                    {{-- <label for="fullName" class="form-label">Full Name *</label> --}}
                                                                                    {{-- <input type="text" class="form-control required" id="inputname" name="fullName"
                                                                                        value="{{ old('fullName') }}" maxlength="30"
                                                                                        placeholder="Full Name (e.g., Amna LOKALER)"
                                                                                        pattern="[A-Za-z\s]+" title="Only letters and spaces are allowed"
                                                                                        required> --}}
                                                                                        <input type="text" class="form-control required" id="fullName"
                                                                                        name="fullName"  value="{{ old('fullName') }}"
                                                                                         maxlength="30" placeholder="Full Name (e.g., Amna LOKALER)">
                                                                                    @error('fullName')
                                                                                    <div class="error text-danger">{{ $message }}</div>
                                                                                    @enderror
                                                                                </div>
                                                                                <!-- Card Number Field -->
                                                                                <div class="col-md-6 col-12 mb-3">
                                                                                    <label for="inputCardNumber" class="form-label">Card Number *</label>
                                                                                    <input type="text" class="form-control required" id="inputCardNumber" name="card_number"
                                                                                        value="{{ old('card_number') }}" maxlength="19"
                                                                                        placeholder="1234 1234 1234 1234"
                                                                                        pattern="\d{4} \d{4} \d{4} \d{4}"
                                                                                        title="Card number must be in the format 1234 1234 1234 1234"
                                                                                        required>
                                                                                    @error('card_number')
                                                                                    <div class="error text-danger">{{ $message }}</div>
                                                                                    @enderror
                                                                                </div>
                                                                                <!-- Expiry Date Field -->
                                                                                <div class="col-md-6 col-12 mb-3">
                                                                                    <label for="inputExpiryDate" class="form-label">Expiry Date *</label>
                                                                                    <input type="text" class="form-control required" id="inputExpiryDate" name="expiry_date"
                                                                                        value="{{ old('expiry_date') }}" maxlength="5"
                                                                                        placeholder="MM / YY"
                                                                                        pattern="^(0[1-9]|1[0-2])\/\d{2}$"
                                                                                        title="Expiry date must be in MM / YY format (e.g., 12/23)"
                                                                                        required>
                                                                                    @error('expiry_date')
                                                                                    <div class="error text-danger">{{ $message }}</div>
                                                                                    @enderror
                                                                                </div>

                                                                                <!-- CVC Field -->
                                                                                <div class="col-md-6 col-12 mb-3">
                                                                                    <label for="inputCVC" class="form-label">CVC *</label>
                                                                                    <input type="text" class="form-control required" name="cvc" value="{{ old('cvc') }}"
                                                                                        maxlength="3" id="inputCVC"
                                                                                        placeholder="CVC (e.g., 123)"
                                                                                        pattern="\d{3}"
                                                                                        title="CVC must be 3 digits"
                                                                                        required>
                                                                                    @error('cvc')
                                                                                    <div class="error text-danger">{{ $message }}</div>
                                                                                    @enderror
                                                                                </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group clearfix text-end m-0">
                                                                        <button type="submit"  class="form-wizard-previous-btn float-left btn btn-primary text-upper btn-rounded btn-login btn-back m-0">Previous</button>
                                                                        {{-- <button type="submit" class="form-wizard-next-btn float-right btn btn-primary text-upper btn-rounded btn-login btn-next m-0">Order</button> --}}

                                                                        <button type="submit" class="btn btn-primary text-upper btn-rounded btn-login m-0">Submit</button>                                                                    </div>
                                                                </fieldset>
                                                    </form> 
                                                            <!-- <a href="javascript:;" class="form-wizard-submit float-right">Submit</a> -->
                                                                <!-- ye last sep pr aega jab submit k bd  -->
                                                            <fieldset class="wizard-fieldset">
                                                                    <div class="step-tab-height">
                                                                        <div class="complete-section ">
                                                                            <img src="/assets/images/wizard/thanku-img.png" alt="thanku-img">
                                                                            <h3>Thank You!</h3>
                                                                            <p>Your submission has been received. Please check your email.</p>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                    <!-- </form> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                     <!-- new -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-4 mx-auto ms-0">
                        <div class=" basic-card__second">
                            <div class="card-body pt-0 h-100">
                                <div class=" p-0 rounded">
                                    <div class="text-center">
                                        <h3 class="basic-card__sectitle pt-3">Your order</h3>
                                    </div>
                                    <!-- <div class="basic-card__seccontent mt-3"> -->
                                        <div class="basic-card__summary">
                                            <div class="basic-card__summary--line mt-3">
                                                <div class="d-flex justify-content-start font-weight-600">Subscription</div>
                                                <div class="d-flex justify-content-end">Kontroll</div>
                                            </div>
                                            <div class="basic-card__summary--line">
                                                <div class="d-flex justify-content-start font-weight-600">Price</div>
                                                <div class="d-flex justify-content-end">34 USD / month</div>
                                            </div>
                                            <div class="basic-card__summary--line">
                                                <div class="d-flex justify-content-start font-weight-600">Period</div>
                                                <div class="d-flex justify-content-end">12 months</div>
                                            </div>
                                            <div class="basic-card__summary--line">
                                                <div class="d-flex justify-content-start font-weight-600">Payment</div>
                                                <div class="d-flex justify-content-end basic-card__summary--pt">Card / Direct Debit </div>
                                            </div>
                                            <span class="pb-2 pt-3 d-flex note-label mt-5">The price is exclusive of VAT</span>
                                            <div class="basic-card__summary--total basic-card__summary--ps">34 USD / month</div>
                                        </div>
                                        <!-- <div class="d-flex justify-content-center mt-4 mb-0 ">
                                            <button type="submit" class="btn btn-primary basic-card__btn mb-0" id="orderButton" disabled>Order</button>
                                        </div> -->
                                </div>
                            <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row footer-bottom">
                    <div class="col-sm-6 d-flex pt-2 justify-content-start">
                        <img class="img-fluid logo-img" src="{{URL::asset('assets/images/kontroll-logo.svg')}}" alt="Kontroll">
                    </div>
                    <div class="col-sm-6 d-flex pt-2 justify-content-end">
                       <a class="btn p-0" href="#">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.21588 0H19.7841C20.637 0 21.455 0.338815 22.0581 0.941911C22.6612 1.54501 23 2.36298 23 3.21588V19.7841C23 21.5602 21.5602 23 19.7841 23H3.21588C1.44185 22.9951 0.00494654 21.5581 0 19.7841V3.21588C0.00494654 1.44185 1.44185 0.00494654 3.21588 0ZM19.7841 21.7136C20.8465 21.7059 21.7059 20.8465 21.7136 19.7841V3.21587C21.7059 2.15343 20.8465 1.29405 19.7841 1.28634H3.21587C2.15343 1.29405 1.29405 2.15343 1.28634 3.21587V19.7841C1.29405 20.8465 2.15343 21.7059 3.21587 21.7136H19.7841Z" fill="white"></path>
                                    <path d="M4.26562 9.88938C4.26562 9.17895 4.84155 8.60303 5.55198 8.60303C6.26241 8.60303 6.83833 9.17895 6.83833 9.88938V18.2507C6.83833 18.9611 6.26241 19.537 5.55198 19.537C4.84155 19.537 4.26563 18.9611 4.26563 18.2507L4.26562 9.88938Z" fill="white"></path>
                                    <circle cx="5.55198" cy="4.73899" r="1.28635" fill="white"></circle>
                                    <path d="M18.73 13.2625V18.2536C18.73 18.964 18.1541 19.5399 17.4437 19.5399C16.7332 19.5399 16.1573 18.964 16.1573 18.2536V13.2625C16.1573 12.1152 15.2272 11.1851 14.0799 11.1851C12.9325 11.1851 12.0024 12.1152 12.0024 13.2625V18.2536C12.0024 18.964 11.4265 19.5399 10.716 19.5399C10.0056 19.5399 9.42969 18.964 9.42969 18.2536V9.89228C9.44072 9.18646 10.0102 8.61695 10.716 8.60592C11.1599 8.59377 11.5747 8.82587 11.7966 9.21051C13.2359 8.39382 15.0012 8.4051 16.43 9.24012C17.8588 10.0751 18.7351 11.6076 18.73 13.2625Z" fill="white"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="row footer-copyright">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        Copyright © 2024 <a class="text-white" href="/">Kontroll.se</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end footer-copyright__links">
                        <ul>
                            <li><a target="_blank" class="text-white" href="https://kontroll.se/allmanna-villkor/">Allmänna villkor</a></li>
                            <li><a target="_blank" class="text-white" href="https://kontroll.se/cookies/">Cookies</a></li>
                            <li><a target="_blank" class="text-white" href="https://kontroll.se/integritetspolicy/">Integritetspolicy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  <!--end wrapper-->
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2-rc.1/js/select2.min.js" type="text/javascript"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js"
integrity="sha512-QMUqEPmhXq1f3DnAVdXvu40C8nbTgxvBGvNruP6RFacy3zWKbNTmx7rdQVVM2gkd2auCWhlPYtcW2tHwzso4SA=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"
integrity="sha512-hkmipUFWbNGcKnR0nayU95TV/6YhJ7J9YUAkx4WLoIgrVr7w1NYz28YkdNFMtPyPeX1FrQzbfs3gl+y94uZpSw=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/utils.min.js" integrity="sha512-lv6g7RcY/5b9GMtFgw1qpTrznYu1U4Fm2z5PfDTG1puaaA+6F+aunX+GlMotukUFkxhDrvli/AgjAu128n2sXw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<link rel="shortcut icon" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/img/flags.png"
type="image/x-icon">
<link rel="shortcut icon" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/img/flags@2x.png"
type="image/x-icon">
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script>
    $(document).ready(function () {
        // Password Show/Hide Toggle
        $("#show_hide_password a").on('click', function (event) {
            event.preventDefault();
            const passwordInput = $('#show_hide_password input');
            const passwordIcon = $('#show_hide_password i');

            if (passwordInput.attr("type") === "text") {
                passwordInput.attr('type', 'password');
                passwordIcon.addClass("bx-hide").removeClass("bx-show");
            } else if (passwordInput.attr("type") === "password") {
                passwordInput.attr('type', 'text');
                passwordIcon.removeClass("bx-hide").addClass("bx-show");
            }
        });

        // Handle payment option notes, checked state, and update payment summary
        $(".packageOptions").on('click', function (event) {
            event.preventDefault();

            // Hide all notes and remove checked state from all options
            $('.note').addClass('d-none').hide();
            $('.packageOptions').removeClass("checked");

            // Show the relevant note for the selected package option
            const noteClass = '.note-' + $(this).attr('id');
            $(this).addClass("checked");
            $(noteClass).removeClass('d-none').show(50);

            // Update Payment Summary Fields (Payment method and amount)
            const selectedValue = $(this).val(); // Assuming the radio button has a value in format "method|price"
            const paymentDetails = selectedValue.split('|'); // Split the value to get method and price

            // Update the payment method and total price fields
            $('.basic-card__summary--pt').text(paymentDetails[0]); // Payment method
            $('.basic-card__summary--total').text(paymentDetails[1]); // Payment amount
        });

        // Required Fields Validation for Submit Button
        const requiredFields = $('.required');
        const submitButton = $('#orderButton');

        // Function to check if all required fields are filled
        function checkRequiredFields() {
            let allFilled = true;

            requiredFields.each(function() {
                if (!$(this).val().trim()) {
                    allFilled = false;
                }
            });

            // Enable or disable the submit button based on the condition
            submitButton.prop('disabled', !allFilled);
        }

        // Listen for input changes on each required field
        requiredFields.on('input', function() {
            checkRequiredFields();
        });

        // Initial check in case some fields are already filled on page load
        checkRequiredFields();
    });
</script>
<script>
    function updateFullName() {
        const firstName = document.getElementById('inputFirstName').value;
        const lastName = document.getElementById('inputLastName').value;
        document.getElementById('com_name').value = firstName + ' ' + lastName;
    }
    document.getElementById('inputFirstName').addEventListener('input', updateFullName);
    document.getElementById('inputLastName').addEventListener('input', updateFullName);
</script>
<!-- <script>
    function updateFullName() {
        const firstName = document.getElementById('inputFirstName').value;
        const lastName = document.getElementById('inputLastName').value;
        document.getElementById('fullName').value = firstName + ' ' + lastName;
    }
    document.getElementById('inputFirstName').addEventListener('input', updateFullName);
    document.getElementById('inputLastName').addEventListener('input', updateFullName);
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form1 = document.querySelector('.form__1');
    const form2 = document.querySelector('.form__2');
    const form3 = document.querySelector('.form__3');

    // Starting state
    // form1.style.display = 'flex';
    // form2.style.display = 'none';
    // form3.style.display = 'none';

    // Buttons
    const next1 = document.querySelector('.form__1 .btn-next');  // Next button on form 1
    const next2 = document.querySelector('.form__2 .btn-next');  // Next button on form 2
    const back2 = document.querySelector('.form__2 .btn-back');  // Back button on form 2
    const back3 = document.querySelector('.form__3 .btn-back');

    // When next button on form 1 is clicked, show form 2
    next1.addEventListener('click', function(event) {
        event.preventDefault();
        form1.style.display = 'none';
        form2.style.display = 'flex';
    });

    // When next button on form 2 is clicked, show form 3
    next2.addEventListener('click', function(event) {
        event.preventDefault();
        form2.style.display = 'none';
        form3.style.display = 'flex';
    });

    // Back button to move from form 2 to form 1
    back2.addEventListener('click', function(event) {
        event.preventDefault();
        form2.style.display = 'none';
        form1.style.display = 'flex';
    });
    // Move back from Form 3 to Form 2 (not to Form 1)
    back3.addEventListener('click', function() {
        event.preventDefault();
        form3.style.display = 'none';
        form2.style.display = 'flex';  // Now this moves back to Form 2
    });
});
</script> -->

<script>
    $(document).ready(function () {
	//Enable Tooltips
	var tooltipTriggerList = [].slice.call(
		document.querySelectorAll('[data-bs-toggle="tooltip"]')
	);
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
		return new bootstrap.Tooltip(tooltipTriggerEl);
	});

	//Advance Tabs
	$(".next").click(function () {
		const nextTabLinkEl = $(".nav-tabs .active")
			.closest("li")
			.next("li")
			.find("a")[0];
		const nextTab = new bootstrap.Tab(nextTabLinkEl);
		nextTab.show();
	});

	$(".previous").click(function () {
		const prevTabLinkEl = $(".nav-tabs .active")
			.closest("li")
			.prev("li")
			.find("a")[0];
		const prevTab = new bootstrap.Tab(prevTabLinkEl);
		prevTab.show();
	});
});

</script>

<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('{{ config('services.stripe.key') }}');
    const elements = stripe.elements();

    // Create individual elements for card number, expiry, and CVC
    const cardNumber = elements.create('cardNumber', { style: { base: { fontSize: '16px', color: '#32325d', '::placeholder': { color: '#aab7c4' } } } });
    const cardExpiry = elements.create('cardExpiry', { style: { base: { fontSize: '16px', color: '#32325d', '::placeholder': { color: '#aab7c4' } } } });
    const cardCvc = elements.create('cardCvc', { style: { base: { fontSize: '16px', color: '#32325d', '::placeholder': { color: '#aab7c4' } } } });

    // Mount each element to its corresponding div
    cardNumber.mount('#card-number');
    cardExpiry.mount('#card-expiry');
    cardCvc.mount('#card-cvc');

    const cardButton = document.getElementById('card-button');
    const clientSecret = cardButton.dataset.secret;

    function toggleButtonState(isLoading) {
        const buttonText = cardButton.dataset.originalText || cardButton.innerHTML;

        if (isLoading) {
            cardButton.disabled = true;
            cardButton.dataset.originalText = buttonText;
            cardButton.innerHTML = buttonText + ' <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>';
        } else {
            cardButton.disabled = false;
            cardButton.innerHTML = buttonText;
        }
    }

    toggleButtonState(false);

    cardButton.addEventListener('click', async (e) => {
        e.preventDefault();
        toggleButtonState(true);

        const { setupIntent, error } = await stripe.confirmCardSetup(clientSecret, {
            payment_method: {
                card: cardNumber,
                billing_details: { name: document.getElementById('name').value }
            }
        });

        if (error) {
            alert(error.message);
            toggleButtonState(false);
        } else {
            document.getElementById('paymentMethodId').value = setupIntent.payment_method;
            document.getElementById('payment-form').submit();
        }
    });
</script>
<script>
    // Select all card-payment-card divs
    const paymentCards = document.querySelectorAll('.card-payment-card');

    // Function to update active class and checked state based on clicked card or radio input
    const updateActiveClass = (clickedCard) => {
        // Remove active class from all cards and uncheck all inputs
        paymentCards.forEach(card => {
            card.classList.remove('active');
            const input = card.querySelector('.form-check-input');
            if (input) {
                input.checked = false; // Uncheck the radio input
            }
        });

        // Add active class to the clicked card and check its input
        clickedCard.classList.add('active');
        const checkedInput = clickedCard.querySelector('.form-check-input');
        if (checkedInput) {
            checkedInput.checked = true; // Check the corresponding radio input
        }
    };

    // Add click event listener to each card
    paymentCards.forEach(card => {
        card.addEventListener('click', function() {
            updateActiveClass(this);
        });

        // Also add event listener for the radio input itself
        const radioInput = card.querySelector('.form-check-input');
        if (radioInput) {
            radioInput.addEventListener('click', function(event) {
                // Prevent click event from bubbling up to the card
                event.stopPropagation();
                updateActiveClass(card); // Update active class based on the card
            });
        }
    });
</script>

<script>
    jQuery(document).ready(function() {
	// click on next button
	jQuery('.form-wizard-next-btn').click(function() {
		var parentFieldset = jQuery(this).parents('.wizard-fieldset');
		var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
		var next = jQuery(this);
		var nextWizardStep = true;
		parentFieldset.find('.wizard-required').each(function(){
			var thisValue = jQuery(this).val();

			if( thisValue == "") {
				jQuery(this).siblings(".wizard-form-error").slideDown();
				nextWizardStep = false;
			}
			else {
				jQuery(this).siblings(".wizard-form-error").slideUp();
			}
		});
		if( nextWizardStep) {
			next.parents('.wizard-fieldset').removeClass("show","400");
			currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',"400");
			next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show","400");
			jQuery(document).find('.wizard-fieldset').each(function(){
				if(jQuery(this).hasClass('show')){
					var formAtrr = jQuery(this).attr('data-tab-content');
					jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
						if(jQuery(this).attr('data-attr') == formAtrr){
							jQuery(this).addClass('active');
							var innerWidth = jQuery(this).innerWidth();
							var position = jQuery(this).position();
							jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
						}else{
							jQuery(this).removeClass('active');
						}
					});
				}
			});
		}
	});
	//click on previous button
	jQuery('.form-wizard-previous-btn').click(function() {
		var counter = parseInt(jQuery(".wizard-counter").text());;
		var prev =jQuery(this);
		var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
		prev.parents('.wizard-fieldset').removeClass("show","400");
		prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show","400");
		currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',"400");
		jQuery(document).find('.wizard-fieldset').each(function(){
			if(jQuery(this).hasClass('show')){
				var formAtrr = jQuery(this).attr('data-tab-content');
				jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
					if(jQuery(this).attr('data-attr') == formAtrr){
						jQuery(this).addClass('active');
						var innerWidth = jQuery(this).innerWidth();
						var position = jQuery(this).position();
						jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
					}else{
						jQuery(this).removeClass('active');
					}
				});
			}
		});
	});
	//click on form submit button
	jQuery(document).on("click",".form-wizard .form-wizard-submit" , function(){
		var parentFieldset = jQuery(this).parents('.wizard-fieldset');
		var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
		parentFieldset.find('.wizard-required').each(function() {
			var thisValue = jQuery(this).val();
			if( thisValue == "" ) {
				jQuery(this).siblings(".wizard-form-error").slideDown();
			}
			else {
				jQuery(this).siblings(".wizard-form-error").slideUp();
			}
		});
	});
	// focus on input field check empty or not
	jQuery(".form-control").on('focus', function(){
		var tmpThis = jQuery(this).val();
		if(tmpThis == '' ) {
			jQuery(this).parent().addClass("focus-input");
		}
		else if(tmpThis !='' ){
			jQuery(this).parent().addClass("focus-input");
		}
	}).on('blur', function(){
		var tmpThis = jQuery(this).val();
		if(tmpThis == '' ) {
			jQuery(this).parent().removeClass("focus-input");
			jQuery(this).siblings('.wizard-form-error').slideDown("3000");
		}
		else if(tmpThis !='' ){
			jQuery(this).parent().addClass("focus-input");
			jQuery(this).siblings('.wizard-form-error').slideUp("3000");
		}
	});
});
function validateForm() {

var checkBox = document.getElementById("accept-policy");
var errorMessage = document.getElementById("error-message");

if (!checkBox.checked) {
    errorMessage.textContent = "You must agree to the terms and conditions.";
    return false;
} else {
    errorMessage.textContent = "";
    return true;
}
}
//countries dropdown
$(document).ready(function() {
    var options = [
            { id: 'AF', text: 'Afghanistan' }, { id: 'AX', text: 'Aland Islands' }, { id: 'AL', text: 'Albania' },
            { id: 'DZ', text: 'Algeria' }, { id: 'AS', text: 'American Samoa' }, { id: 'AD', text: 'Andorra' },
            { id: 'AO', text: 'Angola' }, { id: 'AI', text: 'Anguilla' }, { id: 'AQ', text: 'Antarctica' },
            { id: 'AG', text: 'Antigua And Barbuda' }, { id: 'AR', text: 'Argentina' }, { id: 'AM', text: 'Armenia' },
            { id: 'AW', text: 'Aruba' }, { id: 'AU', text: 'Australia' }, { id: 'AT', text: 'Austria' },
            { id: 'AZ', text: 'Azerbaijan' }, { id: 'BS', text: 'Bahamas' }, { id: 'BH', text: 'Bahrain' },
            { id: 'BD', text: 'Bangladesh' }, { id: 'BB', text: 'Barbados' }, { id: 'BY', text: 'Belarus' },
            { id: 'BE', text: 'Belgium' }, { id: 'BZ', text: 'Belize' }, { id: 'BJ', text: 'Benin' },
            { id: 'BM', text: 'Bermuda' }, { id: 'BT', text: 'Bhutan' }, { id: 'BO', text: 'Bolivia' },
            { id: 'BA', text: 'Bosnia And Herzegovina' }, { id: 'BW', text: 'Botswana' }, { id: 'BV', text: 'Bouvet Island' },
            { id: 'BR', text: 'Brazil' }, { id: 'IO', text: 'British Indian Ocean Territory' }, { id: 'BN', text: 'Brunei Darussalam' },
            { id: 'BG', text: 'Bulgaria' }, { id: 'BF', text: 'Burkina Faso' }, { id: 'BI', text: 'Burundi' },
            { id: 'KH', text: 'Cambodia' }, { id: 'CM', text: 'Cameroon' }, { id: 'CA', text: 'Canada' },
            { id: 'CV', text: 'Cape Verde' }, { id: 'KY', text: 'Cayman Islands' }, { id: 'CF', text: 'Central African Republic' },
            { id: 'TD', text: 'Chad' }, { id: 'CL', text: 'Chile' }, { id: 'CN', text: 'China' },
            { id: 'CX', text: 'Christmas Island' }, { id: 'CC', text: 'Cocos (Keeling) Islands' }, { id: 'CO', text: 'Colombia' },
            { id: 'KM', text: 'Comoros' }, { id: 'CG', text: 'Congo' }, { id: 'CD', text: 'Congo, Democratic Republic Of' },
            { id: 'CK', text: 'Cook Islands' }, { id: 'CR', text: 'Costa Rica' }, { id: 'CI', text: 'Cote D\'Ivoire' },
            { id: 'HR', text: 'Croatia' }, { id: 'CU', text: 'Cuba' }, { id: 'CY', text: 'Cyprus' },
            { id: 'CZ', text: 'Czech Republic' }, { id: 'DK', text: 'Denmark' }, { id: 'DJ', text: 'Djibouti' },
            { id: 'DM', text: 'Dominica' }, { id: 'DO', text: 'Dominican Republic' }, { id: 'EC', text: 'Ecuador' },
            { id: 'EG', text: 'Egypt' }, { id: 'SV', text: 'El Salvador' }, { id: 'GQ', text: 'Equatorial Guinea' },
            { id: 'ER', text: 'Eritrea' }, { id: 'EE', text: 'Estonia' }, { id: 'ET', text: 'Ethiopia' },
            { id: 'FK', text: 'Falkland Islands (Malvinas)' }, { id: 'FO', text: 'Faroe Islands' }, { id: 'FJ', text: 'Fiji' },
            { id: 'FI', text: 'Finland' }, { id: 'FR', text: 'France' }, { id: 'GF', text: 'French Guiana' },
            { id: 'PF', text: 'French Polynesia' }, { id: 'TF', text: 'French Southern Territories' }, { id: 'GA', text: 'Gabon' },
            { id: 'GM', text: 'Gambia' }, { id: 'GE', text: 'Georgia' }, { id: 'DE', text: 'Germany' },
            { id: 'GH', text: 'Ghana' }, { id: 'GI', text: 'Gibraltar' }, { id: 'GR', text: 'Greece' },
            { id: 'GL', text: 'Greenland' }, { id: 'GD', text: 'Grenada' }, { id: 'GP', text: 'Guadeloupe' },
            { id: 'GU', text: 'Guam' }, { id: 'GT', text: 'Guatemala' }, { id: 'GG', text: 'Guernsey' },
            { id: 'GN', text: 'Guinea' }, { id: 'GW', text: 'Guinea-Bissau' }, { id: 'GY', text: 'Guyana' },
            { id: 'HT', text: 'Haiti' }, { id: 'HM', text: 'Heard Island & Mcdonald Islands' }, { id: 'VA', text: 'Holy See (Vatican City State)' },
            { id: 'HN', text: 'Honduras' }, { id: 'HK', text: 'Hong Kong' }, { id: 'HU', text: 'Hungary' },
            { id: 'IS', text: 'Iceland' }, { id: 'IN', text: 'India' }, { id: 'ID', text: 'Indonesia' },
            { id: 'IR', text: 'Iran, Islamic Republic Of' }, { id: 'IQ', text: 'Iraq' }, { id: 'IE', text: 'Ireland' },
            { id: 'IM', text: 'Isle Of Man' }, { id: 'IL', text: 'Israel' }, { id: 'IT', text: 'Italy' },
            { id: 'JM', text: 'Jamaica' }, { id: 'JP', text: 'Japan' }, { id: 'JE', text: 'Jersey' },
            { id: 'JO', text: 'Jordan' }, { id: 'KZ', text: 'Kazakhstan' }, { id: 'KE', text: 'Kenya' },
            { id: 'KI', text: 'Kiribati' }, { id: 'KR', text: 'Korea' }, { id: 'KW', text: 'Kuwait' },
            { id: 'KG', text: 'Kyrgyzstan' }, { id: 'LA', text: 'Lao People\'s Democratic Republic' }, { id: 'LV', text: 'Latvia' },
            { id: 'LB', text: 'Lebanon' }, { id: 'LS', text: 'Lesotho' }, { id: 'LR', text: 'Liberia' },
            { id: 'LY', text: 'Libya' }, { id: 'LI', text: 'Liechtenstein' }, { id: 'LT', text: 'Lithuania' },
            { id: 'LU', text: 'Luxembourg' }, { id: 'MO', text: 'Macao' }, { id: 'MG', text: 'Madagascar' },
            { id: 'MW', text: 'Malawi' }, { id: 'MY', text: 'Malaysia' }, { id: 'MV', text: 'Maldives' },
            { id: 'ML', text: 'Mali' }, { id: 'MT', text: 'Malta' }, { id: 'MH', text: 'Marshall Islands' },
            { id: 'MQ', text: 'Martinique' }, { id: 'MR', text: 'Mauritania' }, { id: 'MU', text: 'Mauritius' },
            { id: 'YT', text: 'Mayotte' }, { id: 'MX', text: 'Mexico' }, { id: 'FM', text: 'Micronesia, Federated States Of' },
            { id: 'MD', text: 'Moldova, Republic Of' }, { id: 'MC', text: 'Monaco' }, { id: 'MN', text: 'Mongolia' },
            { id: 'ME', text: 'Montenegro' }, { id: 'MS', text: 'Montserrat' }, { id: 'MA', text: 'Morocco' },
            { id: 'MZ', text: 'Mozambique' }, { id: 'MM', text: 'Myanmar' }, { id: 'NA', text: 'Namibia' },
            { id: 'NR', text: 'Nauru' }, { id: 'NP', text: 'Nepal' }, { id: 'NL', text: 'Netherlands' },
            { id: 'NC', text: 'New Caledonia' }, { id: 'NZ', text: 'New Zealand' }, { id: 'NI', text: 'Nicaragua' },
            { id: 'NE', text: 'Niger' }, { id: 'NG', text: 'Nigeria' }, { id: 'NU', text: 'Niue' },
            { id: 'NF', text: 'Norfolk Island' }, { id: 'MP', text: 'Northern Mariana Islands' }, { id: 'NO', text: 'Norway' },
            { id: 'OM', text: 'Oman' }, { id: 'PK', text: 'Pakistan' }, { id: 'PW', text: 'Palau' },
            { id: 'PS', text: 'Palestine, State Of' }, { id: 'PA', text: 'Panama' }, { id: 'PG', text: 'Papua New Guinea' },
            { id: 'PY', text: 'Paraguay' }, { id: 'PE', text: 'Peru' }, { id: 'PH', text: 'Philippines' },
            { id: 'PN', text: 'Pitcairn' }, { id: 'PL', text: 'Poland' }, { id: 'PT', text: 'Portugal' },
            { id: 'PR', text: 'Puerto Rico' }, { id: 'QA', text: 'Qatar' }, { id: 'RE', text: 'Reunion' },
            { id: 'RO', text: 'Romania' }, { id: 'RU', text: 'Russian Federation' }, { id: 'RW', text: 'Rwanda' },
            { id: 'BL', text: 'Saint Barthélemy' }, { id: 'SH', text: 'Saint Helena' }, { id: 'KN', text: 'Saint Kitts And Nevis' },
            { id: 'LC', text: 'Saint Lucia' }, { id: 'MF', text: 'Saint Martin (French Part)' }, { id: 'SX', text: 'Saint Martin (Dutch Part)' },
            { id: 'PM', text: 'Saint Pierre And Miquelon' }, { id: 'VC', text: 'Saint Vincent And The Grenadines' },
            { id: 'WS', text: 'Samoa' }, { id: 'SM', text: 'San Marino' }, { id: 'ST', text: 'Sao Tome And Principe' },
            { id: 'SA', text: 'Saudi Arabia' }, { id: 'SN', text: 'Senegal' }, { id: 'RS', text: 'Serbia' },
            { id: 'SC', text: 'Seychelles' }, { id: 'SL', text: 'Sierra Leone' }, { id: 'SG', text: 'Singapore' },
            { id: 'SX', text: 'Sint Maarten (Dutch Part)' }, { id: 'SK', text: 'Slovakia' }, { id: 'SI', text: 'Slovenia' },
            { id: 'SB', text: 'Solomon Islands' }, { id: 'SO', text: 'Somalia' }, { id: 'ZA', text: 'South Africa' },
            { id: 'GS', text: 'South Georgia and the South Sandwich Islands' }, { id: 'KR', text: 'South Korea' },
            { id: 'SS', text: 'South Sudan' }, { id: 'ES', text: 'Spain' }, { id: 'LK', text: 'Sri Lanka' },
            { id: 'SD', text: 'Sudan' }, { id: 'SR', text: 'Suriname' }, { id: 'SJ', text: 'Svalbard And Jan Mayen' },
            { id: 'SZ', text: 'Swaziland' }, { id: 'SE', text: 'Sweden' }, { id: 'CH', text: 'Switzerland' },
            { id: 'SY', text: 'Syrian Arab Republic' }, { id: 'TW', text: 'Taiwan, Province Of China' },
            { id: 'TJ', text: 'Tajikistan' }, { id: 'TZ', text: 'Tanzania, United Republic Of' }, { id: 'TH', text: 'Thailand' },
            { id: 'TL', text: 'Timor-Leste' }, { id: 'TG', text: 'Togo' }, { id: 'TK', text: 'Tokelau' },
            { id: 'TO', text: 'Tonga' }, { id: 'TT', text: 'Trinidad And Tobago' }, { id: 'TN', text: 'Tunisia' },
            { id: 'TR', text: 'Turkey' }, { id: 'TM', text: 'Turkmenistan' }, { id: 'TC', text: 'Turks And Caicos Islands' },
            { id: 'TV', text: 'Tuvalu' }, { id: 'UG', text: 'Uganda' }, { id: 'UA', text: 'Ukraine' },
            { id: 'AE', text: 'United Arab Emirates' }, { id: 'GB', text: 'United Kingdom' }, { id: 'US', text: 'United States' },
            { id: 'UM', text: 'United States Minor Outlying Islands' }, { id: 'UY', text: 'Uruguay' }, { id: 'UZ', text: 'Uzbekistan' },
            { id: 'VU', text: 'Vanuatu' }, { id: 'VE', text: 'Venezuela' }, { id: 'VN', text: 'Viet Nam' },
            { id: 'VG', text: 'Virgin Islands, British' }, { id: 'VI', text: 'Virgin Islands, U.S.' }, { id: 'WF', text: 'Wallis And Futuna' },
            { id: 'EH', text: 'Western Sahara' }, { id: 'YE', text: 'Yemen' }, { id: 'ZM', text: 'Zambia' },
            { id: 'ZW', text: 'Zimbabwe' }
        ];
        $('#countries').select2({
        placeholder: '-Select Country-',
        data: options,
        templateResult: formatCountry
    });
    function formatCountry(country) {
        if (!country.id) {
            return country.text;
        }
        return $('<span class="flag-icon flag-icon-' + country.id.toLowerCase() + ' flag-icon-squared"></span>' +
                 '<span style="margin-left:10px;">' + country.text + '</span>');
    }
 //phone number dropdown
    const input = document.querySelector("#mobile");
    var iti = window.intlTelInput(input, {
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js",
        autoHideDialCode: true,
        autoPlaceholder: "ON",
        dropdownContainer: document.body,
        formatOnDisplay: true,
        hiddenInput: "mobile",
        initialCountry: "SE",
        placeholderNumberType: "MOBILE",
        separateDialCode: true
    });
    $('#countries').on('change', function() {
        var selectedCountryCode = $(this).val().toLowerCase();
        console.log("Selected country code: " + selectedCountryCode);

        if (selectedCountryCode) {
            iti.setCountry(selectedCountryCode);
        }
    });
    var previouslySelectedCountry = "{{ old('country') }}";
    if (previouslySelectedCountry) {
        $('#countries').val(previouslySelectedCountry).trigger('change');
    }
});


    document.addEventListener('DOMContentLoaded', function () {
        const nextButtons = document.querySelectorAll('.btn-next');
        const previousButtons = document.querySelectorAll('.btn-back');

        nextButtons.forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault();

                const currentFieldset = button.closest('fieldset');
                const inputs = currentFieldset.querySelectorAll('input, select');
                let valid = true;

                currentFieldset.querySelectorAll('.error').forEach(errorDiv => {
                    errorDiv.remove();
                });

                inputs.forEach(input => {
                    if (input.classList.contains('required')) {
                        if (!input.value.trim()) {
                            valid = false;
                            input.classList.add('is-invalid');
                            const errorDiv = document.createElement('div');
                            errorDiv.classList.add('error', 'text-danger');
                            errorDiv.textContent = `${input.previousElementSibling.innerText} is required.`;
                            input.parentElement.appendChild(errorDiv);
                        } else {
                            input.classList.remove('is-invalid');
                        }
                    }
                });
                const cardNumberInput = currentFieldset.querySelector('#inputCardNumber');
                const expiryInput = currentFieldset.querySelector('input[name="expiryDate"]');
                const cvcInput = currentFieldset.querySelector('#inputCVC');
                // Validate card number
                if (cardNumberInput) {
                    const cardNumberPattern = /^\d{4} \d{4} \d{4} \d{4}$/;
                    if (!cardNumberPattern.test(cardNumberInput.value.trim())) {
                        valid = false;
                        cardNumberInput.classList.add('is-invalid');
                        let errorDiv = cardNumberInput.parentElement.querySelector('.error');
                        if (!errorDiv) {
                            errorDiv = document.createElement('div');
                            errorDiv.classList.add('error', 'text-danger');
                            errorDiv.textContent = 'Please enter a valid card number in the format: 1234 1234 1234 1234.';
                            cardNumberInput.parentElement.appendChild(errorDiv);
                        }
                    }
                }
                // Validate expiry date
                if (expiryInput) {
                    const expiryPattern = /^(0[1-9]|1[0-2]) \/ \d{2}$/;
                    if (!expiryPattern.test(expiryInput.value.trim())) {
                        valid = false;
                        expiryInput.classList.add('is-invalid');
                        let errorDiv = expiryInput.parentElement.querySelector('.error');
                        if (!errorDiv) {
                            errorDiv = document.createElement('div');
                            errorDiv.classList.add('error', 'text-danger');
                            errorDiv.textContent = 'Please enter a valid expiry date in the format: MM / YY.';
                            expiryInput.parentElement.appendChild(errorDiv);
                        }
                    }
                }

                // Validate CVC
                if (cvcInput) {
                    const cvcPattern = /^\d{3}$/;
                    if (!cvcPattern.test(cvcInput.value.trim())) {
                        valid = false;
                        cvcInput.classList.add('is-invalid');
                        let errorDiv = cvcInput.parentElement.querySelector('.error');
                        if (!errorDiv) {
                            errorDiv = document.createElement('div');
                            errorDiv.classList.add('error', 'text-danger');
                            errorDiv.textContent = 'CVC must be exactly 3 digits.';
                            cvcInput.parentElement.appendChild(errorDiv);
                        }
                    }
                }
                if (valid) {
                    currentFieldset.classList.remove('show');
                    const nextFieldset = currentFieldset.nextElementSibling;
                    if (nextFieldset) {
                        nextFieldset.classList.add('show');
                    }
                }
            });
        });

        previousButtons.forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault();
                const currentFieldset = button.closest('fieldset');
                currentFieldset.classList.remove('show');
                const previousFieldset = currentFieldset.previousElementSibling;
                if (previousFieldset) {
                    previousFieldset.classList.add('show');
                }
            });
        });

        // Validate email format
        const emailInput = document.querySelector('#inputWorkEmail');
        emailInput.addEventListener('input', function () {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (emailInput.value && !emailPattern.test(emailInput.value)) {
                emailInput.classList.add('is-invalid');
                let errorDiv = emailInput.parentElement.querySelector('.error');
                if (!errorDiv) {
                    errorDiv = document.createElement('div');
                    errorDiv.classList.add('error', 'text-danger');
                    errorDiv.textContent = 'Please enter a valid email address.';
                    emailInput.parentElement.appendChild(errorDiv);
                }
            } else {
                emailInput.classList.remove('is-invalid');
                const errorDiv = emailInput.parentElement.querySelector('.error');
                if (errorDiv) {
                    errorDiv.remove();
                }
            }
        });
    });
</script>

<script>
    // Card Number Auto-formatting (e.g., 1234 1234 1234 1234)
    document.getElementById('inputCardNumber').addEventListener('input', function (e) {
        let value = e.target.value.replace(/\D/g, '').slice(0, 16);  // Remove non-digits and limit to 16 characters
        if (value.length > 4) value = value.replace(/(\d{4})(\d{1,4})/, '$1 $2');
        if (value.length > 9) value = value.replace(/(\d{4} \d{4})(\d{1,4})/, '$1 $2');
        if (value.length > 14) value = value.replace(/(\d{4} \d{4} \d{4})(\d{1,4})/, '$1 $2');
        e.target.value = value;
    });

    // Expiry Date Auto-formatting (e.g., 12/23)
    document.getElementById('inputExpiryDate').addEventListener('input', function (e) {
        let value = e.target.value.replace(/\D/g, '').slice(0, 4);  // Remove non-digits and limit to 4 characters
        if (value.length > 2) value = value.replace(/(\d{2})(\d{1,2})/, '$1/$2');
        e.target.value = value;
    });

    // CVC Auto-formatting (3 digits)
    document.getElementById('inputCVC').addEventListener('input', function (e) {
        let value = e.target.value.replace(/\D/g, '').slice(0, 3);  // Only allow 3 digits
        e.target.value = value;
    });


</script>
<script>
    $(document).ready(function() {
  $("#myForm").validate({
    rules: {
      company: {
        required: true,
        maxlength: 30
      },
      org_num: {
        required: true,
        number: true,
        maxlength: 30
      },
      address: {
        required: true,
        maxlength: 150
      },
      postcode: {
        required: true,
        number: true,
        maxlength: 30
      },
      city: {
        required: true,
        maxlength: 30
      },
      country: {
        required: true
      },
      first_name: {
        required: true,
        maxlength: 30
      },
      last_name: {
        required: true,
        maxlength: 30
      },
      email: {
        required: true,
        email: true,
        maxlength: 30
      },
      mobile: {
        required: true,
        number: true,
        maxlength: 30
      },
      fullName: {
        required: true,
        maxlength: 30
      },
      card_number: {
        required: true,
        creditcard: true,
        maxlength: 19
      },
      expiry_date: {
        required: true,
        date: true,
        maxlength: 5
      },
      cvc: {
        required: true,
        number: true,
        maxlength: 3
      }
    },
    messages: {
      company: {
        required: "Please enter your company name",
        maxlength: "Company name should not exceed 30 characters"
      },
      org_num: {
        required: "Please enter your organization number",
        number: "Organization number should be a number",
        maxlength: "Organization number should not exceed 30 characters"
      },
      address: {
        required: "Please enter your address",
        maxlength: "Address should not exceed 150 characters"
      },
      postcode: {
        required: "Please enter your postal code",
        number: "Postal code should be a number",
        maxlength: "Postal code should not exceed 30 characters"
      },
      city: {
        required: "Please enter your city",
        maxlength: "City should not exceed 30 characters"
      },
      country: {
        required: "Please select your country"
      },
      first_name: {
        required: "Please enter your first name",
        maxlength: "First name should not exceed 30 characters"
      },
      last_name: {
        required: "Please enter your last name",
        maxlength: "Last name should not exceed 30 characters"
      },
      email: {
        required: "Please enter your email",
        email: "Invalid email format",
        maxlength: "Email should not exceed 30 characters"
      },
      mobile: {
        required: "Please enter your mobile number",
        number: "Mobile number should be a number",
        maxlength: "Mobile number should not exceed 30 characters"
      },
      fullName: {
        required: "Please enter your full name",
        maxlength: "Full name should not exceed 30 characters"
      },
      card_number: {
        required: "Please enter your card number",
        creditcard: "Invalid card number",
        maxlength: "Card number should not exceed 19 characters"
      },
      expiry_date: {
        required: "Please enter your expiry date",
        date: "Invalid date format",
        maxlength: "Expiry date should not exceed 5 characters"
      },
      cvc: {
        required: "Please enter your CVC",
        number: "CVC should be a number",
        maxlength: "CVC should not exceed 3 characters"
      }
    }
  });
});
// Get all the form fields
const formFields = document.querySelectorAll('form input, form select');

// Get the next button
const nextButton = document.querySelector('.form-wizard-next-btn');

// Add an event listener to the next button
nextButton.addEventListener('click', (e) => {
  // Prevent the default form submission
  e.preventDefault();

  // Get the current form data
  const formData = new FormData();

  // Loop through each form field and add it to the formData
  formFields.forEach((field) => {
    formData.append(field.name, field.value);
  });

  // Save the formData to localStorage
  localStorage.setItem('formData', JSON.stringify(Object.fromEntries(formData)));

  // Validate the form fields
  const errors = validateFormFields();

  // If there are any errors, show them and prevent the form from proceeding
  if (errors.length > 0) {
    showErrors(errors);
    return;
  }

  // If all fields are valid, proceed to the next step
  proceedToNextStep();
});

// Function to validate the form fields
function validateFormFields() {
  const errors = [];

  // Loop through each form field and validate it
  formFields.forEach((field) => {
    if (field.required && field.value === '') {
      errors.push(`Please fill in the ${field.name} field.`);
    }

    // Add more validation logic here as needed
  });

  return errors;
}

// Function to show error messages
function showErrors(errors) {
  const errorElement = document.querySelector('.error');

  // Loop through each error and add it to the error element
  errors.forEach((error) => {
    const errorText = document.createTextNode(error);
    errorElement.appendChild(errorText);
  });
}

// Function to proceed to the next step
function proceedToNextStep() {
  // Get the current fieldset
  const currentFieldset = document.querySelector('.wizard-fieldset.show');

  // Hide the current fieldset
  currentFieldset.classList.remove('show');

  // Get the next fieldset
  const nextFieldset = currentFieldset.nextElementSibling;

  // Show the next fieldset
  nextFieldset.classList.add('show');
}
</script>

@endsection
