<?php
// var_dump($_POST);
// exit();
session_start();
include("functions.php");
check_session_id();
// DB接続
$pdo = connect_to_db();
// var_dump($_POST);
// exit();
// データ取得SQL作成
$sql = 'SELECT * FROM sanix_member order by main_position desc';

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
        // $output .= "<tr>";
        $output .= "<div>{$record["name"]}<br>NO.{$record["main_position"]}NO.{$record["sub_position"]}</div><div><button><img src=\"" . $record['image'] . "\"></button></div>";
        // $output .= "</tr>";
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

    <link rel="stylesheet" href="input.css">
    <title>input画面</title>
</head>

<body>
    <main>
        <legend> </legend>
        <legend class="top">
            <div>選手一覧</div>
            <div>
                <a href="read.php">一覧画面</a>
                <a href="index.php">TOP</a>
            </div>
        </legend>
        <div class="box"><?= $output ?></div>
        <form action="create.php" method="POST">
            <legend></legend>
            <legend>選手追加</legend>
            <fieldset>
                <div class="inside">
                    <input type="text" name="name" placeholder="name">
                </div>
                <div class="inside">
                    <input type="text" name="main_position" placeholder="main_position">
                </div>
                <div class="inside">
                    <input type="text" name="sub_position" placeholder="sub_position">
                </div>
                <div class="inside">
                    <input type="url" name="image" placeholder="image">
                </div>
                <div>
                    <button>送信</button>
                </div>
            </fieldset>
        </form>
    </main>
    <footer>
    </footer>

</body>

</html>