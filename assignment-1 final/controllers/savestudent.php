<?php
	include_once("../controllers/common.php");
	include_once("../models/student.php");
	Database::connect('epiz_22950850_school', 'epiz_22950850', 'dsLnJJesPHB');
	$id = safeGet("id", 0);
	if($id==0) {
		Student::add();
	} else {
		$student = new Student($id);
		$student->name = safeGet("name");
		$student->save();
	}
	header('Location: ../students.php');
?>