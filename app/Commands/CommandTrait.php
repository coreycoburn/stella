<?php

namespace App\Commands;

trait CommandTrait
{
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
    protected string $build;

    /*
     * Collect user inputs to create application.
     *
     * @return void
     */
    public function composeInputs(): void
    {
        $this->build = $this->argument('build') ?? $this->buildMenu();
        $this->name = $this->ask('What is the app name?');
    }

    /**
     * Compose build selection menu.
     *
     * @return string
     */
    public function buildMenu(): string
    {
        return $this->styledMenu($this->buildMenuTitle, $this->buildMenuOptions);
    }
}
