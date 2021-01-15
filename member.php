<?php



// var_dump($_POST);
// exit();
session_start();
include("functions.php");
// check_session_id();
// DB接続
$pdo = connect_to_db();
// var_dump($_POST);
// exit();
// データ取得SQL作成
$sql = 'SELECT * FROM sanix_member order by id desc';

// SQL準備&実行
$stmt = $pdo->prepare($sql);
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
    // fetchAll()関数でSQLで取得したレコードを配列で取得できる
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
    $output = "";
    // <tr><td>deadline</td><td>todo</td><tr>の形になるようにforeachで順番に$outputへデータを追加
    // `.=`は後ろに文字列を追加する，の意味
    foreach ($result as $record) {
        $output .= "<img src=\"" . $record['image'] . "\">";
    }
    // $valueの参照を解除する．解除しないと，再度foreachした場合に最初からループしない
    // 今回は以降foreachしないので影響なし
    unset($value);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootstrapのCSS読み込み -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- jQuery読み込み -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="member.css">
    <title>（一覧画面）</title>
</head>

<body>
    <main>
        <fieldset>
            <legend></legend>
            <legend class="head">
                <div>メンバー紹介</div>
                <div><a href="index.php">TOP</a></div>
            </legend>
            <div class="main">
                <div>
                    <?= $output ?>
                </div>
            </div>

            <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->

        </fieldset>
    </main>
    <footer>

    </footer>
</body>

</html>