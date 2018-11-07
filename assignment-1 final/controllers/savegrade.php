<?php
	include_once("../controllers/common.php");
	include_once("../models/grade.php");
	Database::connect('epiz_22950850_school', 'epiz_22950850', 'dsLnJJesPHB');
	$id = safeGet("id", 0);
	if($id==0) {
		grade::add();
	} else {
		$grade = new Grade($id);
		$grade->student_id= safeGet("student_id");
		$grade->course_id = safeGet("course_id");
		$grade->degree = safeGet("degree");
		$grade->examine_at= safeGet("examine_at");
		$grade->save();
	}
	header('Location: ../grades.php');
?>