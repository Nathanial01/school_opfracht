<?php

namespace Bordeling;

class Group
{
    protected string $naam;
    protected array $students = [];
    protected ?Teacher $teacher = null;
    protected static int $totalCollectedAmount = 0;

    public function __construct(string $naam)
    {
        $this->naam = $naam;
    }

    public function getNaam(): string
    {
        return $this->naam;
    }

    public function addStudent(Student $student): void
    {
        $this->students[] = $student;
        $student->setPaid(true);
        static::$totalCollectedAmount += 50;
    }

    public function addTeacher(Teacher $teacher): void
    {
        $this->teacher = $teacher;
    }

    public function getStudents(): array
    {
        return $this->students;
    }

    public static function getTotalCollectedAmount(): int
    {
        return self::$totalCollectedAmount;
    }
}
