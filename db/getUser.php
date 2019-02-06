<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 03/02/19
 * Time: 03:14
 */
require_once "PDO.php";

$first_name = isset($_POST["first_name"]) ? $_POST["first_name"] : null;

if($first_name != null) {
    header('Content-Type: application/json');
    $stmt = $pdo->prepare("SELECT * FROM users WHERE first_name=?");
    $stmt->execute([$first_name]);
    $user = $stmt->fetch();
    echo json_encode($user);
}