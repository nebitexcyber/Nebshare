<!-- view.php -->

<?php
include 'includes/config.php';
include 'templates/header.php';

// Fetch file information from the database (assuming you have a 'files' table)
$selectQuery = "SELECT * FROM files";
$result = mysqli_query($conn, $selectQuery);
?>

<div class="container mt-5">
    <h1 class="mb-4">View Files</h1>

    <div class="row">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $filename = $row['filename'];
            $filepath = $row['filepath'];

            echo '<div class="col-md-4 mb-4">';
            echo '<div class="card">';
            echo '<img src="' . $filepath . '" class="card-img-top" alt="' . $filename . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $filename . '</h5>';
            echo '<a href="' . $filepath . '" class="btn btn-primary" download>Download</a>';
            echo '</div></div></div>';
        }
        ?>
    </div>
</div>

<?php include 'templates/footer.php'; ?>
