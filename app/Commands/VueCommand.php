<?php

namespace App\Commands;

use App\Projects\Components;
use App\Projects\Javascript\Vue;
use LaravelZero\Framework\Commands\Command;

final class VueCommand extends Command implements BuildCommand
{
    use CommandTrait, Components;

    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'vue {build?}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Create a Vue JS application';

    /**
     * Build menu title.
     *
     * @var string
     */
    protected string $buildMenuTitle = 'Vue Build Tool Options';

    /**
     * Build menu options.
     *
     * @var array|string[]
     */
    protected array $buildMenuOptions = [
        'vue-cli' => 'Vue CLI',
        'vite' => 'Vite',
    ];

    /**
     * Execute the console command.
     *
     * @return bool
     */
    public function handle(): bool
    {
        $this->composeInputs();

        $project = new Vue($this, $this->name, $this->build);

        if ($project->run() == false) {
            return false;
        }

        $this->info("cd $this->name");

        return true;
    }
}
