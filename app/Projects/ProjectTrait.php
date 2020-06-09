<?php

namespace App\Projects;

use Symfony\Component\Process\Process;

trait ProjectTrait
{
    /**
     * Check if provided command is installed.
     *
     * @param string $command
     * @return bool
     */
    private function isInstalled(string $command): bool
    {
        $installPath = new Process(['command', '-v', $command]);
        $installPath->run();

        return $installPath->getOutput() ? true : false;
    }
}
