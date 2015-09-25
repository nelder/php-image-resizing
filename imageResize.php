<?php 
/////////////////////////////////////////////////////
// SQL Image Resizer | Nick Elder | June 30th 2015 //
/////////////////////////////////////////////////////
/* Typically preinstalled dependencies, image resize 
useful for managing user photo inputs */



//////////////////
// Resize Image //
//////////////////
// For compression
function compressImage($file) {

	//Grab format
	$info = getimagesize($file);

	//Input image according to format
	if($info['mime'] == 'image/png'){
		$image = imagecreatefrompng($file);
		imagepng($image, $file, 6);

	}
	elseif ($info['mime'] == 'image/jpeg') {
		$image = imagecreatefromjpeg($file);
		imagejpeg($image, $file, 40);
	}
	elseif ($info['mime'] == 'image/gif') {
		$image = imagecreatefromgif($file);
		imagegif($image, $file, 0);
	}
}



/////////////////////////
// Thumbnail Generator //
/////////////////////////
//To create scaled smaller

function thumbnailImage($inname, $outname, $bounds = 500) {
	//Grab format
	$info = getimagesize($inname);

	//Input image according to format
	if($info['mime'] == 'image/png'){
		$image = imagecreatefrompng($inname);
	}
	elseif ($info['mime'] == 'image/jpeg') {
		$image = imagecreatefromjpeg($inname);
	}
	elseif ($info['mime'] == 'image/gif') {
		$image = imagecreatefromgif($inname);
	}

	//Set properties 
	$restriction = $bounds;

	//Grab current values
	$width = imagesx($image);
	$height = imagesy($image);

	//Fit within a bounds width
	if($width<$height) {
		$new_height = $restriction;
		$new_width = $restriction/$height*$width;
	}
	else {
		$new_width = $restriction;
		$new_height = $restriction/$width*$height;
	}

	//Create new image container 
	$thumb = imagecreatetruecolor( $new_width, $new_height );

	//Resize and crop
	imagecopyresampled($thumb,
	                   $image,
	                   0, 0,
	                   0, 0,
	                   $new_width, $new_height,
	                   $width, $height);

	//Output image
	if($info['mime'] == 'image/png'){
		imagepng($thumb, $outname, 2);
	}
	elseif ($info['mime'] == 'image/jpeg') {
		imagejpeg($thumb, $outname, 80);
	}
	elseif ($info['mime'] == 'image/gif') {
		imagegif($thumb, $outname, 0);
	}
}
?>