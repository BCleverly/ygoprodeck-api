<?php

namespace BCleverly\YgoprodeckApi\Commands;

use Illuminate\Console\Command;

class YgoprodeckApiCommand extends Command
{
    public $signature = 'ygoprodeck-api';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
