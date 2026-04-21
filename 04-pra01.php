<!DOCTYPE html>
<html lang="en">
    <head>
        <mate charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <h1>分配成績等級</h1>
    
    <ul>
        <li>給定一葛成績數字，根據成績所在區檢，給定等級</li>
        <li>0 ~59 => E </li>
        <li>60 ~69 => D</li>
        <li>70 ~89 => C</li>
        <li>80 ~99 => B</li>
        <li>90 ~100 => A</li>
    </ul>

    <?php

use Cose\Algorithm\Mac\HS512;

    $score= 10;
    $level='';

    if($score >=0 && $score<60){
        $level= "E";
    }
    else if ($score >=60 && $score<70){
        $level = "D";
    }
    else if($score >=70 && $score<80){
        $level = "C";
    }
    else if($score >=80 && $score<90){
        $level = "B";
    }
   else if($score >=90 && $score<100){
        $level = "A";
    }
    else {
        $level = "成績輸入錯誤";
    }
    

    echo $level;
 
    ?>


<h1>分配成績等級</h1>
    
    <ul>
        <li>給定一葛成績數字，根據成績所在區檢，給定等級</li>
        <li>0 ~59 => E </li>
        <li>60 ~69 => D</li>
        <li>70 ~89 => C</li>
        <li>80 ~99 => B</li>
        <li>90 ~100 => A</li>
    </ul>

    <?php

?>

<H1>簡化</H1>
<?php
$score = 80;

if      ($score > 100 || $score < 0) $level = "成績輸入錯誤";
else if ($score >= 90) $level = "A";
else if ($score >= 80) $level = "B";
else if ($score >= 70) $level = "C";
else if ($score >= 60) $level = "D";
else                   $level = "E";

echo $level;
?>

<H1>依據學生成績等幾給予評價</H1>
<div>根據學生不同的成績等級在網頁上因出不同得文字評價</div>
<?php
    $level = "A";
    echo "成績等級:" . $level . "<br>";
    echo "分數" .  $score . "<br>";
    echo "評語:";

    switch ($level) {
        case "A":
            echo "表現優良，請繼續保持";
            break;
        case "B":
            echo "值得肯定，還有進步空間";
            break;
        case "C":
            echo "需要跟多的練習";
            break;
        case "D":
            echo "需要加強基本功";
            break;
        default:
            echo "是否心學業";
    }
    ?>
</body>