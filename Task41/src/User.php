<?php

namespace App;

use App\Subscription;
use App\FakeSubscription;

class User
{
    private $currentSubscription;
    private $email;

    public function __construct($email, $currentSubscription = null)
    {
        $this->email = $email;
        
        if (!is_null($currentSubscription)) {
            $this->currentSubscription = $currentSubscription;
        } else {
            $this->currentSubscription = new FakeSubscription($this);
        }
        
    }

    public function getCurrentSubscription()
    {
        return $this->currentSubscription;
    }

    public function isAdmin()
    {
        return $this->email === 'rakhim@ht.io';
    }
}
