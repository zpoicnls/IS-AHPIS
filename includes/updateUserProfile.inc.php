<?php

if (isset($_POST["update"])) {
    $usersUid = $_POST["usersUid"];
    $usersFName = $_POST["usersFName"];
    $usersMName = $_POST["usersMName"];
    $usersLName = $_POST["usersLName"];
    $usersEmail = $_POST["usersEmail"];
    $usersType = $_POST["usersType"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    updateUserProfile($conn, $usersUid, $usersFName, $usersMName, $usersLName, $usersEmail);
} else {
    header("location: ../pages/adminPage/adminPageUserProfile.php?error=updateunsuccessfull");
    exit();
}