<?php

namespace App\Projects\Javascript\Builders;

use LaravelZero\Framework\Commands\Command;

final class Vite implements Builder
{
    use BuilderTrait;

    /**
     * The implemented framework.
     *
     * @var string
     */
    private string $framework;

    /**
     * Vite constructor.
     * @param Command $command
     * @param string $name
     * @param string $framework
     */
    public function __construct(Command $command, string $name, string $framework)
    {
        $this->command = $command;
        $this->name = $name;
        $this->framework = $framework;
    }

    /**
     * Compose the array of keywords for the bash process.
     *
     * @return array
     */
    public function compose(): array
    {
        $keywords = ['yarn', 'create', 'vite-app', $this->name];

        if ($this->framework != 'vue') {
            $keywords[] = '--template';
        }

        if ($this->framework == 'react') {
            $keywords[] = 'react';
        }

        return $keywords;
    }
}
