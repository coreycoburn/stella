<?php

namespace App\Projects\Javascript;

use App\Projects\Javascript\Builders\Vite;
use App\Projects\Javascript\Builders\VueCLI;
use App\Projects\ProjectTrait;

final class Vue implements JavascriptProject
{
    use JavascriptTrait, ProjectTrait;

    /**
     * Run the Vue project build.
     *
     * @return bool
     */
    public function run(): bool
    {
        switch ($this->build) {
            case 'vue-cli':
                if (! $this->isInstalled('vue')) {
                    $this->command->error('Vue CLI is NOT installed. Please follow instructions for installation instructions:');
                    $this->command->info('https://cli.vuejs.org/guide/installation.html');

                    return false;
                }

                $vueCLI = new VueCLI($this->command, $this->name);
                $vueCLI->build('Installing Vue with Vue CLI');
                break;

            case 'vite':
                $vite = new Vite($this->command, $this->name,'vue');
                $vite->build('Installing Vue with Vite');
                break;

            default:
                $this->command->error("Unknown build: $this->build");
                return false;
        }

        return true;
    }
}
