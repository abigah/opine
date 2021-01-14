<?php

namespace Abigah\Opine\Commands;

use Illuminate\Console\Command;

class OpineCommand extends Command
{
    public $signature = 'opine';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
