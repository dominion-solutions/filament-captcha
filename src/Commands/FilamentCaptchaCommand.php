<?php

namespace DominionSolutions\FilamentCaptcha\Commands;

use Illuminate\Console\Command;

class FilamentCaptchaCommand extends Command
{
    public $signature = 'filament-captcha';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
