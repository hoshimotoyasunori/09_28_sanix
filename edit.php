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
$sql = 'SELECT * FROM rugby_table WHERE id=:id';

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

    <title>（編集画面）</title>
</head>

<body>
    <form action="update.php" method="POST">
        <fieldset>
            <legend>（編集画面）</legend>
            <a href="read.php">一覧画面</a>
            <div>
                team: <select name="team">
                    <option value="宗像サニックスブルース">宗像サニックスブルース </option>
                    <option value="コベルコスティーラーズ">コベルコスティーラーズ</option>
                    <option value="トヨタベルブリッツ">トヨタベルブリッツ</option>
                    <option value="パナソニックワイルドナイツ">パナソニックワイルドナイツ</option>
                    <option value="サントリーサンゴリアス">サントリーサンゴリアス</option>
                    <option value="クボタスピアーズ">クボタスピアーズ</option>
                    <option value="ヤマハジュビロ磐田">ヤマハジュビロ磐田</option>
                    <option value="NECグリーンロケッツ">NECグリーンロケッツ</option>
                    <option value="東芝ブレイブルーパス">東芝ブレイブルーパス</option>
                    <option value="RICHOブラックラムズ">RICHOブラックラムズ</option>
                    <option value="n-NTTコミュニケーションズ">NTTコミュニケーションズ</option>
                    <option value="三菱重工ダイナボアーズ">三菱重工ダイナボアーズ</option>
                    <option value="ホンダヒート">ホンダヒート</option>
                    <option value="日野レッドドルフィンズ">日野レッドドルフィンズ</option>
                    <option value="ドコモレッドスパークす">ドコモレッドスパークす</option>
                    <option value="キャノンイーグルス">キャノンイーグルス</option>
                </select>
                <!-- <input type="text" name="team" value="<?= $record["team"] ?>"> -->
            </div>
            <div>
                name: <input type="text" name="name" value="<?= $record["name"] ?>">
            </div>
            <div>
                tall: <input type="text" name="tall" value="<?= $record["tall"] ?>">
            </div>
            <div>
                weight: <input type="text" name="weight" value="<?= $record["weight"] ?>">
            </div>
            <div>
                born: <input type="date" name="born" value="<?= $record["born"] ?>">
            </div>
            <div>
                comefrom: <input type="text" name="comefrom" value="<?= $record["comefrom"] ?>">
            </div>
            <div>
                image: <input type="url" name="image" value="<?= $record["image"] ?>">
            </div>
            <div>
                <button>更新</button>
            </div>
            <input type="hidden" name="id" value="<?= $record["id"] ?>">
        </fieldset>
        <?= "<img src=\"" . $record['image'] . "\">"  ?>
    </form>

</body>

</html>