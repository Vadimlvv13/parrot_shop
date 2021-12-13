<?php

/* @var $this yii\web\View */

$this->title = 'Project Euler Task9';
?>
<div class="euler-task1">
    <h1 class="display-4", style="text-align: center">Проект Эйлера</h1>
    <div>
        <a href="/web/euler/tasks">Back to list</a>
    </div>
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Задача №9</h1>
        <h2>Особая тройка Пифагора.</h2>
        <p class="lead">





Тройка Пифагора - три натуральных числа a &#60; b &#60; c, для которых выполняется равенство<br>
a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup><br><br>

Например, 3<sup>2</sup> + 4<sup>2</sup> = 9 + 16 = 25 = 5<sup>2</sup>.<br><br>

Существует только одна тройка Пифагора, для которой a + b + c = 1000.
Найдите произведение abc.



</p>

    </div>

    <div class="body-content">
        <?php 
            echo $x.' + '.$y.' + '.$z.' = '.$res;
        ?>
        

    </div>
</div>
