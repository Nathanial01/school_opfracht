<?php
namespace Bordeling;

abstract class Person
{
    protected string $naam;
    protected int $leeftijd;
    public static int $totalCollectedAmount = 0;

    public function __construct(string $naam, int $leeftijd)
    {
        $this->naam = $naam;
        $this->leeftijd = $leeftijd;
    }

    // Method to collect payment
    public static function collectPayment(int $amount): void
    {
        self::$totalCollectedAmount += $amount;
    }

    // Abstract methods to get and set name and age
    abstract public function getNaam(): string;
    abstract public function setNaam(string $naam): void;
    abstract public function getLeeftijd(): int;
    abstract public function setLeeftijd(int $leeftijd): void;
}
