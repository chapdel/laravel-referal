<?php

namespace Chapdel\Referal\Commands;

use Illuminate\Console\Command;

class ReferalCommand extends Command
{
    public $signature = 'laravel-referal';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
