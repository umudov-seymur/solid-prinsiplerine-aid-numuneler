<?php

// OCP qaydasını pozan kod
class Programmer
{
    public function code()
    {
        return "coding";
    }
}

class Tester
{
    public function test()
    {
        return "testing";
    }
}

class ProjectManagement
{
    public function process($member)
    {
        if ($member instanceof Programmer) {
            return $member->code();
        } elseif ($member instanceof Tester) {
            return $member->test();
        }
    }
}

$projectManagment = new ProjectManagement();
$member = new Tester();

echo $projectManagment->process($member);
