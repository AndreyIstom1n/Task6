<?php
if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]))
{   
    $id = $_GET["id"];
    $user = 'u52841';
    $pass = '3110223';
    $db = new PDO('mysql:host=localhost;dbname=u52841', $user, $pass,
        [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $stmt = $db->prepare("DELETE FROM application WHERE id = :id");
    $stmt->bindParam(':id', $usrid);
    $usrid = $id;
    $stmt->execute();

    $stmt = $db->prepare("DELETE FROM abilities WHERE id = :id");
    $stmt->bindParam(':id', $usrid);
    $usrid = $id;
    $stmt->execute();

    header('Location: ./admin.php');  
}

?>