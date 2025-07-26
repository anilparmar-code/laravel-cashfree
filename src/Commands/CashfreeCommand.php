<?php

namespace AnilParmarCode\Cashfree\Commands;

use Illuminate\Console\Command;

class CashfreeCommand extends Command
{
    public $signature = 'laravel-cashfree';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
