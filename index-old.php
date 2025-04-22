<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>فرم اطلاعات</title>
</head>
<body>
    <h2>فرم ارسال اطلاعات</h2>

    <!-- فرم با متد GET -->
    <form method="get" action="">
        <label for="name">نام:</label>
        <input type="text" name="name" id="name">
        <button type="submit">ارسال (GET)</button>
    </form>

    <br>

    <!-- فرم با متد POST -->
    <form method="post" action="">
        <label for="email">ایمیل:</label>
        <input type="email" name="email" id="email">
        <button type="submit">ارسال (POST)</button>
    </form>

    <hr>

    <p style="width:60%;margin:auto;">
        <pre>
<?php
    echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "\n\n";

    if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET)) {
        echo "GET Data:\n";
        print_r($_GET);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
        echo "POST Data:\n";
        print_r($_POST);
    }
?>
        </pre>
    </p>
</body>
</html>
