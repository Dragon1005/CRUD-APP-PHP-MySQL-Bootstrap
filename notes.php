<?php
require_once 'config.php';
require_once 'create.php';
require_once 'delete.php';

$result = $conn->query('SELECT * FROM notes');

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['msg'])) : ?>
<div class="alert alert-<?= $_SESSION['msg-type']; ?> text-center"> <?php echo $_SESSION['msg']; ?>
</div>
<?php unset($_SESSION['msg']); ?>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of notes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-1">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link active" href="notes.php">List of notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="project.php">About the application</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container p-5">
        <h2 class="p-5  text-center">List of notes:</h2>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <div class="container bg-light mt-5 p-1">
            <h2 class="d-flex justify-content-center mt-5 text-secondary">Note nr: <?php echo $row['id']; ?></h2>
            <table>
                <tr><?php echo "<b>Title: </b>" . $row['title'] . '<br>'; ?></tr>
                <tr><?php echo "<b>Contents: </b>" . $row['contents'] . '<br><br>'; ?></tr>
                <a class="btn btn-info mr-5 pr-1" style="margin-right: 5px"
                    href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a class="btn btn-danger mr-5 pr-1" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                <?php echo '<hr>'; ?>
            </table>
        </div>
        <?php endwhile; ?>
    </div>
</body>

</html>