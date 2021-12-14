<?php

/* @var $this yii\web\View */

$this->title = 'Project Euler Task5';
?>
<div class="euler-task1">
    <h1 class="display-4", style="text-align: center">Проект Эйлера</h1>
    <div>
        <a href="/web/euler/tasks">Back to list</a>
    </div>
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Задача №5</h1>
        <h2>Наименьшее кратное.</h2>
        <p class="lead">

2520 - самое маленькое число, которое делится без остатка на все числа от 1 до 10.

Какое самое маленькое число делится нацело на все числа от 1 до 20?

</p>

    </div>

    <div class="body-content">
        <?php 
            /*foreach ($res as $value) {
                echo $value[0].' x '.$value[1].' = '.$value[2].'<br>';
            }*/
            echo '<p>'.$res.' - самое маленькое число, которое делится без остатка на все числа от 1 до 20.</p>';
            // echo '<pre>';
            // var_dump($res);
            // echo '</pre>';
            // echo '<br><br>';
            // echo '<pre>';
            // var_dump($fib2);
            // echo '</pre>';
            // echo '<br><br>';
            // echo $word;
            // echo $d;
        ?>
        

    </div>
</div>
