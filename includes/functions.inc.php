<?php

function usersUidExists($conn, $usersUid)
{
    $sql = "SELECT * FROM tbl_users WHERE usersUid = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../pages/adminPage/adminPageUserAccount.php?error=stmtfailed");
    }

    mysqli_stmt_bind_param($stmt, "s", $usersUid);
    mysqli_stmt_execute($stmt);
   
    $resutlData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resutlData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUsersAccount($conn, $usersLName, $usersFName, $usersMName, $usersEmail, $usersType, $usersUid, $usersPwd, $usersGender)
{
    $sql = "INSERT INTO tbl_users (usersLName, usersFName, usersMName, usersEmail, usersType, usersUid, usersPwd, usersGender) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../pages/adminPage/adminPageUserAccount.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssssss", $usersLName, $usersFName, $usersMName, $usersEmail, $usersType, $usersUid, $usersPwd, $usersGender);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../pages/adminPage/adminPageUserAccount.php?status=success");
    exit();
}

function updateUserProfile($conn, $usersUid, $usersFName, $usersMName, $usersLName, $usersEmail)
{
    $sql = "UPDATE tbl_users SET usersUid='$usersUid', usersFName='$usersFName', usersMName='$usersMName', usersLName='$usersLName', usersEmail='$usersEmail' WHERE usersUid = '$usersUid'";
    
    if (mysqli_query($conn, $sql)) {
        header("location: ../pages/adminPage/adminPageUserProfile.php?status=updateSuccessfull");
        exit();
    }
}

function loginUser($conn, $usersUid, $usersPwd)
{
    $sql = "SELECT * FROM tbl_users WHERE usersUid='$usersUid' limit 1";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            if ($user_data['usersPwd'] === $usersPwd && $user_data['usersType'] === 'Admin') {
                session_start();
                $_SESSION['usersUid'] = $user_data['usersUid'];
                $_SESSION['usersFName'] = $user_data['usersFName'];
                $_SESSION['usersMName'] = $user_data['usersMName'];
                $_SESSION['usersLName'] = $user_data['usersLName'];
                $_SESSION['usersEmail'] = $user_data['usersEmail'];
                $_SESSION['usersType'] = $user_data['usersType'];
                $_SESSION['usersPwd'] = $user_data['usersPwd'];
                header("location: ../pages/adminPage/adminPageDashboard.php");
                die;
            } elseif ($user_data['usersPwd'] === $usersPwd && $user_data['usersType'] === 'Physician') {
                session_start();
                $_SESSION['usersUid'] = $user_data['usersUid'];
                $_SESSION['usersFName'] = $user_data['usersFName'];
                $_SESSION['usersMName'] = $user_data['usersMName'];
                $_SESSION['usersLName'] = $user_data['usersLName'];
                $_SESSION['usersEmail'] = $user_data['usersEmail'];
                $_SESSION['usersType'] = $user_data['usersType'];
                $_SESSION['usersPwd'] = $user_data['usersPwd'];
                header("location: ../pages/physicianPage/physicianPageDashboard.php");
                die;
            } elseif ($user_data['usersPwd'] === $usersPwd && $user_data['usersType'] === 'Nurse') {
                session_start();
                $_SESSION['usersUid'] = $user_data['usersUid'];
                $_SESSION['usersFName'] = $user_data['usersFName'];
                $_SESSION['usersMName'] = $user_data['usersMName'];
                $_SESSION['usersLName'] = $user_data['usersLName'];
                $_SESSION['usersEmail'] = $user_data['usersEmail'];
                $_SESSION['usersType'] = $user_data['usersType'];
                $_SESSION['usersPwd'] = $user_data['usersPwd'];
                header("location: ../pages/staffPage/staff_landing.php");
                die;
            } elseif ($user_data['usersPwd'] === $usersPwd && $user_data['usersType'] === 'Office Staff') {
                session_start();
                $_SESSION['usersUid'] = $user_data['usersUid'];
                $_SESSION['usersFName'] = $user_data['usersFName'];
                $_SESSION['usersMName'] = $user_data['usersMName'];
                $_SESSION['usersLName'] = $user_data['usersLName'];
                $_SESSION['usersEmail'] = $user_data['usersEmail'];
                $_SESSION['usersType'] = $user_data['usersType'];
                $_SESSION['usersPwd'] = $user_data['usersPwd'];
                header("location: ../pages/staffPage/patient_mngmnt.php");
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

function changePassword($conn, $usersUid, $usersCurrentPwd, $usersNewtPwd, $usersNewtPwd2)
{
    $sql = "UPDATE tbl_users SET usersPwd='$usersNewPwd' WHERE usersUid = $_SESSION[usersUid]";
    
    if (mysqli_query($conn, $sql)) {
        header("location: ../pages/adminPage/adminPageUserProfile.php?status=updateSuccessfull");
        exit();
    }
}