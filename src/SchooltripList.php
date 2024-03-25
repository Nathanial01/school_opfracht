<?php

namespace Bordeling;

class SchooltripList
{
    protected array $students = [];
    protected ?Teacher $teacher = null;
    protected static int $totalCollectedAmount = 0;

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

    public function generateTripList(): array
    {


            $tripList = [];
            foreach ($this->students as $student) {
                $tripList[] = [
                    'naam' => $student->getNaam(),
                    'leeftijd' => $student->getLeeftijd(),
                    'Group' => $student->getGroup()->getName(),
                    'Paid' => $student->hasPaid() ? 'Yes' : 'No'
                ];
            }
            if ($this->teacher) {
                $tripList[] = [
                    'naam' => $this->teacher->getNaam(),
                    'leeftijd' => $this->teacher->getLeeftijd(),
                    'Group' => 'Teacher',
                    'Paid' => 'N/A'
                ];
            }
        return $tripList;
        }
}
