<?php

// Refactored
interface Flylable
{
    public function fly();
}

interface Runable
{
    public function run();
}

interface Barkable
{
    public function bark();
}

class Bird implements Flylable, Runable
{
    public function fly()
    {
        return "flying";
    }

    public function run()
    {
        return "running";
    }
}

$bird = new Bird();
echo $bird->run() . PHP_EOL;
echo $bird->fly();
