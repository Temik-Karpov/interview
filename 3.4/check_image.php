<?php
    session_start();
   unset($_SESSION["success"]);
    function redirect()
    {
        header("Location: 3.4.php");
        exit;
    }

    $parts = explode(".", $_FILES['image']['name']);
    if($parts[1] == "jpg" || $parts[1] == "png")
    {
        $uploaddir = './images/';
        $uploadfile = $uploaddir . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
            $_SESSION["success"] = "Success";
        } else {
            $_SESSION["success"] = "Error";
        }
        redirect();
    }







