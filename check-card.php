<?php
    include("config/connectdb.php");

    $idcard = $_POST["idcard"];

    $sql = "
        SELECT * 
        FROM student 
        WHERE idcard='$idcard' 
    ";
    $result = $conn->query($sql);
    if ($result->num_rows>=1) {
        echo json_encode([
            "status"=>"ok"
        ]);
    } else {
        echo json_encode([
            "status"=>"no"
        ]);
    }