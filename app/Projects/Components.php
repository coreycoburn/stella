<?php

namespace App\Projects;

trait Components
{
    public function styledMenu($title, $choices)
    {
        return $this->menu($title, $choices)
            ->setForegroundColour('black')
            ->setBackgroundColour('cyan')
            ->disableDefaultItems()
            ->open();
    }
}
