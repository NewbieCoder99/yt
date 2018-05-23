<!DOCTYPE html>
<html lang="id-ID" prefix="og: http://ogp.me/ns#">
<head>
	<title>Youtube</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link href='assets/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
	<link rel='shortcut icon' href='assets/Youtube.ico'>
	<style type="text/css">
	</style>
</head>
<body>
<?php
	$link = mysqli_connect("localhost", "root", "", "video");
	if (!$link)
	{
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}
?>