<?php

// config for DominionSolutions/FilamentCaptcha
return [
    // The engine to use for captcha generation
    // Currently supported engines are: mews, google, hcaptcha
    'engine' => env('CAPTCHA_ENGINE', 'mews'),
];
