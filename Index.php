<h1>School Trip List</h1>
<?php
require 'vendor/autoload.php';

use Bordeling\Student;
use Bordeling\Schooltrip;
use Bordeling\Teacher;
use Bordeling\Group;

// Instantiate a school trip
$schooltrip1 = new Schooltrip("USA");

//  groups
$group1 = new Group("Group A", 0);
$group2 = new Group("Group B", 0);

//  students
$student1 = new Student("student1", 18, true, $group1);
$student2 = new Student("student2", 23, true, $group1);
$student3 = new Student("student3", 19, true, $group2);
$student4 = new Student("student4", 22, true, $group1);
$student5 = new Student("student5", 19, true, $group2);
$student6 = new Student("student6", 20, true, $group1);
$student7 = new Student("student7", 21, true, $group1);
$student8 = new Student("student8", 22, true, $group2);
$student9 = new Student("student9", 20, true, $group2);
$student10 = new Student("student10", 21, true, $group1);
$student11 = new Student("student11", 21, true, $group1);

//  teachers
$teacher1 = new Teacher("teacher1", 35);
$teacher2 = new Teacher("teacher2", 40);
$teacher3 = new Teacher("teacher3", 38);
$teacher4 = new Teacher("teacher4", 42);
$teacher5 = new Teacher("teacher5", 45);

// Add  school trip
$schooltrip1->addStudent($student1);
$schooltrip1->addStudent($student2);
$schooltrip1->addStudent($student3);
$schooltrip1->addStudent($student4);
$schooltrip1->addStudent($student5);
$schooltrip1->addStudent($student6);
$schooltrip1->addStudent($student7);
$schooltrip1->addStudent($student8);
$schooltrip1->addStudent($student9);
$schooltrip1->addStudent($student10);
$schooltrip1->addStudent($student11);

$schooltrip1->addTeacher($teacher1);
$schooltrip1->addTeacher($teacher2);
$schooltrip1->addTeacher($teacher3);
$schooltrip1->addTeacher($teacher4);
$schooltrip1->addTeacher($teacher5);

//  display  trip list
$groups = $schooltrip1->generateTripList();
?>

