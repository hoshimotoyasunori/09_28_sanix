<?php
session_start();
include("functions.php");
check_session_id();
// DB接続
$pdo = connect_to_db();

// データ取得SQL作成
$sql = 'SELECT * FROM rugby_table where comefrom like "%大阪%"';

// SQL準備&実行
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

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
        $output .= "<tr>";
        $output .= "<td>{$record["team"]}</td>";
        $output .= "<td>{$record["name"]}</td>";
        $output .= "<td>{$record["tall"]}</td>";
        $output .= "<td>{$record["weight"]}</td>";
        $output .= "<td>{$record["born"]}</td>";
        $output .= "<td>{$record["comefrom"]}</td>";
        $output .= "<td><button><img src=\"" . $record['image'] . "\"></button></td>";
        $output .= "</tr>";
        // edit deleteリンクを追加
        $output .= "<tr>";
        $output .= "<td><a href='edit.php?id={$record["id"]}'>編集</a></td>";
        $output .= "<td><a href='delete.php?id={$record["id"]}'>消去</a></td>";
        $output .= "</tr>";
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
    <link rel="stylesheet" href="read.css">
    <title>（一覧画面）</title>
</head>

<body>
    <main>
        <fieldset>
            <legend>管理者画面</legend>

            <table>
                <thead>
                    <tr>
                        <th>username</th>
                        <th>mail</th>
                        <th>password</th>
                    </tr>
                    <?= $output ?>
                </thead>
                <tbody>
                    <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->

                </tbody>
            </table>
        </fieldset>
    </main>
    <footer>
        <div>
            <a href="input.php">メンバー追加</a>
        </div>
        <div>
            <a href="logout.php">ログアウト</a>
        </div>
        <div>
            <a href="index.php">TOP</a>
        </div>
    </footer>
</body>

</html>