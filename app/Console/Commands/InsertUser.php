<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InsertUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Them mot nguoi moi vao database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        echo '213455';
    }
}
