<?php
$hobomoney = 25;
$vodkaprice = 119;
$student = 17;
$somedude = 40;
$richdude = 100;
$gypsoids = 50;
$allmoney = $hobomoney + $student + $somedude + $richdude - $gypsoids;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

 if ($allmoney >= $vodkaprice) {
     $deal="bezdák si koupil vodku";
     $hobomoney = $allmoney - $vodkaprice;}
 else {
     $deal ="nedostatek penez";}
 ?>
<p>Homelessákovi peníze před večerkou : <?=$allmoney;?></p>
<p>cena Vodky: <?=$vodkaprice;?></p>
<p><?=$deal ?><p>
<p>homelessákovi peníze po večerce: <?=$hobomoney?></p>
</body>
</html>