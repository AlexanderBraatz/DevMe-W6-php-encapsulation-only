<?php

namespace App\Counter;

class BeanCounter
{
    private $Beancounter;

    public function __construct(Counter $Counter)
    {
        $this->Beancounter = $Counter;
    }

    public function addBean() : BeanCounter
    {
        $this->Beancounter->increment();
        return $this;
    }

    public function howMany() : int
    {
        return $this->Beancounter->count();
    }
}