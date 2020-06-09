<?php

namespace App\Projects\Javascript\Builders;

use LaravelZero\Framework\Commands\Command;
use Symfony\Component\Process\Process;

/**
 * Common Build method for executing bash scripts.
 *
 * Trait BuilderTrait
 * @package App\Projects\Javascript\Builders
 */
trait BuilderTrait
{
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
     * Execute the build script.
     *
     * @param string $message
     * @return bool
     */
    public function build(string $message): bool
    {
        $this->command->task($message, function () {
            try {
                $process = new Process($this->compose());
                $process->run();

                return true;
            } catch (\Exception $exception) {
                return false;
            }
        });

        return true;
    }
}
