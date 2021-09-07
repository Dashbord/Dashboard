<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class getAllNewQueues extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:getAllNewQueues';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        respo
        $Queues = DB::table('queues')->get();
        //$Queues = queues::where('');
        
        return 0;
    }
}
