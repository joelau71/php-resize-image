<?php
	include_once "ResizeImage.php" ;
	include_once "UploadResizeImage.php";

	$file = "12.png";
	$resize = new ResizeImage($file);
	$resize->targetWidth = 600;
	$resize->targetHeight = 300;
	$resize->save("test.png");

	header('Content-Type: image/png');
	imagejpeg($resize->resizeImage);
	die();
?>
