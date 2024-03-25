<?php

namespace Bordeling;



class Student extends Person
{
    protected bool $hasPaid;
    protected Group $group;
    protected bool $heeftBetaald;

    public function __construct(string $naam, int $leeftijd, bool $heeftBetaald, Group $group)
    {
        parent::__construct($naam, $leeftijd);
        $this->heeftBetaald = $heeftBetaald;
        $this->group = $group;
        $this->hasPaid = false;
    }

    public function setPaid(bool $status): void
    {
        $this->hasPaid = $status;
        if ($status) {
            parent::collectPayment(50);
        }
    }

    public function getNaam(): string
    {
        return $this->naam;
    }

    public function getLeeftijd(): int
    {
        return $this->leeftijd;
    }

    public function getGroup(): Group
    {
        return $this->group;
    }

    public function hasPaid(): bool
    {
        return $this->hasPaid;
    }

    public function setNaam(string $naam): void
    {
        // TODO: Implement setNaam() method.
    }

    public function setLeeftijd(int $leeftijd): void
    {
        // TODO: Implement setLeeftijd() method.
    }
}
