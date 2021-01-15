<?php
session_start();
include("functions.php");
check_session_id();
// 送信確認

// 項目入力のチェック
// 値が存在しないor空で送信されてきた場合はNGにする
if (
    !isset($_POST['name']) || $_POST['name'] == '' ||
    !isset($_POST['main_position']) || $_POST['main_position'] == '' ||
    !isset($_POST['sub_position']) || $_POST['sub_position'] == '' ||
    !isset($_POST['image']) || $_POST['image'] == ''
) {
    // 項目が入力されていない場合はここでエラーを出力し，以降の処理を中止する
    echo json_encode(["error_msg" => "no input"]);
    exit();
}

// 受け取ったデータを変数に入れる
$name = $_POST['name'];
$main_position = $_POST['main_position'];
$sub_position = $_POST['sub_position'];
$image = $_POST['image'];

// DB接続
$pdo = connect_to_db();

// データ登録SQL作成
// `created_at`と`updated_at`には実行時の`sysdate()`関数を用いて実行時の日時を入力する
$sql = 'INSERT INTO sanix_member(id, name, main_position, sub_position, image, updated_at) VALUES(NULL, :name, :main_position, :sub_position, :image, sysdate())';

// SQL準備&実行
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':main_position', $main_position, PDO::PARAM_STR);
$stmt->bindValue(':sub_position', $sub_position, PDO::PARAM_STR);
$stmt->bindValue(':image', $image, PDO::PARAM_STR);

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
    // 正常にSQLが実行された場合は入力ページファイルに移動し，入力ページの処理を実行する
    header("Location:read.php");
    exit();
}
