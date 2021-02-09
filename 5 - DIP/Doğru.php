<?php

// Refactored
interface Mailer
{
    public function send();
}

class SmtpMailer implements Mailer
{
    public function send()
    {
        // code ...
    }
}

class SendGridMailer implements Mailer
{
    public function send()
    {
        // code ...
    }
}

class SendWelcomeMessage
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}
