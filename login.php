<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

<!-- <script src="https://cdn.tailwindcss.com"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/main.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="test.css"> 
    <link rel="stylesheet" href="css/common.css">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
    <title>ログイン</title>
</head>

<body>
<?php include('header.php');?>

    <header>
        <nav class="navbar navbar-default">LOGIN</nav>
    </header>

    <!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
    <form name="form1" action="login_act.php" method="post">
        E-MAIL ADDRESS:<input type="text" name="lid" />
        PW:<input type="password" name="lpw" />
        <input type="submit" value="LOGIN" />
    </form>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="signup.php">ユーザー登録まだの方</a>
                </div>
            </div>
        </nav>
    </header>

</body>

</html>
