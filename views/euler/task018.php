<?php

/* @var $this yii\web\View */
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use app\controllers\EulerController;

$this->title = 'Project Euler Task18';
?>
<div class="euler-task1">
    <h1 class="display-4", style="text-align: center">Проект Эйлера</h1>
    <div>
        <a href="/web/euler/tasks">Back to list</a>
    </div>
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Задача №18</h1>
        <h2>Максимальная сумма пути 1.</h2>
        <p class="lead">





Начиная в вершине треугольника (см. пример ниже) и перемещаясь вниз на смежные числа, максимальная сумма до основания составляет 23.<br><br>

<span style="color:red;">3</span><br>
<span style="color:red;">7</span> 4<br>
2 <span style="color:red;">4</span> 6<br>
8 5 <span style="color:red;">9</span> 3<br><br>

То есть, 3 + 7 + 4 + 9 = 23.<br>

Найдите максимальную сумму пути от вершины до основания следующего треугольника:<br><br>

75<br>
95 64<br>
17 47 82<br>
18 35 87 10<br>
20 04 82 47 65<br>
19 01 23 75 03 34<br>
88 02 77 73 07 63 67<br>
99 65 04 28 06 16 70 92<br>
41 41 26 56 83 40 80 70 33<br>
41 48 72 33 47 32 37 16 94 29<br>
53 71 44 65 25 43 91 52 97 51 14<br>
70 11 33 28 77 73 17 78 39 68 17 57<br>
91 71 52 38 17 14 91 43 58 50 27 29 48<br>
63 66 04 68 89 53 67 30 73 16 69 87 40 31<br>
04 62 98 27 23 09 70 98 73 93 38 53 60 04 23<br><br>

Примечание: Так как в данном треугольнике всего 16384 возможных маршрута от вершины до основания, эту задачу можно решить проверяя каждый из маршрутов. Однако похожая Задача 67 с треугольником, состоящим из сотни строк, не решается перебором (brute force) и требует более умного подхода! ;o)



</p>

    </div>

    <div class="body-content">
        <?php 
            foreach ($triangle as $val){
                foreach ($val as $value){
                    echo "$value ";
                }
                echo '<br>';
            }
            echo "Высота пирамиды = $height";
        ?>
        

    </div>
</div>
