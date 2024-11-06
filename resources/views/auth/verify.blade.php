<p>{{ __('emails.verify.Hi,') }}</p>
<p>{{ __('emails.verify.request_text') }}</p>
<a href="{{ route('password.reset', $token) }}">{{ __('emails.verify.Reset Password') }}</a>
<p>{{ __('emails.verify.password_reset') }}</p>
