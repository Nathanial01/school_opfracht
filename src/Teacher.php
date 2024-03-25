<?php

namespace Bordeling;

class Teacher extends Person
{
    protected static array $teachers = [];

    public function __construct(string $naam, int $leeftijd)
    {
        parent::__construct($naam, $leeftijd);
        self::$teachers[] = $this;
    }

    public static function getAvailableTeacher(): ?Teacher
    {
        if (!empty(self::$teachers)) {
            $availableTeacher = array_shift(self::$teachers);
            return $availableTeacher;
        } else {
            return null;
        }
    }

    public function getNaam(): string
    {
        return $this->naam;
    }

    public function setNaam(string $naam): void
    {
        $this->naam = $naam;
    }

    public function getLeeftijd(): int
    {
        return $this->leeftijd;
    }

    public function setLeeftijd(int $leeftijd): void
    {
        $this->leeftijd = $leeftijd;
    }
}
