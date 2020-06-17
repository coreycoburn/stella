<?php

declare(strict_types=1);

namespace App\Projects\Javascript\Builders;

use LaravelZero\Framework\Commands\Command;

final class CreateReactApp implements Builder
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
        return ['yarn', 'create', 'react-app', $this->name];
    }
}
