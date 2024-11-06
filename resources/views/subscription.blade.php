@extends('layouts.signup')
@section('content')

<div class="content" style="background-color: #f8f9fa; padding: 50px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container" style="background-color: #ffffff; border-radius: 10px; padding: 40px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
                    <h2 class="text-center mb-4" style="color: #192f59;">Enter Payment Details</h2>
                    <form id="payment-form" action="{{ route('subscription.create') }}" method="POST">
                        @csrf
                        
                        <!-- User Name -->
                        <div class="form-group mb-4">
                            <label for="name" style="font-weight: 600; color: #555;">Full Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required style="border: 1px solid #ccc; border-radius: 4px; padding: 10px; background-color: #f9f9f9;">
                        </div>
                        
                        <!-- Card Number -->
                        <div class="form-group mb-4">
                            <label for="card-number" style="font-weight: 600; color: #555;">Card Number</label>
                            <div id="card-number" class="form-control" style="border: 1px solid #ccc; border-radius: 4px; padding: 10px; background-color: #f9f9f9;"></div>
                        </div>
                        
                        <!-- Expiry Date and CVC -->
                        <div class="form-row mb-4">
                            <div class="col">
                                <label for="card-expiry" style="font-weight: 600; color: #555;">Expiry Date</label>
                                <div id="card-expiry" class="form-control" style="border: 1px solid #ccc; border-radius: 4px; padding: 10px; background-color: #f9f9f9;"></div>
                            </div>
                            <div class="col">
                                <label for="card-cvc" style="font-weight: 600; color: #555;">CVC</label>
                                <div id="card-cvc" class="form-control" style="border: 1px solid #ccc; border-radius: 4px; padding: 10px; background-color: #f9f9f9;"></div>
                            </div>
                        </div>

                        <!-- Payment Method ID -->
                        <input type="hidden" name="paymentMethodId" id="paymentMethodId">

                        <!-- Submit Button -->
                        <button id="card-button" class="btn btn-primary btn-block" type="submit" data-secret="{{ $intent->client_secret }}" style="background-color: #192f59; border-color: #192f59; font-weight: bold; transition: all 0.3s ease;">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
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
@endsection
