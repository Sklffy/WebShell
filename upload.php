<?php
$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);

if (!is_dir($targetDir)) {
    mkdir($targetDir, 0755, true);
}

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
    echo "File uploaded successfully: " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
} else {
    echo "File upload failed.";
}
?>
