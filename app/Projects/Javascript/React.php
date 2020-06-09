<?php

namespace App\Projects\Javascript;

use App\Projects\Javascript\Builders\CreateReactApp;
use App\Projects\Javascript\Builders\Vite;

final class React implements JavascriptProject
{
    use JavascriptTrait;

    /**
     * Run the React project build.
     *
     * @return bool
     */
    public function run(): bool {
        switch ($this->build) {
            case 'vite':
                $vite = new Vite($this->command, $this->name,'react');
                $vite->build('Installing React with Vite');
                break;

            case 'create-react-app':
                $createReactApp = new CreateReactApp($this->command, $this->name);
                $createReactApp->build('Installing React with Create React App');
                break;

            default:
                $this->command->error("Unknown build: $this->build");
                return false;
        }

        return true;
    }
}
