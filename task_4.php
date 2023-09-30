<?php
/*
Task 4: Multidimensional Array
Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.
*/
$studentGrades = [[70,80,75],[64,72,83],[83,64,90]];

function CalculateAverageGrade($studentGrades){
	foreach($studentGrades as $stdGrd){
		$total = 0;
		foreach($stdGrd as $mark){
			$total += $mark;
		}
		$avg = $total/count($stdGrd);
		echo "$avg".PHP_EOL;
		$avg = 0;
	}
}

CalculateAverageGrade($studentGrades);


?>