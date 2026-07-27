<?php

it('will not use debugging functions')
    ->expect(['dd', 'dump', 'ray', 'var_dump', 'print_r'])
    ->each->not->toBeUsed();

it('will not use exit or die')
    ->expect(['exit', 'die'])
    ->each->not->toBeUsed();

it('will not use logging helpers')
    ->expect(['error_log'])
    ->each->not->toBeUsed();

it('has no direct Log facade usage in source files')
    ->expect(['Illuminate\Support\Facades\Log'])
    ->each->not->toBeUsed();

it('only uses classes in the correct root namespace')
    ->expect([
        DominionSolutions\FilamentCaptcha\FilamentCaptcha::class,
        DominionSolutions\FilamentCaptcha\FilamentCaptchaServiceProvider::class,
        DominionSolutions\FilamentCaptcha\Facades\FilamentCaptcha::class,
        DominionSolutions\FilamentCaptcha\Forms\Components\Captcha::class,
        DominionSolutions\FilamentCaptcha\Commands\FilamentCaptchaCommand::class,
        DominionSolutions\FilamentCaptcha\Testing\TestsFilamentCaptcha::class,
    ])
    ->each
    ->toContain('DominionSolutions\\FilamentCaptcha');
