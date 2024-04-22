<?php

namespace Interview\PHP\OOP\Interface;

class CampaignMonitor implements NewsletterInterface
{
    public function subscribe($email)
    {
        die('Subscribe from Campaign monitor');
    }
}
