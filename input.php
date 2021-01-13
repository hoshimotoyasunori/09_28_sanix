<?php
session_start();
include("functions.php");
check_session_id();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input画面</title>
</head>

<body>
    <main>
        <form action="create.php" method="POST">
            <fieldset>
                <legend>（選手登録画面）</legend>

                <div>
                    team: <input type="text" name="team" placeholder="team">
                </div>
                <div>
                    name: <input type="text" name="name" placeholder="name">
                </div>
                <div>
                    tall: <input type="text" name="tall" placeholder="tall">
                </div>
                <div>
                    weight: <input type="text" name="weight" placeholder="weight">
                </div>
                <div>
                    born: <input type="date" name="born" placeholder="born">
                </div>
                <div>
                    comefrom: <input type="text" name="comefrom" placeholder="comefrom">
                </div>
                <div>
                    image: <input type="url" name="image" placeholder="image">
                </div>
                <div>
                    <button>送信</button>
                </div>
            </fieldset>
        </form>
    </main>
    <footer>
        <a href="read.php">一覧画面</a>
        <a href="logout.php">ログアウト</a>
        <a href="index.php">TOP</a>
    </footer>

</body>

</html>