<?php

/* @var $this yii\web\View */

$this->title = 'Project Euler Task4';
?>
<div class="euler-task1">
    <h1 class="display-4", style="text-align: center">Проект Эйлера</h1>
    <div>
        <a href="/web/euler/tasks">Back to list</a>
    </div>
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Задача №4</h1>
        <h2>Наибольшее произведение-палиндром.</h2>
        <p class="lead">





Число-палиндром с обеих сторон (справа налево и слева направо) читается одинаково. Самое большое число-палиндром, полученное умножением двух двузначных чисел – 9009 = 91 × 99.

Найдите самый большой палиндром, полученный умножением двух трехзначных чисел.

</p>

    </div>

    <div class="body-content">
        <?php 
            /*foreach ($res as $value) {
                echo $value[0].' x '.$value[1].' = '.$value[2].'<br>';
            }*/
            //echo '<p>Сумма всех чисел меньше 1000 равна '.$sum.'.</p>';
            // echo '<pre>';
            // var_dump($res);
            // echo '</pre>';
            // echo '<br><br>';
            // echo '<pre>';
            // var_dump($fib2);
            // echo '</pre>';
            // echo '<br><br>';
             echo 'Cамый большой палиндром, полученный умножением двух трехзначных чисел'.$res[2].' = '.$res[0].' x '.$res[1].'.';
            // echo $word;
            // echo $d;
        ?>
        

    </div>
</div>
