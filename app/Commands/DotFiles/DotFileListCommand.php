<?php

namespace App\Commands\DotFiles;

use App\Dotfile;
use LaravelZero\Framework\Commands\Command;

class DotFileListCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'dotfile:list';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'List all of the dotfiles';

    /**
     * Execute the console command.
     *
     * @return boolean
     */
    public function handle(): bool
    {
        $dotFiles = Dotfile::all(['name', 'scope', 'build', 'url']);

        if ($dotFiles->count() > 0) {
            $this->table(['Name', 'Scope', 'Build', 'Url'], $dotFiles->toArray());

            return true;
        }

        $this->warn('No entries. Add an entry with dotfile:create');

        return false;
    }
}
