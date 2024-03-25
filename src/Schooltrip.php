<?php

namespace Bordeling;

class Schooltrip
{
    protected string $destination;
    protected SchooltripList $schooltripList;

    public function __construct(string $destination)
    {
        $this->destination = $destination;
        $this->schooltripList = new SchooltripList();
    }

    public function addStudent(Student $student): void
    {
        $this->schooltripList->addStudent($student);
    }

    public function addTeacher(Teacher $teacher): void
    {
        $this->schooltripList->addTeacher($teacher);
    }

    public function getDestination(): string
    {
        return $this->destination;
    }

    public function generateTripList()
    {
        $groupedStudents = array_chunk($this->schooltripList->getStudents(), 5);
        $numGroups = count($groupedStudents);

        for ($i = 0; $i < $numGroups; $i++) {
            $group = new Group("Groep" . ($i + 1), 0);
            $teacher = Teacher::getAvailableTeacher();

            if ($teacher === null) {
             print "Geen docent beschikbaar";
                return;
            }

            $this->addTeacher($teacher);
            print "Schooluitje groep: " . $group->getNaam() . "<br>";

            foreach ($groupedStudents[$i] as $student) {
                $this->addStudent($student);
                print $student->getNaam() . "<br>";
            }

            echo "Totaal ingezameld bedrag: $" . Person::$totalCollectedAmount . "<br>";
        }
    }

    public function getSchooltripLists(): SchooltripList
    {
        return $this->schooltripList;
    }
}
