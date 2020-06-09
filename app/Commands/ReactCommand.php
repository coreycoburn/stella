<?php

namespace App\Commands;

use App\Projects\Components;
use App\Projects\Javascript\React;
use LaravelZero\Framework\Commands\Command;

class ReactCommand extends Command
{
    use Components;

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

    /*
     * The name/directory of the application.
     *
     * @var string
     */
    protected $name;

    /**
     * The Javascript build type (i.e. Create React App or Vite).
     *
     * @var string
     */
    private $build;

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

    /*
     * Collect user inputs to create application.
     *
     * @return void
     */
    private function composeInputs(): void
    {
        $this->build = $this->argument('build') ?? $this->buildMenu();
        $this->name = $this->ask('What is the app name?');
    }

    /**
     * Compose build selection menu.
     *
     * @return string
     */
    private function buildMenu(): string
    {
        return $this->styledMenu('Build Choice', [
            'create-react-app' => 'Create React App',
            'vite' => 'Vite',
        ]);
    }
}
