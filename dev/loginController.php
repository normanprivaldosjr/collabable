<?php
    require_once "config.php";
    $sql = "SELECT * FROM users WHERE employeeUserName = ? AND employeePassWord = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss" , $username , $password);
    //$param_password = md5($password);
    if($stmt->execute()){
        $stmt->store_result();
        if($stmt->num_rows > 0){
            $_SESSION['ID'] = "set";
            $stmt->bind_result($employeeId, $employeeName, $employeeUserName, $employeePassWord , $employeeEmailAddress, $employeeContactNum , $employeeAddress, $employeeRole);
            if($stmt->fetch()){
                $_SESSION['userId'] = $employeeId;
                $_SESSION['userName'] = $employeeName;
                    if($employeeRole == "admin"){
                        header("location:homepage-admin.php");
                    } else if($employeeRole == "leader") {
                        header("location:homepage.php");
                    }else if($employeeRole == "member"){
                        header("location:homepage-member.php");
                    } else {
                        echo "<script> alert('Invalid User name or Password'); </script>";
                    }
                } else {
                    $acc_err = "Invalid Username or Password";
                }
            } else {
                $acc_err = "Invalid Username or Password";
            }
            $stmt->close();
    }
    $mysqli->close();