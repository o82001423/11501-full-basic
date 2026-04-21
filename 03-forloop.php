<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>環圈練習</title>
</head>
<html>
<Body>

<H1>  for .... loop練習</H1>
<?php

for($i=1;$i<=10; $i=$i+1){
    echo "$i=>";
    echo $i *10 . "<br>";
}
echo $i;
?>
<H1>  for .... loop練習遞增為2</H1>
<?php

for($i=1;$i<=10; $i=$i+1){
    echo "$i=>";
    echo $i *10 . "<br>";
}
echo $i;
?>

<H1>  for .... loop練習奇/偶數</H1>
<?php

for($i=0;$i<10; $i=$i+1){
    echo "$i=>";
    echo $i *2 +1 . "<br>";
    if($i*2>=10){
        break;
    }
}
echo $i;
?>

<H1>  for .... loop練習奇/偶數</H1>
<?php

for($i=0;$i<10; $i=$i+1){
    echo "$i=>";
    echo $i *2+1 . "<br>";
    if(($i*2+1)>=10){
        break;
    }
}
echo $i;
?>

<H1> while loop 練習</H1>

<?php 
$score=43;

echo "成績為" . $score . "分 <br>" ;
 $count=0; //計算迴圈執行錯誤

    while($score<60){
            $score=$score+10;
            $count=$count+1;
        }

    echo "登錄成績:" . $score . "分 <br>";
    echo "迴圈執行次數:" . $count . "分 <br>";
?>

<H1>陣列</H1>
<?php 
    $score=[60,22,72,10,80];

    foreach($score as $idx => $val){
        echo '第' . $idx . '每位同學成績為' . $val .'<br>';
    }
 ?>a

</Body>
</html>