<?php

// ISP qaydasını pozan kod
interface Animal
{
    public function fly();
    public function run();
    public function bark();
}

class Bird implements Animal
{
    public function fly()
    {
        return "fly";
    }

    public function run()
    {
        return "run";
    }

    public function bark()
    {
        // do nothing
    }
}

class Cat implements Animal
{
    public function bark()
    {
        // do nothing
    }

    public function run()
    {
        return "run";
    }

    public function fly()
    {
        // do nothing
    }
}

class Dog implements Animal
{
    public function bark()
    {
        return "bark";
    }

    public function run()
    {
        return "run";
    }

    public function fly()
    {
        // do nothing
    }
}
