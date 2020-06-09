<?php

namespace App\Projects\Javascript;

use LaravelZero\Framework\Commands\Command;

trait JavascriptTrait
{
    /*
     * The name/directory of the application.
     *
     * @var string
     */
    private string $name;

    /**
     * The Javascript build type (i.e. Create React App or Vite).
     *
     * @var string
     */
    private string $build;

    /**
     * Optional arguments passed to build tool.
     *
     * @var array
     */
    private array $options;

    /**
     * Laravel Zero Command injection.
     *
     * @var Command
     */
    private Command $command;

    /**
     * Project constructor.
     *
     * @param Command $command
     * @param String $name
     * @param String $build
     * @param array $options
     */
    public function __construct(Command $command, string $name, string $build, array $options = [])
    {
        $this->command = $command;
        $this->name = $name;
        $this->build = $build;
        $this->options = $options;
    }

    /**
     * Get the name/path of project.
     *
     * @return String
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the build name.
     *
     * @return String
     */
    public function getBuild(): string
    {
        return $this->build;
    }

    /**
     * Get list of passed arguments.
     *
     * @return array
     */
    public function getArguments(): array
    {
        return $this->options;
    }
}
