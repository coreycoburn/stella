<?php

declare(strict_types=1);

namespace App\Projects\Javascript\Builders;

interface Builder
{
    /**
     * Execute the build script.
     *
     * @param string $message
     * @return bool
     */
    public function build(string $message): bool;

    /**
     * Compose the array of keywords for the bash process.
     *
     * @return array
     */
    public function compose(): array;
}
