<?php

namespace App\Commands;

use App\Projects\Components;
use App\Projects\Javascript\React;
use LaravelZero\Framework\Commands\Command;

final class ReactCommand extends Command implements BuildCommand
{
    use BuildCommandTrait, Components;

    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'react {build?}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Create a React JS application';

    /**
     * Build menu title.
     *
     * @var string
     */
    protected string $buildMenuTitle = 'React Build Tool Options';

    /**
     * Build menu options.
     *
     * @var array|string[]
     */
    protected array $buildMenuOptions = [
        'create-react-app' => 'Create React App',
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

        $project = new React($this, $this->name, $this->build);

        if ($project->run() == false) {
            return false;
        }

        $this->info("cd $this->name");

        return true;
    }
}
