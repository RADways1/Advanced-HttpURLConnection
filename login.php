<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['Email']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        if ($db->logIn("users", $_POST['Email'], $_POST['password'])) {
            echo "Login Success";
        } else echo "Email or Password wrong";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
