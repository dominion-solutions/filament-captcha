<?php

namespace DominionSolutions\FilamentCaptcha\Forms\Components;

use Filament\Forms\Components\Concerns;
use Filament\Forms\Components\Field;
use Filament\Support\Concerns\HasExtraAlpineAttributes;

class Captcha extends Field
{
    use Concerns\CanBeLengthConstrained;
    use Concerns\HasAffixes;
    use Concerns\HasExtraInputAttributes;
    use HasExtraAlpineAttributes;

    protected string $view = 'filament-captcha::form.components.captcha';
}
