<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <?php
    require_once "libs/database.php";
    $sql = 'SELECT * FROM tb_user';
    $result = getListDatabase($sql);
    var_dump($result);
    $ressults = true;

    ?>
<body>
    <h1>day la php</h1>
</body>
</html>