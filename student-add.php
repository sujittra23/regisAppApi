<?php
    include("config/connectdb.php");

    $firstname = $_POST["firstname"];   // รับค่า username จากแอพหน้า login
    $lastname = $_POST["lastname"];   // รับค่า password จากแอพหน้า login
    $dep = $_POST["dep"]; 

    $sql = "
        INSERT INTO student (
            firstname,
            lastname,
            dep
        ) VALUES (
            '$firstname',
            '$lastname',
            '$dep'
        )
    ";
    $result = $conn->query($sql);
    if ($result) {
        echo json_encode([
            "status"=>"ok"
        ]);
    } else {
        echo json_encode([
            "status"=>"no"
        ]);
    }