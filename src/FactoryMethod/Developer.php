<?php

namespace App\FactoryMethod;

class Developer implements IInterviewer
{
    public function askQuestions()
    {
        echo 'Asking about design patterns!';
    }
}