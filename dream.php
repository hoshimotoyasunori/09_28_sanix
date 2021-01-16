<?php
include('functions.php');
$pdo = connect_to_db();


// $sql = 'SELECT * FROM sanix_member order by main_position desc';
// $stmt = $pdo->prepare($sql);
// $status = $stmt->execute(); //実行を忘れずに

// if ($status == false) {
//     $error = $stmt->errorInfo(); //失敗時はエラー出力
//     exit('sqlError:' . $error[2]);
// } else {
//     $result = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetchAllで全部取れる
//     $output = "";
//     foreach ($result as $record) {
//         $output .= "<img src=\"" . $record['image'] . "\">";
//     }
//     unset($record);
// }



//データ参照SQL作成
// $sql = 'SELECT * FROM sanix_member order by main_position asc';
// $stmt = $pdo->prepare($sql);
// $status = $stmt->execute(); //実行を忘れずに

// if ($status == false) {
//     $error = $stmt->errorInfo(); //失敗時はエラー出力
//     exit('sqlError:' . $error[2]);
// } else {
//     $result = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetchAllで全部取れる
//     // var_dump($result);
//     // exit();

//     $output = "";
//     foreach ($result as $record) {
//         // $output .= "<tr><td>{$record["team"]}</td><td>{$record["name"]}</td><tr>";
//         // $output .= "<tr>";
//         $output .= "<option value='{$record["image"]}'><img src=\"" . $record['image'] . "\"></option>";
//         // $output .= "</tr>";
//         // $output .= "<td><a href='todo_edit.php?id={$record["id"]}'>edit</a></td>";
//         // $output .= "<td><a href='todo_delete.php?id={$record["id"]}'>delete</a></td>";
//         // $output .= "</tr>";
//     }
//     unset($record);
// }

// $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
// foreach ($array as $value) {
//     echo $value . "</br>";
// }

//データ参照SQL作成

$sql = 'SELECT * FROM sanix_member where main_position like "PR" or sub_position like "PR" ';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute(); //実行を忘れずに

if ($status == false) {
    $error = $stmt->errorInfo(); //失敗時はエラー出力
    exit('sqlError:' . $error[2]);
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetchAllで全部取れる
    // var_dump($result);
    // exit();

    $output1 = "";
    foreach ($result as $record) {
        $output1 .= "<img src=\"" . $record['image'] . "\"><option>{$record["name"]}</option>";
    }
    unset($record);
}
//データ参照SQL作成
$sql = 'SELECT * FROM sanix_member where main_position like "HO" or sub_position like "HO"';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute(); //実行を忘れずに

if ($status == false) {
    $error = $stmt->errorInfo(); //失敗時はエラー出力
    exit('sqlError:' . $error[2]);
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetchAllで全部取れる
    // var_dump($result);
    // exit();

    $output2 = "";
    foreach ($result as $record) {
        $output2 .= "<img src=\"" . $record['image'] . "\">";
    }
    unset($record);
}

//データ参照SQL作成
$sql = 'SELECT * FROM sanix_member where main_position like "LO" or sub_position like "LO"';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute(); //実行を忘れずに

if ($status == false) {
    $error = $stmt->errorInfo(); //失敗時はエラー出力
    exit('sqlError:' . $error[2]);
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetchAllで全部取れる
    // var_dump($result);
    // exit();

    $output3 = "";
    foreach ($result as $record) {
        $output3 .= "<img src=\"" . $record['image'] . "\">";
    }
    unset($record);
}
$sql = 'SELECT * FROM sanix_member where main_position like "FL" or sub_position like "FL" ';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute(); //実行を忘れずに

if ($status == false) {
    $error = $stmt->errorInfo(); //失敗時はエラー出力
    exit('sqlError:' . $error[2]);
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetchAllで全部取れる
    // var_dump($result);
    // exit();

    $output4 = "";
    foreach ($result as $record) {
        $output4 .= "<img src=\"" . $record['image'] . "\">";
    }
    unset($record);
}
$sql = 'SELECT * FROM sanix_member where main_position like "NO.8" or sub_position like "NO.8"';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute(); //実行を忘れずに

if ($status == false) {
    $error = $stmt->errorInfo(); //失敗時はエラー出力
    exit('sqlError:' . $error[2]);
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetchAllで全部取れる
    // var_dump($result);
    // exit();

    $output5 = "";
    foreach ($result as $record) {
        $output5 .= "<img src=\"" . $record['image'] . "\">";
    }
    unset($record);
}
$sql = 'SELECT * FROM sanix_member where main_position like "SH" or sub_position like "SH"';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute(); //実行を忘れずに

if ($status == false) {
    $error = $stmt->errorInfo(); //失敗時はエラー出力
    exit('sqlError:' . $error[2]);
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetchAllで全部取れる
    // var_dump($result);
    // exit();

    $output6 = "";
    foreach ($result as $record) {
        $output6 .= "<img src=\"" . $record['image'] . "\">";
    }
    unset($record);
}
$sql = 'SELECT * FROM sanix_member where main_position like "SO" or sub_position like "SO"';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute(); //実行を忘れずに

if ($status == false) {
    $error = $stmt->errorInfo(); //失敗時はエラー出力
    exit('sqlError:' . $error[2]);
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetchAllで全部取れる
    // var_dump($result);
    // exit();

    $output7 = "";
    foreach ($result as $record) {
        $output7 .= "<img src=\"" . $record['image'] . "\">";
    }
    unset($record);
}
$sql = 'SELECT * FROM sanix_member where main_position like "CTB" or sub_position like "CTB"';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute(); //実行を忘れずに

if ($status == false) {
    $error = $stmt->errorInfo(); //失敗時はエラー出力
    exit('sqlError:' . $error[2]);
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetchAllで全部取れる
    // var_dump($result);
    // exit();

    $output8 = "";
    foreach ($result as $record) {
        $output8 .= "<img src=\"" . $record['image'] . "\">";
    }
    unset($record);
}
$sql = 'SELECT * FROM sanix_member where main_position like "WTB" or sub_position like "WTB"';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute(); //実行を忘れずに

if ($status == false) {
    $error = $stmt->errorInfo(); //失敗時はエラー出力
    exit('sqlError:' . $error[2]);
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetchAllで全部取れる
    // var_dump($result);
    // exit();

    $output9 = "";
    foreach ($result as $record) {
        $output9 .= "<img src=\"" . $record['image'] . "\">";
    }
    unset($record);
}
$sql = 'SELECT * FROM sanix_member where main_position like "FB" or sub_position like "FB"';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute(); //実行を忘れずに

if ($status == false) {
    $error = $stmt->errorInfo(); //失敗時はエラー出力
    exit('sqlError:' . $error[2]);
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetchAllで全部取れる
    // var_dump($result);
    // exit();

    $output10 = "";
    foreach ($result as $record) {
        $output10 .= "<img src=\"" . $record['image'] . "\">";
    }
    unset($record);
}



?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dream.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="imageselect.js"></script> 
        -->
    <!-- <link href="imageselect.css" media="screen" rel="stylesheet" type="text/css" /> -->
    <title>Document</title>
</head>

<body>
    <!-- <header>
        <a href="index.php">top画面</a>
    </header> -->
    <main class="list">
        <div>
            <button class="open" id="button1">
                <div id="moji">
                    <p>①</p>
                </div>
                <div class="out" id="PR1" style="display: none;">
                    <select name="" id="">
                        <?= $output1 ?>

                    </select>
                </div>
            </button>
        </div>
        <div>
            <button class="open" id="button2">
                <div id="moji">
                    <p>②</p>
                </div>
                <div class="out" id="HO" style="display: none;">
                    <?= $output2 ?>
                </div>
            </button>
        </div>
        <div>
            <button class="open" id="button3">
                <div id="moji">
                    <p>③</p>
                </div>
                <div class="out" id="PR3" style="display: none;">
                    <?= $output1 ?>
                </div>
            </button>
        </div>
        <div>
            <button class="open" id="button4">
                <div id="moji">
                    <p>④</p>
                </div>
                <div class="out" id="LO4" style="display: none;">
                    <?= $output3 ?>
                </div>
            </button>
        </div>
        <div>
            <button class="open" id="button5">
                <div id="moji">
                    <p>⑤</p>
                </div>
                <div class="out" id="LO5" style="display: none;">
                    <?= $output3 ?>
                </div>
            </button>
        </div>
        <div>
            <button class="open" id="button6">
                <div id="moji">
                    <p>⑥</p>
                </div>
                <div class="out" id="FL6" style="display: none;">
                    <?= $output4 ?>
                </div>
            </button>
        </div>
        <div>
            <button class="open" id="button7">
                <div id="moji">
                    <p>⑦</p>
                </div>
                <div class="out" id="FL7" style="display: none;">
                    <?= $output4 ?>
                </div>
            </button>
        </div>
        <div>
            <button class="open" id="button8">
                <div id="moji">
                    <p>⑧</p>
                </div>
                <div class="out" id="NO8" style="display: none;">
                    <?= $output5 ?>
                </div>
            </button>
        </div>
        <div>
            <button class="open" id="button9">
                <div id="moji">
                    <p>9</p>
                </div>
                <div class="out" id="SH" style="display: none;">
                    <?= $output6 ?>
                </div>
            </button>
        </div>
        <div>
            <button class="open" id="button10">
                <div id="moji">
                    <p>10</p>
                </div>
                <div class="out" id="SO" style="display: none;">
                    <?= $output7 ?>
                </div>
            </button>
        </div>
        <div>
            <button class="open" id="button11">
                <div id="moji">
                    <p>11</p>
                </div>
                <div class="out" id="WTB11" style="display: none;">
                    <?= $output9 ?>
                </div>
            </button>
        </div>
        <div>
            <button class="open" id="button12">
                <div id="moji">
                    <p>12</p>
                </div>
                <div class="out" id="CTB12" style="display: none;">
                    <?= $output8 ?>
                </div>
            </button>
        </div>
        <div>
            <button class="open" id="button13">
                <div id="moji">
                    <p>13</p>
                </div>
                <div class="out" id="CTB13" style="display: none;">
                    <?= $output8 ?>
                </div>
            </button>
        </div>
        <div>
            <button class="open" id="button14">
                <div id="moji">
                    <p>14</p>
                </div>
                <div class="out" id="WTB14" style="display: none;">
                    <?= $output9 ?>
                </div>
            </button>
        </div>
        <div>
            <button class="open" id="button15">
                <div id="moji">
                    <p>15</p>
                </div>
                <div class="out" id="FB" style="display: none;">
                    <?= $output10 ?>
                </div>
            </button>
        </div>
    </main>
    <main class="back_image">
        <div class="free"></div>
    </main>
    <script>
        $(function() {
            $("#button1").click(function() {
                $("#PR1").show();
            });
        });
        $(function() {
            $("#button2").click(function() {
                $("#HO").toggle();
            });
        });
        $(function() {
            $("#button3").click(function() {
                $("#PR3").toggle();
            });
        });
        $(function() {
            $("#button4").click(function() {
                $("#LO4").toggle();
            });
        });
        $(function() {
            $("#button5").click(function() {
                $("#LO5").toggle();
            });
        });
        $(function() {
            $("#button6").click(function() {
                $("#FL6").toggle();
            });
        });
        $(function() {
            $("#button7").click(function() {
                $("#FL7").toggle();
            });
        });
        $(function() {
            $("#button8").click(function() {
                $("#NO8").toggle();
            });
        });
        $(function() {
            $("#button9").click(function() {
                $("#SH").toggle();
            });
        });
        $(function() {
            $("#button10").click(function() {
                $("#SO").toggle();
            });
        });
        $(function() {
            $("#button11").click(function() {
                $("#WTB11").toggle();
            });
        });
        $(function() {
            $("#button12").click(function() {
                $("#CTB12").toggle();
            });
        });
        $(function() {
            $("#button13").click(function() {
                $("#CTB13").toggle();
            });
        });
        $(function() {
            $("#button14").click(function() {
                $("#WTB14").toggle();
            });
        });
        $(function() {
            $("#button15").click(function() {
                $("#FB").toggle();
            });
        });
    </script>

</body>

</html>