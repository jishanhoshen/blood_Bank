<?php
include("config.php");
session_start();
if(isset($_POST['submit'])){
	$stmt=$conn->prepare('insert into students(std_name,std_roll,department,semester,blood,contact,status) values(?,?,?,?,?,?,?)');
	$std_name = $_POST['std_name'];
	$std_roll = $_POST['std_roll'];
	$department = $_POST['department'];
	$semester = $_POST['semester'];
	$blood = $_POST['blood'];
	$contact = $_POST['contact'];
	$status = "1";
	$stmt->bind_param("sssssss",$std_name,$std_roll,$department,$semester,$blood,$contact,$status);
	if($stmt->execute() === true){
		header("location:../");
		$_SESSION["data"] = "201";
	}else{
		header("location:../");
		$_SESSION["data"] = "404";
	}
}
?>

