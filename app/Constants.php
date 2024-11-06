<?php

namespace App;

class Constants
{
    public const REGIONS = [
        'Blekinge',
        'Dalarna',
        'Gotland',
        'Gävleborg',
        'Halland',
        'Jämtland',
        'Jönköping',
        'Kalmar',
        'Kronoberg',
        'Norrbotten',
        'Skåne',
        'Stockholm',
        'Sörmland',
        'Uppsala',
        'Värmland',
        'Västerbotten',
        'Västernorrland',
        'Västmanland',
        'Örebro län',
        'Östergötland',
        'Götaland',
    ];
    public const PAYMENT_PERIODS = [
        0 => 'messages.total',
        1 => 'messages.month',
        2 => 'messages.quarter',
        3 => 'messages.year',
        // 4 => 'messages.one_time',
    ];

    public const NOTICE_PERIODS = [
        0 => 'messages.no_notice_period',
        1 => 'messages.1 month',
        2 => 'messages.2 months',
        3 => 'messages.3 months',
        4 => 'messages.4 months',
        5 => 'messages.5 months',
        6 => 'messages.6 months',
        7 => 'messages.7 months',
        8 => 'messages.8 months',
        9 => 'messages.9 months',
        10 => 'messages.10 months',
        11 => 'messages.11 months',
        12 => 'messages.12 months',
    ];

    public const REMINDER_TYPES = [
        1 => 'messages.terminate',
        2 => 'messages.evaluate',
        3 => 'messages.renew',
    ];

    public const NOTICE_DAYS = [
        1 => 'messages.7 Days',
        2 => 'messages.14 Days',
        3 => 'messages.30 Days',
        4 => 'messages.60 Days',
        5 => 'messages.90 Days',
        6 => 'messages.120 Days',
        7 => 'messages.180 Days',
    ];

    public const ATTACH_FILE_TYPES = [
        1 => 'messages.contract',
        2 => 'messages.terms_and_conditions',
        3 => 'messages.appendix',
        4 => 'messages.email_confirmation',
        5 => 'messages.nda',
        6 => 'messages.invoice',
        7 => 'messages.termination',
        8 => 'messages.online_agreement',
    ];

    public const EMPLOYEES = [
        1 => '< 10',
        2 => '10 - 50',
        3 => '50 - 100',
        4 => '> 100',
    ];

    public const REVENUE = [
        1 => '< 10 000',
        2 => '10 000 - 50 000',
        3 => '50 000 - 100 000',
        4 => '> 100 000',
        5 => '> 1 000 000',
    ];

     public const PACKAGES = [
        1 => 'Företag',
        2 => 'Byrå',
    ];

    public const CURRENCIES = [
        1 => 'EUR',
        2 => 'USD',
        3 => 'SEK',
        4 => 'NOK',
        5 => 'GBP',
        6 => 'PLN',
    ];


}
