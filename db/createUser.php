<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 03/02/19
 * Time: 15:32
 */

require_once "PDO.php";

$first_name = isset($_POST["first_name"]) ? $_POST["first_name"] : null;
$last_name = isset($_POST["last_name"]) ? $_POST["last_name"] : null;
$password = isset($_POST["password"]) ? $_POST["password"] : null;
$email = isset($_POST["email"]) ? $_POST["email"] : null;


header('Content-Type: application/json');
if($first_name != null && $last_name != null && $password != null && $email != null) {
    $pdo->prepare("INSERT INTO users VALUES (NULL,?,?,?,?)")->execute([$first_name, $last_name, $email, $password]);
    $res = array('result' => 'true');
    $res += array('user' => array('firstname' => $first_name,
        'lastname' => $last_name,
        'email' => $email,
        'password' => $password,
        ),
    );
    echo json_encode($res);
}else{
    $res = array('result' => 'false');
    $res += array('user' => array('firstname' => $first_name,
        'lastname' => $last_name,
        'email' => $email,
        'password' => $password,
        ),
    );
    echo json_encode($res);
}