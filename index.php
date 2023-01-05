<?php
require_once 'config.php';
require_once 'create.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-1">
        <a class="navbar-brand" href="index.php">Application CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="notes.php">List of notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="project.php">About the application</a>
                </li>
            </ul>
        </div>
    </nav>

    <h2 class="p-5  text-center">Add a note:</h2>

    <div class="d-flex justify-content-center mt-5">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="form-grup">
                <label>Enter your title:</label>
                <input type="text" name="title" class="form-control" required>
                <label>Enter your specification:</label>
                <input type="text" name="contents" class="form-control" required>
                <input type="submit" name="sbmt" class="btn btn-primary mt-1" value="Send">
            </div>
        </form>
    </div>
</body>

</html>