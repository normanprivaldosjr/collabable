<?php
    $sql = "SELECT * FROM users WHERE employeeId = ?";
    $userid = $_SESSION['userId'];
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i" , $userid);
    if($stmt->execute()){
        $stmt->store_result();
        if($stmt->num_rows > 0){
            $stmt->bind_result($UID, $empName, $empUserName, $empPassword, $empEmailAdd, $empContactNum, $empAddress, $empRole);
            $stmt->fetch();
        }else{
            echo "<script>alert('Walang nakuha sa db'); </script>";
        }
    }else{
        echo "<script>alert('di nagexecute'); </script>";
    }

    if(isset($_POST['submit'])){
        $name = $_POST["settings_name"];
        $userName = $_POST["settings_user"];
        $password = $_POST["settings_pass"];
        $emailAdd = $_POST["settings_email"];
        $contactNum = $_POST["settings_contact"];
        $address = $_POST["settings_address"];

        // ihash yung password. di muna ihash kase di pa nakaencrypt
        $sql = "UPDATE users SET employeeName = ? , employeeUserName = ?, employeePassWord = ?, employeeEmailAddress = ?, employeeContactNum = ?, employeeAddress = ?  WHERE employeeId = $userid";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ssssss" , $name, $userName, $password, $emailAdd, $contactNum, $address);
        if($stmt->execute()){
            if($stmt->affected_rows > 0){
                echo "<script type='text/javascript'>alert('Success ang pagpoops'); </script>";
                //dapat magreload itez.
            }else{
                echo "<script type='text/javascript'>alert('nagexecute pero di nabago db'); </script>";
            }
        }else{
            echo "<script type='text/javascript'>alert('di nagexecute'); </script>";
        }
        //dapat pag nagsave changes mareload yung page para mabago yung naedit nyang deets.
    }