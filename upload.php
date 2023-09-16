<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["upload"])) {
    $targetDirectory = "uploads/"; // Create an "uploads" directory where the files will be stored
    $targetFile = $targetDirectory . basename($_FILES["file"]["name"]);
    
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        header("Location: index.html"); // Redirect back to the index page after successful upload
        exit();
    } else {
        echo "Error uploading the file.";
    }
}
?
