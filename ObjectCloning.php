<?php 

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "aldizar";
$student1->$value = "100";

var_dump($student1);

$student2 = clone $student1;