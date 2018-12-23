<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Шаблон Main</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .menu{
            height: 50px;
            width: 100%;
            background-color: #D57C7C;
        }
        .footer{
            width: 100%;
            height: 50px;
            background-color: #D57C7C;

        }
    </style>
</head>
<body>
    <div class="menu">
        <p>Это шаблон меню</p>
    </div>
    <?= $content; ?>
    <div class="footer">
        <p>2018</p>
    </div>
</body>
</html>