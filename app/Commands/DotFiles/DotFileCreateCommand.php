<?php

namespace App\Commands\DotFiles;

use App\Dotfile;
use LaravelZero\Framework\Commands\Command;

class DotFileCreateCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'dotfile:create {name?}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Create a dotfile';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Add a dotfile');
        $name = $this->ask('What is the name?');
        $scope = $this->ask('What is the scope? (optional)');
        $build = $this->ask('What is the build? (optional)');
        $url = $this->ask('What is the url?');

        Dotfile::create(array_filter([
            'name' => $name,
            'scope' => $scope,
            'build' => $build,
            'url' => $url,
        ]));

    }
}
