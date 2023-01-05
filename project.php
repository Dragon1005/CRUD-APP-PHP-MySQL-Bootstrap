<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O projekcie</title>
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
                    <a class="nav-link" href="notes.php">List of notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="project.php">About the application</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container" style="width: 45rem;">
        <img src="src/10798281_19362653.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title mt-3">CRUD Operations in PHP Using MySQL + bootstrap</h5>
            <p class="card-text mt-3">CRUD is an acronym for Create, Read, Update, and Delete. As the name suggests,
                these operations
                manipulate
                data in a database that is important to any web application's basic functionality. This application
                written
                in PHP is connected to a database (mySQL) on a local server. The boootsrap css framework is
                responsible for
                the graphic design of the application.</p>
            <a href="index.php" class="btn btn-primary mb-5">Home</a>
        </div>
    </div>
</body>

</html>