s<?php

if(isset($_POST["submit"])){
    
    $usersLName = $_POST["usersLName"];
    $usersFName = $_POST["usersFName"];
    $usersMName = $_POST["usersMName"];
    $usersEmail = $_POST["usersEmail"];
    $usersType = $_POST["usersType"];
    $usersUid = $_POST["usersUid"];
    $usersPwd = $_POST["usersPwd"];
    $usersGender = $_POST["usersGender"];
    

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (usersUidExists ($conn, $usersUid) !== false) {
        header("location: ../pages/adminPage/adminPageUserAccount.php?error=usernametaken");
        exit();      
    }
    createUsersAccount ($conn, $usersLName, $usersFName, $usersMName, $usersEmail, $usersType, $usersUid, $usersPwd, $usersGender);

}
else{
    header("location: ../pages/adminPage/adminPageUserAccount.php");
    exit();
}

?>