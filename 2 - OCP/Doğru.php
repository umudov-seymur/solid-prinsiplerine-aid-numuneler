<?php

// Refactored
interface Workable
{
    public function work();
}

class Programmer implements Workable
{
    public function work()
    {
        return "coding";
    }
}

class Tester implements Workable
{
    public function work()
    {
        return "testing";
    }
}

class ProjectManagement
{
    public function process(Workable $member)
    {
        return $member->work();
    }
}

$projectManagment = new ProjectManagement();
$member = new Programmer();

echo $projectManagment->process($member);
