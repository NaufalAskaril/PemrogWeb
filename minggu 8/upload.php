<?php
if (isset($_POST["submit"])) {
}
    $targetDirectory = +";
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $maxFileSize = 5 * 1024 * 1024;

    if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            // Create thumbnail
            $thumbnailSize = 200;
            $thumbnail = imagecreatetruecolor($thumbnailSize, $thumbnailSize);
            switch ($fileType) {
                case "jpg":
                case "jpeg":
                    $sourceImage = imagecreatefromjpeg($_FILES["fileToUpload"]["tmp_name"]);
                    break;
                case "png":
                    $sourceImage = imagecreatefrompng($_FILES["fileToUpload"]["tmp_name"]);
                    break;
                case "gif":
                    $sourceImage = imagecreatefromgif($_FILES["fileToUpload"]["tmp_name"]);
                    break;
            }

            imagecopyresampled($thumbnail, $sourceImage, 0, 0, 0, 0, $thumbnailSize, $thumbnailSize, imagesx($sourceImage), imagesy($sourceImage));

            switch ($fileType) {
                case "jpg":
                case "jpeg":
                    imagejpeg($thumbnail, $targetDirectory . 'thumb_' . basename($_FILES["fileToUpload"]["name"]));
                    break;
                case "png":
                    imagepng($thumbnail, $targetDirectory . 'thumb_' . basename($_FILES["fileToUpload"]["name"]));
                    break;
                case "gif":
                    imagegif($thumbnail, $targetDirectory . 'thumb_' . basename($_FILES["fileToUpload"]["name"]));
                    break;
            }

            echo "File berhasil diunggah.";
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>