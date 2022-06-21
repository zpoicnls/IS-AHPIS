<?php

function createUser($conn, $usersLName, $usersFName, $usersMName, $usersEmail, $usersType, $usersUid, $usersPwd){
$sql = "INSERT INTO tbl_users (usersLName, usersFName, usersMName, usersEmail, usersType, usersUid, usersPwd) VALUES (?, ?, ?, ?, ?, ?, ?);";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)){
    header("location: adminPageCreateUserAccount.php?error=stmtfailed");
    exit();
}

mysqli_stmt_bind_param($stmt, "sssssss", $usersLName, $usersFName, $usersMName, $usersEmail, $usersType, $usersUid, $usersPwd);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("location: ../../pages/adminPage/adminPageCreateUserAccount.php?error=none");
    exit();
}