<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeApiControllerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:make-api-controller-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $controllerName = $name . 'Controller';

        $options = [
            'name' => $controllerName,
        ];

        if ($this->option('resource')) {
            $options['--resource'] = true;
        } else {
            $options['--api'] = true;
        }

        $this->call('make:controller', $options);

        $this->info('API controller created successfully!');
    }
}
