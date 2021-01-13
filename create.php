<?php
session_start();
include("functions.php");
check_session_id();
// 送信確認

// 項目入力のチェック
// 値が存在しないor空で送信されてきた場合はNGにする
if (
    !isset($_POST['team']) || $_POST['team'] == '' ||
    !isset($_POST['name']) || $_POST['name'] == '' ||
    !isset($_POST['tall']) || $_POST['tall'] == '' ||
    !isset($_POST['weight']) || $_POST['weight'] == '' ||
    !isset($_POST['born']) || $_POST['born'] == '' ||
    !isset($_POST['comefrom']) || $_POST['comefrom'] == '' ||
    !isset($_POST['image']) || $_POST['image'] == ''
) {
    // 項目が入力されていない場合はここでエラーを出力し，以降の処理を中止する
    echo json_encode(["error_msg" => "no input"]);
    exit();
}

// 受け取ったデータを変数に入れる
$team = $_POST['team'];
$name = $_POST['name'];
$tall = $_POST['tall'];
$weight = $_POST['weight'];
$born = $_POST['born'];
$comefrom = $_POST['comefrom'];
$image = $_POST['image'];

// DB接続
$pdo = connect_to_db();

// データ登録SQL作成
// `created_at`と`updated_at`には実行時の`sysdate()`関数を用いて実行時の日時を入力する
$sql = 'INSERT INTO rugby_table(id, team, name, tall, weight, born, comefrom, image, updated_at) VALUES(NULL, :team, :name, :tall, :weight, :born, :comefrom, :image, sysdate() )';

// SQL準備&実行
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':team', $team, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':tall', $tall, PDO::PARAM_INT);
$stmt->bindValue(':weight', $weight, PDO::PARAM_INT);
$stmt->bindValue(':born', $born, PDO::PARAM_STR);
$stmt->bindValue(':comefrom', $comefrom, PDO::PARAM_STR);
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
    header("Location:input.php");
    exit();
}
