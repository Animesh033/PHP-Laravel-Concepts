<?php

namespace Interview\PHP\OOP\Interface;

use Interview\PHP\OOP\Interface\Sendgrid;

class NewsLetterSubscriptionsController
{
    public function store(NewsletterInterface $newsletter)
    {
        $newsletter->subscribe('abc@g.com');
    }
}

// $newsLetter = new NewsLetterSubscriptionsController();
// $newsLetter->store(new Sendgrid());


/*
wspace@Animeshs-MacBook-Pro PHP-Laravel-Concepts % php artisan tinker
Psy Shell v0.12.3 (PHP 8.1.12 — cli) by Justin Hileman
> $newsLetter = new Interview\PHP\OOP\Interface\NewsLetterSubscriptionsController();
= Interview\PHP\OOP\Interface\NewsLetterSubscriptionsController {#5002}

> $newsLetter->store(new Interview\PHP\OOP\Interface\Sendgrid());
Subscribe from Sendgrid⏎
*/
