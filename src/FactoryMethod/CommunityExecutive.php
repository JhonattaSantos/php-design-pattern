<?php

namespace App\FactoryMethod;

class CommunityExecutive implements IInterviewer
{
    public function askQuestions()
    {
        echo 'Asking about community building!';
    }
}