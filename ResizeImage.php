<?php 
	include_once "UploadResizeImage.php";

	class ResizeImage extends UploadResizeImage{
		public function __construct($original_image){
			$this->fileType = pathinfo($original_image, PATHINFO_EXTENSION);

			if ($this->fileType == 'png'){
				$this->originalImage = imagecreatefrompng($original_image);
			} else if ($this->fileType == 'gif'){
				$this->originalImage = imagecreatefromgif($original_image);
			} else {
				$this->originalImage = imagecreatefromjpeg($original_image);
			}

			list($this->originalWidth, $this->originalHeight) = getimagesize($original_image);
		}
	}
?>
