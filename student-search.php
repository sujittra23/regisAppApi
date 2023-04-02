<?php
    include("config/connectdb.php");

    $idcard = $_POST["idcard"];   // รับค่า username จากแอพหน้า login
    $birthday = $_POST["birthday"];

    $sql = "
        SELECT * 
        FROM student 
            inner join status ON status.status_id=student.status_id
        WHERE idcard='$idcard' AND birthday='$birthday'
    ";
    $result = $conn->query($sql);
    if ($result->num_rows==1) {
        echo json_encode([
            "status"=>"ok",
            "data"=>$result->fetch_assoc()
        ]);
    } else {
        echo json_encode([
            "status"=>"no"
        ]);
    }