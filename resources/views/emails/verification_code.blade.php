<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('emails.Verification Code') }}</title>
</head>
<body>

    <div class="container" style="max-width: 600px; margin: auto; padding: 40px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #ffffff; border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);">
    <h1 style="text-align: center; color: #2c3e50; font-size: 28px; font-weight: 600; margin-bottom: 20px;">{{ __('emails.two_fa.Your Verification Code') }}</h1>
    <p style="font-size: 16px; color: #34495e; margin-bottom: 25px; line-height: 1.6;">
        {{ __('emails.two_fa.Dear User!') }}
    </p>
    <p style="font-size: 16px; color: #34495e; margin-bottom: 30px; line-height: 1.6;">
        {{ __('emails.two_fa.To proceed with your login to') }} {{env('APP_NAME')}}!
    </p>
    <p style="font-size: 16px; color: #34495e; margin-bottom: 30px; line-height: 1.6;">
        {{ __('emails.two_fa.Please use the verification code provided below:') }}
    </p>
    <div style="text-align: center; background-color: #ecf0f1; padding: 15px 0; border-radius: 10px; margin-bottom: 30px;">
        <span style="font-size: 36px; color: #e74c3c; font-weight: bold; letter-spacing: 2px;">{{ $code }}</span>
    </div>
    <p style="font-size: 16px; color: #34495e; text-align: center; margin-bottom: 40px; line-height: 1.6;">
        {{ __('emails.two_fa.text') }}
    </p>
    <footer style="text-align: center; border-top: 1px solid #e0e0e0; padding-top: 20px;">
        <p style="font-size: 14px; color: #95a5a6; margin-bottom: 5px;">{{ __('emails.two_fa.Best regards,') }}</p>
        <p style="font-size: 14px; color: #95a5a6; font-weight: 600;">{{ __('emails.two_fa.The ') }} {{env('APP_NAME')}} {{ __('emails.two_fa. Team') }}</p>
    </footer>
</div>
</body>
</html>
