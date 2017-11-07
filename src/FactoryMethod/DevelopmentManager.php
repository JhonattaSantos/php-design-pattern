<?php

namespace App\FactoryMethod;

class DevelopmentManager extends HiringManager
{
    protected function makeInterviewer(): IInterviewer
    {
        return new Developer();
    }
}