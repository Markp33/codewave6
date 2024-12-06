<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$uid = uniqid();
$imageName = '';
$uploadPath = '';
$imgBlob = '';

// Check if a file is uploaded
if (!empty($_FILES['image']['name'])) {
    $imageName = $uid . "_" . basename($_FILES['image']['name']);
    $uploadPath = './../../img/cms-img/' . $imageName;

    // Validate and move uploaded file
    if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
        die("File upload error: " . $_FILES['image']['error']);
    }

    if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath)) {
        die("Failed to move uploaded file to destination.");
    }

    // Convert image to binary data
    $path = $uploadPath;
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);

    $imgBlob = 'data:image/' . $type . ';base64,' . base64_encode($data);
} else {
    // Handle the case where no file is uploaded
    $imgBlob = null; // Or assign a default placeholder image blob
}

// Proceed with the rest of your script
if ($imgBlob) {
    echo "Image uploaded and processed: ";
} else {
    echo "No image uploaded, proceeding without image.<br>";
}

?>