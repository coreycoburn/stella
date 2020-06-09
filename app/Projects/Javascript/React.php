<?php

namespace App\Projects\Javascript;

use App\Projects\Javascript\Builders\CreateReactApp;
use App\Projects\Javascript\Builders\Vite;
use LaravelZero\Framework\Commands\Command;

final class React implements JavascriptProject
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
     * @return bool
     */
    public function run(): bool {
        switch ($this->build) {
            case 'vite':
                $vite = new Vite($this->command, $this->name,'react');
                $vite->build('Installing React with Vite');
                break;

            case 'create-react-app':
                $createReactApp = new CreateReactApp($this->command, $this->name);
                $createReactApp->build('Installing React with Create React App');
                break;

            default:
                $this->command->error("Unknown build: $this->build");
                return false;
        }

        return true;
    }

    /**
     * @return String
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return String
     */
    public function getBuild(): string
    {
        return $this->build;
    }

    /**
     * @return array
     */
    public function getOptions(): array
    {
        return $this->options;
    }
}
