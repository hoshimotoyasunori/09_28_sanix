<?php
// var_dump($_POST);
// exit();
// 送信データのチェック
// 送信データ受け取り
$id = $_POST['id'];
// $name = $_POST['name'];
$main_position = $_POST['main_position'];
$sub_position = $_POST['sub_position'];
$image = $_POST['image'];

// 関数ファイルの読み込み
session_start();
include("functions.php");
check_session_id();

// DB接続
$pdo = connect_to_db();

// UPDATE文を作成&実行
$sql = 'UPDATE sanix_member SET main_position=:main_position, sub_position=:sub_position, image=:image, updated_at=sysdate()  WHERE id =:id';

$stmt = $pdo->prepare($sql);
// $stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':main_position', $main_position, PDO::PARAM_STR);
$stmt->bindValue(':sub_position', $sub_position, PDO::PARAM_STR);
$stmt->bindValue(':image', $image, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();
// var_dump($_POST);
// exit();

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
