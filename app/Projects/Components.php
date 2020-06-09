<?php

namespace App\Projects;

trait Components
{
    public function styledMenu($title, $options)
    {
        return $this->menu($title, $options)
            ->setForegroundColour('black')
            ->setBackgroundColour('cyan')
            ->disableDefaultItems()
            ->open();
    }
}
