<?php

declare(strict_types=1);

namespace App\Commands\DotFiles;

use App\Dotfile;
use LaravelZero\Framework\Commands\Command;

class DotFileResetCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'dotfile:reset';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Reset dotfiles to the default state';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if ($this->confirm('Are you sure you want to remove all of the dotfile configs? This cannot be undone.'))
        Dotfile::truncate();
    }
}
