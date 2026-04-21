<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>選擇</title>
</head>

<body>
    <?php
    $sceore = 100;
    if ($sceore >= 60) {
        echo "及格";
    } else {
        echo "不及格";
    }

    echo "成績:" . $sceore . "分數<br>";
    echo "判定:";
    if ($sceore >= 60) {
        echo "及格";
    } else {
        echo "不及格";
    }
    ?>

    <H3>多選結構練習</H3>
    <?php

    $level = "A";
    echo "成績等級:" . $level . "<br>";
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