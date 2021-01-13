<?php
// var_dump($_POST);
// exit();
// 送信データのチェック
// 送信データ受け取り
$id = $_POST['id'];
$team = $_POST['team'];
$name = $_POST['name'];
$tall = $_POST['tall'];
$weight = $_POST['weight'];
$born = $_POST['born'];
$comefrom = $_POST['comefrom'];
$image = $_POST['image'];

// 関数ファイルの読み込み
session_start();
include("functions.php");
check_session_id();

// DB接続
$pdo = connect_to_db();

// UPDATE文を作成&実行
$sql = 'UPDATE rugby_table SET team=:team, name=:name, tall=:tall, weight=:weight, born=:born, comefrom=:comefrom, image=:image, updated_at=sysdate()  WHERE id =:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':team', $team, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':tall', $tall, PDO::PARAM_INT);
$stmt->bindValue(':weight', $weight, PDO::PARAM_INT);
$stmt->bindValue(':born', $born, PDO::PARAM_STR);
$stmt->bindValue(':comefrom', $comefrom, PDO::PARAM_STR);
$stmt->bindValue(':image', $image, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
// var_dump($_POST);
// exit();
$status = $stmt->execute();

// データ登録処理後
if ($status == false) {
    // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    // 正常にSQLが実行された場合は一覧ページファイルに移動し，一覧ページの処理を実行する
    header("Location:read.php");
    exit();
}
