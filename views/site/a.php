<?php

if(isset($_POST)) {

    $data = file_get_contents("php://input");

    $calc = json_decode($data, true);

    echo $calc["username"];
    echo $calc["month"];
    echo $calc["raw_types"];
    echo $calc["tonnage"];
    echo $calc["price"];

    $conn = new mysqli("localhost", "root", "root", "new");

    if($conn->connect_error) {
        die("Ошибка соединения: " . $conn->connect_error);
    }

    $calcusername = $conn->real_escape_string($calc["username"]);
    $calcmonth = $conn->real_escape_string($calc["month"]);
    $calcrawtypes = $conn->real_escape_string($calc["raw_types"]);
    $calctonnage = $conn->real_escape_string($calc["tonnage"]);
    $calcprice = $conn->real_escape_string($calc["price"]);
    
    $sql = "INSERT INTO history (`username`, `tonnage`, `month`, `raw_types`, `price`) VALUES ('$calcusername', '$calctonnage', '$calcmonth', '$calcrawtypes', '$calcprice')";

    if($conn->query($sql)) {
        echo "Запись расчёта внесена в таблицу";
    } else {
        echo "Не удалось внести запись расчёта в таблицу: " . $conn->error;
    }

    $conn->close();
}

