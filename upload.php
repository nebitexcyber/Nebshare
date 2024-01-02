<!-- upload.php -->

<?php
include 'includes/config.php';
include 'includes/functions.php';
include 'templates/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['uploaded_file'])) {
        $uploadDir = 'uploads/';
        $uploadedFile = $uploadDir . basename($_FILES['uploaded_file']['name']);
        
        if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $uploadedFile)) {
            // Store file information in the database
            $filename = $_FILES['uploaded_file']['name'];
            $filepath = $uploadedFile;

            // Insert data into the database (assuming you have a 'files' table)
            $insertQuery = "INSERT INTO files (filename, filepath) VALUES ('$filename', '$filepath')";
            mysqli_query($conn, $insertQuery);

            echo '<div class="alert alert-success" role="alert">File uploaded successfully!</div>';
            chmod($uploadedFile, 0777); // World-writable permissions for demonstration purposes
        } else {
            echo '<div class="alert alert-danger" role="alert">Error uploading file.</div>';
        }
    }
}
?>

<h1 class="mt-4 mb-4">Upload Files</h1>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="uploaded_file">Select File:</label>
        <input type="file" class="form-control" name="uploaded_file" required>
    </div>
    <button type="submit" class="btn btn-primary">Upload</button>
</form>

<?php include 'templates/footer.php'; ?>
