<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ResetAutoIncrementCommand extends Command
{
    protected $signature = 'db:reset-auto-increment {table}';

    protected $description = 'Reset auto increment for a table';

    public function handle()
    {
        $table = $this->argument('table');

        DB::statement("ALTER TABLE $table AUTO_INCREMENT = 1");

        $this->info("Auto increment reset for table $table");
    }
}