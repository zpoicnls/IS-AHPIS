<?php

if (isset($_POST["changePassword"])) {
    $usersUid = $_SESSION['usersUid'];
    $usersCurrentPwd = $_POST["currentPassword"];
    $usersNewtPwd = $_POST["newPassword"];
    $usersNewtPwd2 = $_POST["newPassword2"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $sql = "SELECT * FROM tbl_users WHERE usersUid = $_SESSION[usersUid]";
    $result = $conn->$query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($usersCurrentPwd = $row['usersPwd']) {
                changePassword($conn, $usersUid, $usersCurrentPwd, $usersNewtPwd, $usersNewtPwd2);
                header("location: ../pages/adminPage/adminPageUserProfile.php?error=changePasswordSuccessful");
                exit();
            }
        }
    }
} else {
    header("location: ../pages/adminPage/adminPageUserProfile.php?error=somethingwentwrong");
    exit();
}