<?php

function clear ()
{
    global $connect;
    foreach ($_POST as $k=>$v)
        $_POST[$k] = htmlspecialchars(mysqli_real_escape_string($connect,$v));
}

function saveMessage ()
{
    global $connect;
    clear();
    extract($_POST);
    $query = "INSERT INTO notes (author,text) VALUES ('$author','$text')";
    mysqli_query($connect,$query);
}

function getMessages ()
{
    global $connect;
    $query = "SELECT * FROM notes ORDER BY id  DESC";
    $result = mysqli_query($connect,$query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

