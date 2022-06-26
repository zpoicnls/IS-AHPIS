<?php

function usersUidExists ($conn, $usersUid) {
    $sql = "SELECT * FROM tbl_users WHERE usersUid = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../pages/adminPage/adminPageCreateUserAccount.php?error=stmtfailed");
    }

    mysqli_stmt_bind_param($stmt, "s", $usersUid);
    mysqli_stmt_execute($stmt);
   
    $resutlData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resutlData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUsersAccount ($conn, $usersLName, $usersFName, $usersMName, $usersEmail, $usersType, $usersUid, $usersPwd) {
    $sql = "INSERT INTO tbl_users (usersLName, usersFName, usersMName, usersEmail, usersType, usersUid, usersPwd) VALUES (?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../pages/adminPage/adminPageCreateUserAccount.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssssss", $usersLName, $usersFName, $usersMName, $usersEmail, $usersType, $usersUid, $usersPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../pages/adminPage/adminPageCreateUserAccount.php?error=none");
    exit();
}

function loginUser($conn, $usersUid, $usersPwd) {

    $sql = "SELECT * FROM tbl_users WHERE usersUid='$usersUid' limit 1";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            if ($user_data['usersPwd'] === $usersPwd) {
                $_SESSION['usersUid'] = $user_data['usersUid'];
                header("location: ../pages/adminPage/adminPageDashboard.php");
                die;
            }
        }
    }
    header("location: ../index.html?error=userdoesnotexist");
    die;
    
    //$usersUidExists = usersUidExists ($conn, $usersUid);

    //if ($usersUidExists === false) {
   //     header("location: ../index.html?error=userdoesnotexist");
   //     exit();
   // }

   // $dbPwd = $usersUidExists["usersPwd"];
   // $checkPwd = password_verify($usersPwd, $dbPwd);

   // if ($checkPwd === false) {
   //     header("location: ../index.html?error=incorrectpassword");
   //     exit();
  //  }
  //  else if ($checkPwd === true) {
  //      session_start();
  //      $_SESSION["usersUid"] = $usersUidExists["usersUid"];
   //     header("location: ../pages/adminPage/adminPageDashboard.php?");
   //     exit();
   // }


     
}

?>