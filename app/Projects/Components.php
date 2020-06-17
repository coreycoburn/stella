<?php

declare(strict_types=1);

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
