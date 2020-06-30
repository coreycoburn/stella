<?php

declare(strict_types=1);

namespace App\Commands;

use LaravelZero\Framework\Commands\Command;

abstract class StellaCommands extends Command
{
    /**
     * Ask method for a required answer.
     *
     * @param string $question
     * @return string
     */
    public function askRequired(string $question): string
    {
        $answer = '';

        while (! $answer) {
            $answer = $this->ask($question);

            if (! $answer) {
                $this->error('This is a required field');
            }
        }

        return $answer;
    }
}
