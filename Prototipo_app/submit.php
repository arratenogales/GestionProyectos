<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$image1 = $_FILES["image1"];
	$image2 = $_FILES["image2"];
	$image3 = $_FILES["image3"];

	// Check if at least 2 images were uploaded
	if (count(array_filter([$image1, $image2])) < 2) {
		echo "Please upload at least 2 photos of the broken machine.";
		exit;
	}

	// Check the quality of the images
	if ($image1["error"] == UPLOAD_ERR_OK && $image2["error"] == UPLOAD_ERR_OK && $image3["error"] == UPLOAD_ERR_OK) {
		// code to process the uploaded images
	} else {
		echo "There was an error uploading your files. Please make sure the images are of good quality and try again.";
		exit;
	}
}
?>
