<?php

declare(strict_types=1);

namespace App\Commands\DotFiles;

use App\Commands\StellaCommands;
use App\Dotfile;

class DotFileCreateCommand extends StellaCommands
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
     * @return void
     */
    public function handle(): void
    {
        $this->info('Add a dotfile');
        $name = $this->askRequired('What is the name?');
        $description = $this->ask('Please write a description.');
        $url = $this->askRequired('What is the url?');

        Dotfile::create(array_filter([
            'name' => $name,
            'description' => $description,
            'url' => $url,
        ]));
    }
}
