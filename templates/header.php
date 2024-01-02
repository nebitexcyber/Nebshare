<!-- header.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NebShare - File Sharing Service</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom styles -->
    <link rel="stylesheet" href="styles/custom.css">
    <!-- Optional: Add your own styling or overrides -->
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1f4e8f;"> <!-- Lapis blue color background -->
    <a class="navbar-brand" href="#">
        <img src="path/to/your/logo.png" width="30" height="30" class="d-inline-block align-top" alt="NebShare Logo">
        NebShare
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="upload.php">Upload</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="view.php">View Files</a>
            </li>
            <!-- Add more navigation items as needed -->
        </ul>
    </div>
</nav>

<!-- Main content container -->
<div class="container">
