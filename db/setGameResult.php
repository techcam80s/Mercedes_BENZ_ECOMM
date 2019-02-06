<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 03/02/19
 * Time: 15:32
 */

require_once "PDO.php";

$game_id = isset($_POST["game_id"]) ? $_POST["game_id"] : null;
$winner = isset($_POST["winner_user_id"]) ? $_POST["winner_user_id"] : null;
$loser = isset($_POST["loser_user_id"]) ? $_POST["loser_user_id"] : null;

header('Content-Type: application/json');
if($winner != null && $loser != null && $game_id != null){
    try {
        $stmt = $pdo->prepare("INSERT INTO results(result_id,game_id,winner_id,loser_id) VALUES (:result_id, :game_id, :winner_id, :loser_id)");
        $stmt->bindValue(":result_id", NULL);
        $stmt->bindValue(":game_id", $game_id);
        $stmt->bindValue(":winner_id", $winner);
        $stmt->bindValue(":loser_id", $loser);
        $stmt->execute();
    }
    catch(PDOException $e)
    {
        $e->getmessage();
    }
    $res = array('result' => 'true');
    $res += array('game' => array('game_id' => $game_id,
        'winner_user_id' => $winner,
        'loser_user_id' => $loser,
        ),
    );
    echo json_encode($res);
}