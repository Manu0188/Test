<?php 
	$croppedImage=$_FILES['croppedImage'];
	$to_be_upload=$croppedImage['tmp_name'];
	$new_file='Cropper-image.png';

	move_uploaded_file($to_be_upload, $new_file);
	echo 1;
?>