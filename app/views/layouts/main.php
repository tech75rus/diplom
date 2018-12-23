<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/posts.css">

</head>
<body>
<div class="main">

    <div class="head">
        <div class="img" style="background-image: url();"></div>
        <div class="name">Dmitry</div>
        <a class="add" href="">Добавить статью<img src="images/add.png" alt=""></a>
        <a class="logout" href="">Выход</a>
    </div>
    <form action="session.php" method="GET">
        <input type="text" name="name" id="">
        <input type="text" name="surname" id="">
        <input type="submit" name="submit" id="">
    </form>

    <div class="posts">
        <h2>Список статей</h2>
    </div>


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>
</html>