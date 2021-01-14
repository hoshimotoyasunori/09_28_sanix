<?php
include('functions.php');
$pdo = connect_to_db();

//データ参照SQL作成
$sql = 'SELECT * FROM sanix_member order by main_position asc';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute(); //実行を忘れずに

if ($status == false) {
    $error = $stmt->errorInfo(); //失敗時はエラー出力
    exit('sqlError:' . $error[2]);
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetchAllで全部取れる
    // var_dump($result);
    // exit();

    $output = "";
    foreach ($result as $record) {
        // $output .= "<tr><td>{$record["team"]}</td><td>{$record["name"]}</td><tr>";
        // $output .= "<tr>";
        $output .= "<option value='{$record["image"]}'><img src=\"" . $record['image'] . "\"></option>";
        // $output .= "</tr>";
        // $output .= "<td><a href='todo_edit.php?id={$record["id"]}'>edit</a></td>";
        // $output .= "<td><a href='todo_delete.php?id={$record["id"]}'>delete</a></td>";
        // $output .= "</tr>";
    }
    unset($record);
}


// $sql = 'SELECT * FROM sanix_member order by main_position asc';
// $stmt = $pdo->prepare($sql);
// $status = $stmt->execute(); 

// if ($status == false) {
//     $error = $stmt->errorInfo(); 
//     exit('sqlError:' . $error[2]);
// } else {
//     $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 

//     $output = "";
//     foreach ($result as $record) {
//         $output .= "<option value='{$record["image"]}'></option>";

//     }
//     unset($record);
// }
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dream.css">
    <title>Document</title>
</head>

<body>
    <div class="top">DREAM-TEAM</div>
    <!-- <header>
        <div class="link">

            <button onclick="location.href='input.php'">選手一覧</button>
            <button onclick="location.href='read.php'">選手一覧</button>
        </div>
        <div class="output">
            <?= $output ?>
        </div>
    </header> -->
    <main>
        <div class="box">
            <div class="FR">
                <div class="hako">1
                    <select name="" id="">
                        <?= $output ?>
                    </select>
                    <!-- <select name="member" id="">
                        <option value="$output"></option>
                    </select> -->
                </div>
                <div class="hako">2</div>
                <div class="hako">3</div>
            </div>
            <div class="SR">
                <div class="hako">6</div>
                <div class="hako">4</div>
                <div class="hako">5</div>
                <div class="hako">7</div>
            </div>
            <div class="BR">
                <div class="hako">8</div>
            </div>
            <div class="SH">
                <div class="hako">9</div>
            </div>
            <div class="SO">
                <div class="hako">10</div>
            </div>
            <div class="TB">
                <div class="hako">11</div>
                <div class="hako">12</div>
                <div class="hako">13</div>
                <div class="hako">14</div>
            </div>
            <div class="FB">
                <div class="hako">15</div>
            </div>
        </div>
    </main>
</body>

</html>