<?php

namespace App;

class User
{
    protected $name;

    protected bool $subscribed = false;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function isSubscribed(): bool
    {
        return $this->subscribed;
    }

    public function markAsSubscribed(): void
    {
        $this->subscribed = true;
    }

}