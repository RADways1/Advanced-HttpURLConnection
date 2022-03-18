<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['cellnumber']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        if ($db->Register("users", $_POST['fullname'], $_POST['email'], $_POST['cellnumber'], $_POST['password'])) {
            echo "Register Successful";
        } else echo "Register Failed";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
