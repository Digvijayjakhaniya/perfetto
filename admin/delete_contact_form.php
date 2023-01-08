<?php
require_once "layout/config.php";
error_reporting(0);

// if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "DELETE FROM contact WHERE id=$id";
	$data=mysqli_query($conn,$sql);
	if($data){
		echo "<script>alert('Record Deleted'); window.location.href='contact_form.php';</script>";
		
	}else{
		echo "<script>alert('Failed To Deleted');</script>";
	}
    