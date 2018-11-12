<?php

require_once "config.php";

if(isset($_POST['submit'])){

    $projName = $_POST["new-project_title"];
    $projDesc = $_POST["new-project_description"];
    $initStart = $_POST["new-project_start1"];
    $initEnd = $_POST["new-project_end1"];
    $planStart = $_POST["new-project_start2"];
    $planEnd = $_POST["new-project_end2"];
    $exeStart = $_POST["new-project_start3"];
    $exeEnd = $_POST["new-project_end3"];
    $closeStart = $_POST["new-project_start4"];
    $closeEnd = $_POST["new-project_end4"];
    $isAct = 1;

    $val = array();
    $addMembers = "";
    foreach($_POST['members'] as $val){
        $addMembers = $addMembers . $val . ",";
    }

    $sql = "INSERT INTO project (projectName, projectDesc, projectMembers, initStartDate, initEndDate, planStartDate, planEndDate, exeStartDate, exeEndDate, closeStartDate, closeEndDate, isActive) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sssssssssssi" , $projName , $projDesc , $addMembers, $initStart, $initEnd, $planStart, $planEnd, $exeStart, $exeEnd, $closeStart, $closeEnd, $isAct);

    if($stmt->execute()){
        $stmt->store_result();
        if($stmt->affected_rows > 0){
            echo "<script> alert('Create Project Successful! '); </script>";
        } else {
            echo "<script> alert('Error Creating Project! '); </script>";
        }
    } else {
        echo "<script> alert('Error Execution! '); </script>";
    }
    $stmt->close();

}