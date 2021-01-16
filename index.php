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
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <header class="title">
        <input type="checkbox" id="cp_navimenuid">
        <label class="menu" for="cp_navimenuid">

            <div class="menubar">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <ul>
                <li><a href="dream.php">My-Team</a></li>
                <li><a href="login.php">ログイン</a></li>
                <li><a href="register.php">登録</a></li>
            </ul>
        </label>
        <button class="logo" onclick="location.href='kanri_login.php'"><img class="logo" src="image/logo.png" alt=""></button>
        <input type="checkbox" id="cp_navimenuid">
        <label class="menu" for="cp_navimenuid">

            <div class="menubar">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <ul>
                <li><a href="member.php">メンバー紹介</a></li>

            </ul>

        </label>
    </header>
    <main class="title">
        <div class="sponcer">
            <button class="set" onclick="location.href='http://www.michinoekimunakata.co.jp/'">
                <img src="image/mitinoeki.jpg" class="logos" alt="道の駅宗像"></button>
            <button class="set" onclick="location.href='https://www.generalasahi.co.jp/'">
                <img src="image/ga.jpg" class="logos" alt="GA"></button>
            <button class="set" onclick="location.href='https://www.groupegcf.com/'">
                <img src="image/gcf.jpg" class="logos" alt="GCF"></button>
            <button class="set" onclick="location.href='https://michel-herbelin.jp/'">
                <img src="image/herbelin.jpg" class="logos" alt="HERBELIN"></button>
            <button class="set" onclick="location.href='https://www.jvc.com/jp/'">
                <img src="image/jvc.jpg" class="logos" alt="JVC"></button>

        </div>
        <div class="video-container">
            <video src="MunakataSanixBlues 2021PV.mp4" autoplay playsinline muted loop></video>
            <div class="video-sidebar">
            </div>
        </div>
        <div class="sponcer">
            <button class="set" onclick="location.href='https://www.kenwood.com/'">
                <img src="image/kenwood.jpg" class="logos" alt="ケンウッド"></button>
            <button class="set" onclick="location.href='https://kentai.co.jp/'">
                <img src="image/kentai.jpg" class="logos" alt="ケンタイ"></button>
            <button class="set" onclick="location.href='https://www.yoshinoya.com/'">
                <img src="image/yoshinoya.jpg" class="logos" alt="吉野家"></button>
            <button class="set" onclick="location.href='https://www.briefing-usa.com/'">
                <img src="image/briefing.jpg" class="logos" alt="ブリーフィング"></button>
            <button class="set" onclick="location.href='https://www.goldwin.co.jp/canterbury/'">
                <img src="image/ccc.jpg" class="logos" alt="CCC"></button>

        </div>
    </main>
    <!-- <audio src="video-audio.mp3" type="audio/mp3" controls autoplay loop>
    </audio> -->


    <!-- <script>
        window.onload = function() {
            var context = new AudioContext();
        }
    </script> -->

</body>

</html>