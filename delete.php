<?php

require_once 'config.php';
require_once 'create.php';
if (isset($_GET['id'])) {

    session_start();

    $_SESSION['msg'] = "Notatka została skasowana";
    $_SESSION['msg-type'] = "danger";


    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM notes WHERE id=?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->close();

    header('Location: notes.php');
}