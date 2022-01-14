<?php

/* @var $this yii\web\View */
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use app\controllers\EulerController;

$this->title = 'Project Euler Task16';
?>
<div class="euler-task1">
    <h1 class="display-4", style="text-align: center">Проект Эйлера</h1>
    <div>
        <a href="/web/euler/tasks">Back to list</a>
    </div>
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Задача №16</h1>
        <h2>Сумма цифр степени.</h2>
        <p class="lead">





2<sup>15</sup> = 32768, сумма цифр этого числа равна 3 + 2 + 7 + 6 + 8 = 26.<br>

Какова сумма цифр числа 2<sup>1000</sup>?



</p>

    </div>

    <div class="body-content">
        <?php 
            echo gettype($res)."<br>";
            echo "Сумма цифр числа 2<sup>1000</sup> = $res."
        ?>
        

    </div>
</div>
