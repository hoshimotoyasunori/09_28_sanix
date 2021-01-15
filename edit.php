<?php
// 送信データのチェック
// var_dump($_GET);
// exit();
$id = $_GET["id"];

// 関数ファイルの読み込み
session_start();
include("functions.php");
check_session_id();

$pdo = connect_to_db();

// データ取得SQL作成
$sql = 'SELECT * FROM sanix_member WHERE id=:id';

// SQL準備&実行
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

// データ登録処理後
if ($status == false) {
    // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    // 正常にSQLが実行された場合は指定の11レコードを取得
    // fetch()関数でSQLで取得したレコードを取得できる
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    // var_dump($record);
    // exit();
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

    <title>（編集画面）</title>
</head>

<body>
    <form action="update.php" method="POST">
        <fieldset>
            <legend>（編集画面）</legend>
            <a href="read.php">一覧画面</a>

            <div>
                <?= $record["name"] ?>
            </div>
            <div class="inside">
                POSITION:<select name="main_position">
                    <option value="PR">PR</option>
                    <option value="HO">HO</option>
                    <option value="LO">LO</option>
                    <option value="FL">FL</option>
                    <option value="NO.8">NO.8</option>
                    <option value="SH">SH</option>
                    <option value="SO">SO</option>
                    <option value="CTB">CTB</option>
                    <option value="WTB">WTB</option>
                    <option value="FB">FB</option>
                </select>
            </div>
            <div class="inside">
                Sub:<select name="sub_position">
                    <option value="PR">PR</option>
                    <option value="HO">HO</option>
                    <option value="LO">LO</option>
                    <option value="FL">FL</option>
                    <option value="NO.8">NO.8</option>
                    <option value="SH">SH</option>
                    <option value="SO">SO</option>
                    <option value="CTB">CTB</option>
                    <option value="WTB">WTB</option>
                    <option value="FB">FB</option>
                    <option value="-">-</option>
                </select>
            </div>
            <div>
                画像:<input type="url" class="gazou" name="image" value="<?= $record["image"] ?>">
            </div>
            <div>
                <button>更新</button>
            </div>
            <input type="hidden" name="id" value="<?= $record["id"] ?>">
        </fieldset>
        <div class="rei">
            <?= "<img src=\"" . $record['image'] . "\">"  ?>
        </div>
    </form>

</body>

</html>