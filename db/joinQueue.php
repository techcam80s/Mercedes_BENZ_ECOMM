<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 03/02/19
 * Time: 21:46
 */

require_once "PDO.php";
$first_name = isset($_POST['first_name'])? $_POST['first_name'] : null;
$password = isset($_POST['password'])? $_POST['password'] : null;

if($first_name != null && $password != null) {
    //TODO
    //Check if the user is registered!
    header('Content-Type: application/json');
    $stmt = $pdo->prepare("SELECT * FROM users WHERE first_name=?");
    $stmt->execute([$first_name]);
    $user = $stmt->fetch();
    //if valid add user check if user is currently in the queue
    if ($user['password'] == $password) {
        $user_id = $user['user_id'];
        $stmt = $pdo->prepare("SELECT sch_user_id FROM schedule WHERE sch_user_id=?");
        $stmt->execute([$user_id]);
        $isInQueue = $stmt->fetch();
        //var_dump($isInQueue);
        if (!$isInQueue['sch_user_id']) {
            try {
                $stmt = $pdo->prepare("INSERT INTO schedule VALUES (NULL,?)");
                $stmt->execute([$user_id]);
                //$result = $stmt->errorCode();
            } catch (PDOException $e) {
                echo $e;
            }
            echo $result;
            echo json_encode($stmt);
        } else {
            echo "User is all ready in the queue!";
        }
    } else {
        echo "User not found!";
    }
}
