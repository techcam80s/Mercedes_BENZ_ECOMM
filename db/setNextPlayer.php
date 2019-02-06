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

$stmt = $pdo->prepare("SELECT * FROM schedule WHERE schedule_id = (SELECT MIN(schedule_id) schedule_id FROM schedule)");
$stmt->execute();
$res = $stmt->fetch(PDO::FETCH_ASSOC);
$user_id = $res['sch_user_id'];
//echo $user_id;
var_dump($res);


if(!$result){
    try{
        $stmt = $pdo->prepare("INSERT INTO games(game_id,user_one_id,user_two_id) VALUES (:game_id, :user_one_id, :user_two_id)");
        $stmt->bindValue(":game_id", NULL);
        $stmt->bindValue(":user_one_id", $user_id);
        $stmt->bindValue(":user_two_id", NULL);
        $stmt->execute();
    }
    catch(Exception $e) {
        die('Error : '.$e->getMessage());
    }
    echo "Game Created  <br/>";
}else{
    if($result['user_one_id'] == NULL) {
        try{
            $stmt = $pdo->prepare("UPDATE games SET user_one_id = :user_one_id WHERE game_id = :game_id");
            $stmt->bindValue(":user_one_id", $user_id);
            $stmt->bindValue(":game_id", $game_id);
            $stmt->execute();
        }
        catch(Exception $e) {
            echo "HERE 1";
            die('Error : '.$e->getMessage());
        }
        echo "1 Added to game <br />";
    }else if($result['user_two_id'] == NULL){
        try{
            $stmt = $pdo->prepare("UPDATE games SET user_two_id = :user_two_id WHERE game_id = :game_id");
            $stmt->bindValue(":user_two_id", $user_id);
            $stmt->bindValue(":game_id", $game_id);
            $stmt->execute();
        }
        catch(Exception $e) {
            echo "HERE 2";
            die('Error : '.$e->getMessage());
        }
        echo "2 Added to game <br />";
    }
}