<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 04/02/19
 * Time: 01:40
 */
require_once "PDO.php";

//Check for current game
$stmt = $pdo->prepare("SELECT * FROM games");
$stmt->execute();
$result = $stmt->fetch();
$game_id = $result['game_id'];

$user_id = isset($_POST["user_id"]) ? $_POST["user_id"] : null;

if(!$result){
    echo "Error No Game!  <br/>";
}else{
    if($result['user_one_id'] == $user_id) {
        try{
            $stmt = $pdo->prepare("UPDATE games SET user_one_id = :user_one_id WHERE game_id = :game_id");
            $stmt->bindValue(":user_one_id", NULL);
            $stmt->bindValue(":game_id", $game_id);
            $stmt->execute();
        }
        catch(Exception $e) {
            echo "HERE 1";
            die('Error : '.$e->getMessage());
        }
        echo "Removed from game! <br />";
    }else if($result['user_two_id'] == $user_id){
        try{
            $stmt = $pdo->prepare("UPDATE games SET user_two_id = :user_two_id WHERE game_id = :game_id");
            $stmt->bindValue(":user_two_id", NULL);
            $stmt->bindValue(":game_id", $game_id);
            $stmt->execute();
        }
        catch(Exception $e) {
            echo "HERE 2";
            die('Error : '.$e->getMessage());
        }
        echo "Removed from game! <br />";
    }
}