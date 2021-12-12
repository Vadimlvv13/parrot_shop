<?php

/* @var $this yii\web\View */

$this->title = 'Project Euler Task6';
?>
<div class="euler-task1">
    <h1 class="display-4", style="text-align: center">Проект Эйлера</h1>
    <div>
        <a href="/web/euler/tasks">Back to list</a>
    </div>
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Задача №6</h1>
        <h2>Разность между суммой квадратов и квадратом суммы.</h2>
        <p class="lead">

Сумма квадратов первых десяти натуральных чисел равна

1<sup>2</sup> + 2<sup>2</sup> + ... + 10<sup>2</sup> = 385.<br>
Квадрат суммы первых десяти натуральных чисел равен

(1 + 2 + ... + 10)<sup>2</sup> = 55<sup>2</sup> = 3025.<br>
Следовательно, разность между суммой квадратов и квадратом суммы первых десяти натуральных чисел составляет 3025 − 385 = 2640.<br>

Найдите разность между суммой квадратов и квадратом суммы первых ста натуральных чисел.

</p>

    </div>

    <div class="body-content">
        <?php 
            /*foreach ($res as $value) {
                echo $value[0].' x '.$value[1].' = '.$value[2].'<br>';
            }*/
            // echo '<pre>';
            // var_dump($res);
            // echo '</pre>';
            // echo '<br><br>';
            // echo '<pre>';
            // var_dump($fib2);
            // echo '</pre>';
            // echo '<br><br>';
             echo 'Разность между суммой квадратов и квадратом суммы первых ста натуральных чисел = '.$res.'.';
            // echo $d;
        ?>
        

    </div>
</div>
