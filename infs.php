<?php
define('TEXT','0');
defined('TEXT') or die;
// $rows = [
//             [   
//                 '#'=>1,
//                 'first'=>'Mark',
//                 'last' => 'Otto',
//                 'handle'=>'@mdo'
//             ],
//             [   
//                 '#'=>1,
//                 'first'=>'Jacob',
//                 'last' => 'Thornton',
//                 'handle'=>'@fat'
//             ],
//             [   
//                 '#'=>1,
//                 'first'=>'Jacob',
//                 'last' => 'Thornton',
//                 'handle'=>'@fat'
//             ],
// ]
$rows = [
  [   
      '#'=>1,
      'first' => 'Mark',
      'last' => 'Otto',
      'handle' => '@mdo'
  ],
  [   
      '#'=>2,
      'first' => 'Abbas:"I'."'m very strong".'"',
      'last' => 'Otto',
      'handle' => '@mdo'
  ],
  
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>برنامه نویسی وب</title>
</head>
<body style="width:70%;margin-right:auto;margin-left:auto;">
    <h2>برنامه نویسی وب</h2>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($rows as $value)
            { 
            ?>
            <tr>
                <?php foreach($value as $k=>$v): ?>
                    <td>
                        <span><?= $k.'    ' ?> : </span>
                        <?= $v ?>
                    </td>
                <?php endforeach ?>

            </tr>
                
            <?php 
            } 
            ?>
        </tbody>
    </table>
</body>
</html>