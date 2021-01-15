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
$sql = 'SELECT * FROM sanix_member where main_position like"PR"';

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
    $output1 = "";
    // <tr><td>deadline</td><td>todo</td><tr>の形になるようにforeachで順番に$outputへデータを追加
    // `.=`は後ろに文字列を追加する，の意味
    foreach ($result as $record) {
        // $output .= "<td>{$record["team"]}</td>";
        $output1 .= "<div>{$record["name"]}<br>{$record["main_position"]}・{$record["sub_position"]}<br><a href='edit.php?id={$record["id"]}'>編集</a>・<a href='delete.php?id={$record["id"]}'>消去</a><br><img src=\"" . $record['image'] . "\"></div>";
    }
    // $valueの参照を解除する．解除しないと，再度foreachした場合に最初からループしない
    // 今回は以降foreachしないので影響なし
    unset($value);
}

$sql = 'SELECT * FROM sanix_member where main_position like "HO" ';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();
if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
    $output2 = "";
    foreach ($result as $record) {
        $output2 .=
            "<div>{$record["name"]}<br>{$record["main_position"]}・{$record["sub_position"]}<br><a href='edit.php?id={$record["id"]}'>編集</a>・<a href='delete.php?id={$record["id"]}'>消去</a><br><img src=\"" . $record['image'] . "\"></div>";
    }
    unset($value);
}

$sql = 'SELECT * FROM sanix_member where main_position like "LO" ';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();
if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
    $output3 = "";
    foreach ($result as $record) {
        $output3 .= "<div>{$record["name"]}<br>{$record["main_position"]}・{$record["sub_position"]}<br><a href='edit.php?id={$record["id"]}'>編集</a>・<a href='delete.php?id={$record["id"]}'>消去</a><br><img src=\"" . $record['image'] . "\"></div>";
    }
    unset($value);
}
$sql = 'SELECT * FROM sanix_member where main_position like "FL" ';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();
if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
    $output4 = "";
    foreach ($result as $record) {
        $output4 .= "<div>{$record["name"]}<br>{$record["main_position"]}・{$record["sub_position"]}<br><a href='edit.php?id={$record["id"]}'>編集</a>・<a href='delete.php?id={$record["id"]}'>消去</a><br><img src=\"" . $record['image'] . "\"></div>";
    }
    unset($value);
}
$sql = 'SELECT * FROM sanix_member where main_position like "NO.8" ';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();
if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
    $output5 = "";
    foreach ($result as $record) {
        $output5 .= "<div>{$record["name"]}<br>{$record["main_position"]}・{$record["sub_position"]}<br><a href='edit.php?id={$record["id"]}'>編集</a>・<a href='delete.php?id={$record["id"]}'>消去</a><br><img src=\"" . $record['image'] . "\"></div>";
    }
    unset($value);
}
$sql = 'SELECT * FROM sanix_member where main_position like "SH" ';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();
if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
    $output6 = "";
    foreach ($result as $record) {
        $output6 .= "<div>{$record["name"]}<br>{$record["main_position"]}・{$record["sub_position"]}<br><a href='edit.php?id={$record["id"]}'>編集</a>・<a href='delete.php?id={$record["id"]}'>消去</a><br><img src=\"" . $record['image'] . "\"></div>";
    }
    unset($value);
}
$sql = 'SELECT * FROM sanix_member where main_position like "SO" ';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();
if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
    $output7 = "";
    foreach ($result as $record) {
        $output7 .= "<div>{$record["name"]}<br>{$record["main_position"]}・{$record["sub_position"]}<br><a href='edit.php?id={$record["id"]}'>編集</a>・<a href='delete.php?id={$record["id"]}'>消去</a><br><img src=\"" . $record['image'] . "\"></div>";
    }
    unset($value);
}
$sql = 'SELECT * FROM sanix_member where main_position like "CTB" ';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();
if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
    $output8 = "";
    foreach ($result as $record) {
        $output8 .= "<div>{$record["name"]}<br>{$record["main_position"]}・{$record["sub_position"]}<br><a href='edit.php?id={$record["id"]}'>編集</a>・<a href='delete.php?id={$record["id"]}'>消去</a><br><img src=\"" . $record['image'] . "\"></div>";
    }
    unset($value);
}
$sql = 'SELECT * FROM sanix_member where main_position like "WTB" ';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();
if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
    $output9 = "";
    foreach ($result as $record) {
        $output9 .= "<div>{$record["name"]}<br>{$record["main_position"]}・{$record["sub_position"]}<br><a href='edit.php?id={$record["id"]}'>編集</a>・<a href='delete.php?id={$record["id"]}'>消去</a><br><img src=\"" . $record['image'] . "\"></div>";
    }
    unset($value);
}
$sql = 'SELECT * FROM sanix_member where main_position like "FB" ';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();
if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
    $output10 = "";
    foreach ($result as $record) {
        $output10 .= "<div>{$record["name"]}<br>{$record["main_position"]}・{$record["sub_position"]}<br><a href='edit.php?id={$record["id"]}'>編集</a>・<a href='delete.php?id={$record["id"]}'>消去</a><br><img src=\"" . $record['image'] . "\"></div>";
    }
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
    <title>（一覧画面）</title>
</head>

<body>
    <main>
        <fieldset>
            <legend> </legend>
            <legend class="top">
                <div>管理者画面 </div>
                <div><a href="input.php">メンバー追加</a>
                    <a href="index.php">TOP</a></div>
            </legend>

            <div class="box">
                <button>
                    <div class="stile"><?= $output1 ?></div>
                </button>
                <button>
                    <div class="stile"><?= $output2 ?></div>
                </button>
                <button>
                    <div class="stile"><?= $output3 ?></div>
                </button>
                <button>
                    <div class="stile"><?= $output4 ?></div>
                </button>
                <button>
                    <div class="stile"><?= $output5 ?></div>
                </button>
                <button>
                    <div class="stile"><?= $output6 ?></div>
                </button>
                <button>
                    <div class="stile"><?= $output7 ?></div>
                </button>
                <button>
                    <div class="stile"><?= $output8 ?></div>
                </button>
                <button>
                    <div class="stile"><?= $output9 ?></div>
                </button>
                <button>
                    <div class="stile"><?= $output10 ?></div>
                </button>
            </div>
        </fieldset>
    </main>
    <footer>

    </footer>
</body>

</html>