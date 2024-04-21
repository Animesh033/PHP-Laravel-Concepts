<?php
/*
In PHP, an interface is a blueprint for classes. It defines a set of methods that a class must implement. Interfaces allow you to establish a contract between different classes, ensuring that they provide specific functionality. A class that implements an interface must define all the methods declared in that interface.
*/
interface Newsletter
{
    public function subscribe($user);
}

class CampaignMonitor implements Newsletter
{
    public function subscribe($email)
    {
        die('Subscribe from Campaign monitor');
    }
}

class Drip implements Newsletter
{
    public function subscribe($email)
    {
        die('Subscribe from Drip');
    }
}

class Sendgrid implements Newsletter
{
    public function subscribe($email)
    {
        die('Subscribe from Sendgrid');
    }
}

class NewsLetterSubscriptionsController
{
    public function store(Newsletter $newsletter)
    {
        $newsletter->subscribe('abc@g.com');
    }
}

$newsletter = new NewsLetterSubscriptionsController();
$newsletter->store(new Sendgrid());
