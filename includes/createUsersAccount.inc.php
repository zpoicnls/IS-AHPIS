<?php

if(isset($_POST["submit"])){
    
    $usersLName = $_POST["usersLName"];
    $usersFName = $_POST["usersFName"];
    $usersMName = $_POST["usersMName"];
    $usersEmail = $_POST["usersEmail"];
    $usersType = $_POST["usersType"];
    $usersUid = $_POST["usersUid"];
    $usersPwd = $_POST["usersPwd"];
    

    require_once '../../includes/dbh.inc.php';
    require_once 'adminCreateUserAccountFunction.php';

    createUser($conn, $usersLName, $usersFName, $usersMName, $usersEmail, $usersType, $usersUid, $usersPwd);
}
else{
    header("location: ../adminCreateUserAccount.php");
}

?>