<?php

namespace App\FactoryMethod;

abstract class HiringManager
{
    abstract protected function makeInterviewer(): IInterviewer;

    public function takeInterviewer()
    {
        $interviewer = $this->makeInterviewer();
        $interviewer->askQuestions();
    }
}