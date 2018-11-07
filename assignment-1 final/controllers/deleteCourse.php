<?php
	header('Content-Type: application/json; charset=utf-8');
	include_once("../models/course.php");
	Database::connect('epiz_22950850_school', 'epiz_22950850', 'dsLnJJesPHB');
	$course = new course($_GET['id']);
	$course->delete();
	echo json_encode(['status'=>1]);
?>