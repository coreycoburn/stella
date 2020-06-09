<?php

namespace App\Projects\Javascript;

interface JavascriptProject
{
    public function run(): bool;

    public function getName(): string;

    public function getBuild(): string;

    public function getOptions(): array;
}
