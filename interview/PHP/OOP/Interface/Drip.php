<?php

namespace Interview\PHP\OOP\Interface;


class Drip implements NewsletterInterface
{
    public function subscribe($email)
    {
        die('Subscribe from Drip');
    }
}
