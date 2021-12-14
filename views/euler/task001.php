<?php

/* @var $this yii\web\View */

$this->title = 'Project Euler Task1';
?>
<div class="euler-task1">
    <h1 class="display-4", style="text-align: center">Проект Эйлера</h1>
    <div>
        <a href="/web/euler/tasks">Back to list</a>
    </div>
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Задача №1</h1>
        <h2>Числа, кратные 3 или 5.</h2>
        <p class="lead">

Если выписать все натуральные числа меньше 10, кратные 3 или 5, то получим 3, 5, 6 и 9. Сумма этих чисел равна 23.

Найдите сумму всех чисел меньше 1000, кратных 3 или 5.
</p>

    </div>

    <div class="body-content">
        <?php 
            echo '<p>Сумма всех чисел меньше 1000 равна '.$sum.'.</p>';
            //echo '<pre>';
            //var_dump($r_mas);
            //echo '</pre>';
        ?>
        

    </div>
</div>
