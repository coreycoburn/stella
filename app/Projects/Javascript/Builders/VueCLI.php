<?php

namespace App\Projects\Javascript\Builders;

use LaravelZero\Framework\Commands\Command;

class VueCLI implements Builder
{
    use BuilderTrait;

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
        return ['vue', 'create', $this->name, '-d', '-n', '-b', '--skipGetStarted'];
    }
}
