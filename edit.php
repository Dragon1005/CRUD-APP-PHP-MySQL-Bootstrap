<?php
require_once 'config.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];


    $resultSQL = $conn->query("SELECT * FROM notes WHERE id = $id");


    if (mysqli_num_rows($resultSQL) > 0) {
        while ($row = mysqli_fetch_assoc($resultSQL)) {
            $title = $row['title'];
            $contents = $row['contents'];
        }
    }
};



?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit note</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light p-1">
    <a class="navbar-brand" href="index.php">Home</a>
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

<body>
    <div class="d-flex justify-content-center mt-5">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="form-grup">
                <label>Enter your title:</label>
                <input type="text" name="title-updated" class="form-control" value="<?php if (!empty($title)) {
                                                                                        echo $title;
                                                                                    } ?>">
                <label>Enter your specification:</label>
                <input type="text" name="contents-updated" class="form-control" value="<?php if (!empty($contents)) {
                                                                                            echo $contents;
                                                                                        } ?>">
                <input type="hidden" name="hidden-id" value="<?php echo $id; ?>">
                <input type="submit" name="sbmt-updated" class="btn btn-primary mt-1" value="Send">
            </div>
        </form>
    </div>
    <?php
    if (isset($_POST['sbmt-updated'])) {

        $new_title = $_POST['title-updated'];
        $new_contents = $_POST['contents-updated'];
        $id = $_POST['hidden-id'];

        $stmt = $conn->prepare("UPDATE notes SET title=?, contents=? WHERE id = ?");
        $stmt->bind_param('ssi', $new_title, $new_contents, $id);
        $stmt->execute();
        $stmt->close();

        header("Location: index.php");
    }
    ?>
</body>


</html>