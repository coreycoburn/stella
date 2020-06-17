<?php

declare(strict_types=1);

namespace App\Commands;

interface BuildCommand
{
    /**
     * Execute the console command.
     *
     * @return bool
     */
    public function handle(): bool;

    /*
     * Collect user inputs to create application.
     *
     * @return void
     */
    public function composeInputs(): void;

    /**
     * Compose build selection menu.
     *
     * @return string
     */
    public function buildMenu(): string;
}
