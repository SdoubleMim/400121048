<p style="width:60%;margin-right:auto;margin-left:auto;">
<?php
echo('<pre>');
     print_r($_SERVER['REQUEST_METHOD']);
     echo('<br>');
     print_r($_GET);
     echo('<br>');
     print_r($_POST);

     exit();
?>
</p>