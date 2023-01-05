<?php
require_once 'config.php';


$result = $conn->query('SELECT * FROM notes');


if (isset($_POST['sbmt'])) {


    $title = $_POST['title'];
    $contents = $_POST['contents'];




    $stmt = $conn->prepare('INSERT INTO notes (title, contents) VALUES (?,?)');
    $stmt->bind_param(('ss'), $title, $contents);
    $stmt->execute();
    $stmt->close();

    header("Location: notes.php");

   
}
