<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        />
        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Alpine Js & Stripe Js-->
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://js.stripe.com/v3/"></script>
    </head>
    <body class="antialiased max-w-7xl mx-auto">
        <div class="min-h-[calc(100vh-64px)]">
            <!-- Header -->
            <header class="bg-white border-b">
                <div class="mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h1 class="font-bold text-xl text-slate-800 leading-tight">
                      Stripe order checkout
                     </h1>
                </div>
            </header>
            <!-- Main content -->
            <main class="mx-auto">
                <form
                    id="payment-form"
                    class="my-12 w-5/6 md:max-w-screen-2xl mx-auto p-4 flex flex-col justify-center items-center space-y-4"
                    x-data
                >
                    <div id="payment-element"></div>
                    <button
                        id="submit-button"
                        type="submit"
                        class="tracking-widest focus:outline-none transition ease-in-out duration-150 px-4 py-2 rounded-full
                        border font-semibold bg-orange-500 border-transparent text-white uppercase hover:bg-orange-400
                        active:bg-slate-900 disabled:opacity-25 shadow-orange-500/50 shadow-lg flex space-x-3 items-center"
                        x-bind:disabled="$store.loader.show"
                    >
                        <span>Make payment</span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 24 24"
                            class="text-slate-50 animate-spin h-6 w-6"
                            x-show="$store.loader.show"
                        >
                            <path fill="none" d="M0 0h24v24H0z"/>
                            <path class="fill-current" d="M18.364 5.636L16.95 7.05A7 7 0 1019 12h2a9 9 0 11-2.636-6.364z"/>
                        </svg>
                    </button>
                    <div id="error-message" class="p-4 text-red-500"></div>
                </form>
            </main>
        </div>
        <!-- Footer -->
        <footer class="border-t"></footer>
        <!-- Javascript -->
        <script type="text/javascript" id="preloaderStoreJs">
            document.addEventListener('alpine:init', () => {
                Alpine.store('loader', {
                    show: false,
                    toggle() {
                        this.show = ! this.show
                    },
                })
            });
        </script>
        <script type="text/javascript" id="checkoutJs">
            const stripe = Stripe('{{ config("services.stripe.key") }}');
            const options = {
                clientSecret: '{{ $clientSecret }}',
                appearance: {
                // Customize to the theme you prefer https://stripe.com/docs/stripe-js/appearance-api
                    theme: 'flat',
                    variables: {
                        colorPrimary: '#fb9736',
                    },
                },
            };
            const elements = stripe.elements(options);
            const paymentElement = elements.create('payment');
        
            paymentElement.mount('#payment-element');
        
            // Submit payment
            const form = document.getElementById('payment-form');
            form.addEventListener('submit', async (event) => {
                event.preventDefault();
        
                // Disable the button
                Alpine.store('loader').toggle();
        
                // Fetch the error when making the payment incase it occurs
                const {error} = await stripe.confirmPayment({
                    elements,
                    confirmParams: {
                        return_url: '{{ route('stripe-checkout.callback') }}',
                    },
                });
        
                if (error) {
                    // Enable the button
                    Alpine.store('loader').toggle();
        
                    // Display the error in the error container
                    const messageContainer = document.querySelector('#error-message');
                    messageContainer.textContent = error.message;
                }
            });
        </script>
    </body>
</html>