<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number = intval($_POST['number']);
    $text = $_POST['text'];
    $dataArray = [];

    for ($i = 0; $i < $number; $i++) {
        $dataArray[] = "$i. $text";
    }

    header('Content-Type: application/json');
    echo json_encode($dataArray);
    exit();
}

?>