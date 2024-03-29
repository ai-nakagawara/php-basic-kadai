<DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 変数に値を代入
        $score1 = 80;
        $score2 = 60;
        $score3 = 55;
        $score4 = 40;
        $score5 = 100;
        $score6 = 25;
        $score7 = 80;
        $score8 = 95;
        $score9 = 30;
        $score10 = 60;

        // 合計点
        $sum = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

        echo "合計点: {$sum}";
        echo '<br>';

        // 平均点
        $ave = $sum / 10;

        echo "平均点: {$ave}";
        ?>
    </p>
</body>
</html>