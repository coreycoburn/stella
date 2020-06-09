<?php

namespace App\Projects\Javascript\Builders;

use LaravelZero\Framework\Commands\Command;
use Symfony\Component\Process\Process;

final class CreateReactApp implements Builder
{
    use BuilderTrait;

    /**
     * Laravel Zero Command.
     *
     * @var Command
     */
    private Command $command;

    /*
     * The name/directory of the application.
     *
     * @var string
     */
    private string $name;

    /**
     * CreateReactApp constructor.
     * @param Command $command
     * @param string $name
     */
    public function __construct(Command $command, string $name)
    {
        $this->command = $command;
        $this->name = $name;
    }

    /**
     * Compose the array of keywords for the bash process.
     *
     * @return array
     */
    public function compose(): array
    {
        return ['yarn', 'create', 'react-app', $this->name];
    }
}
