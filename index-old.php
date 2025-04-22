<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>اطلاعات فرم</title>
</head>
<body>
    <p style="width:60%;margin:auto;">
        <pre>
            <?php
                print_r($_SERVER['REQUEST_METHOD']);
                echo('<br>');
                print_r($_GET);
                echo('<br>');
                print_r($_POST);
            ?>
        </pre>
    </p>
</body>
</html>
