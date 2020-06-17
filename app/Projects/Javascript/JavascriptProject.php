<?php

declare(strict_types=1);

namespace App\Projects\Javascript;

interface JavascriptProject
{
    /**
     * Run the Javascript project build.
     *
     * @return bool
     */
    public function run(): bool;

    /**
     * Get the name/path of project.
     *
     * @return String
     */
    public function getName(): string;

    /**
     * Get the build name.
     *
     * @return String
     */
    public function getBuild(): string;

    /**
     * Get list of passed arguments.
     *
     * @return array
     */
    public function getArguments(): array;
}
