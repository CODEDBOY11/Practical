<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["upload"])) {
    $targetDirectory = "uploads/"; // Create an "uploads" directory where the files will be stored

    // Generate a unique filename for the uploaded file
    $targetFile = $targetDirectory . uniqid() . '_' . basename($_FILES["file"]["name"]);

    // Check if the file is an allowed format (you can customize this list)
    $allowedExtensions = array("jpg", "jpeg", "png", "pdf");
    $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if (in_array($fileExtension, $allowedExtensions)) {
        // Move the uploaded file to the server
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            header("Location: index.html"); // Redirect back to the index page after successful upload
            exit();
        } else {
            echo "Error uploading the file.";
        }
    } else {
        echo "Invalid file format. Please upload a jpg, jpeg, png, or pdf file.";
    }
}
?>
