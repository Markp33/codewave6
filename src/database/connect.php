<?php
    // $username = "u220712_focus6";
    // $password = "SLNUAfScHEMPf3exufw4";
    // $dbname = "u220712_focus6";
    $username = "root";
    $password = "root";
    $dbname = "focus6";
    $servername = "localhost";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    echo json_encode('[{"name":"error","msg":"' . $e->getMessage() . '"}]');
}
?>