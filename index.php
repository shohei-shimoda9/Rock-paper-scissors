<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Portfolio-shimo</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
</head>
<body>
<div id="wrapper">
    <header>
        <div class="header-logo">Welcome my portfolio</div>
    </header>
    <main>
        <h1>今日の運勢</h1>
        出す手を選んで勝負してください。
        <div class="form-box">
            <form action="battle.php" method="post">
                <label>
                    <input type="radio" title="playerHand" name="playerHand" value="グー" checked>グー
                </label>
                <label>
                    <input type="radio" title="playerHand" name="playerHand" value="チョキ">チョキ
                </label>
                <label>
                    <input type="radio" title="playerHand" name="playerHand" value="パー">パー
                </label>
                <button type="submit" class="battle-button">勝負する！</button>
            </form>
        </div>
    </main>
    <footer>
        <small>&copy; Portfolio-shimo All Rights Reserved.</small>
    </footer>
</div>
    <script src="main.js"></script>
</body>
</html>