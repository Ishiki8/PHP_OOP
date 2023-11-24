<?php

namespace App;

class FakeSubscription
{
    private $subscriptionPlanName = false;

    public function __construct($user)
    {
        if ($user->isAdmin()) {
            $this->subscriptionPlanName = true;
        }
    }
    
    public function hasProfessionalAccess()
    {
        return $this->subscriptionPlanName;
    }

    public function hasPremiumAccess()
    {
        return $this->subscriptionPlanName;
    }
}
