<?php

namespace Interview\PHP\OOP\Interface;

class Sendgrid implements NewsletterInterface
{
    public function subscribe($email)
    {
        die('Subscribe from Sendgrid');
    }
}
