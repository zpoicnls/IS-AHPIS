<?php

if (isset($_POST["submit"])) {

    $usersUid = $_POST["usersUid"];
    $usersPwd = $_POST["usersPwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    loginUser($conn, $usersUid, $usersPwd);
    
}
else {
    header("location: ../index.html?error=datanotmatchdatanotmatch");
    exit();
}

?>