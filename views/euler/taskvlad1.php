<?php

/* @var $this yii\web\View */
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use app\controllers\EulerController;

$this->title = 'Project Euler TaskVlad1';
?>
<div class="euler-task1">
    <h1 class="display-4", style="text-align: center">Проект Влада</h1>
    <div>
        <a href="/web/euler/tasks">Back to list</a>
    </div>
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Задача №1</h1>
        <h2>Задача 1</h2>
        <p class="lead">





Найти сумму и количество элементов последовательности, которые по модулю больше 0.001. Последовательность:<br>
S = 1/2 - 2/4 + 3/8 - 4/16 + ... - ...



</p>

    </div>

    <div class="body-content">
        <?php 
            echo "Сумма элементов последовательности = $sum<br>";
            echo "Количество элементов последовательности = $count<br>";
            echo "Последовательность:<br>";
            foreach ($mas as $val){
                echo $val.', ';
            }
        ?>
        

    </div>
</div>
