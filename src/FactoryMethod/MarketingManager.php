<?php

namespace App\FactoryMethod;

class MarketingManager extends HiringManager
{
    protected function makeInterviewer(): IInterviewer
    {
        return new CommunityExecutive();
    }
}