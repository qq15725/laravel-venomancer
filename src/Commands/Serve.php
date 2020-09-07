<?php

namespace Wxm\LaravelVenomancer\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Wxm\LaravelVenomancer\Facades\Venomancer;

class Serve extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'venomancer:serve';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'venomancer serve';

    /**
     * Venomancer application
     *
     * @var Venomancer
     */
    protected $venomancer;

    /**
     * Serve constructor.
     *
     * @param Venomancer $venomancer
     */
    public function __construct(Venomancer $venomancer)
    {
        $this->venomancer = $venomancer;
    }

    /**
     * Run
     */
    public function handle()
    {
        $this->venomancer->server->serve();
    }
}