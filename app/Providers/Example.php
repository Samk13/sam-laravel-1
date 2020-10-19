<?php

namespace App\Providers;

class Example
{
    protected $collaborator;

    public function __construct(Collaborator $collaborator)
    {
        $this->collaborator = $collaborator;
    }

    public function go()
    {
        dump('It works!');
    }
}

