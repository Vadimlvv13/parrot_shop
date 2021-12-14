<?php

/* @var $this yii\web\View */

$this->title = 'Project Euler Task7';
?>
<div class="euler-task1">
    <h1 class="display-4", style="text-align: center">Проект Эйлера</h1>
    <div>
        <a href="/web/euler/tasks">Back to list</a>
    </div>
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Задача №7</h1>
        <h2>10001-е простое число.</h2>
        <p class="lead">

Выписав первые шесть простых чисел, получим 2, 3, 5, 7, 11 и 13. Очевидно, что 6-е простое число - 13.<br>

Какое число является 10001-м простым числом?

</p>

    </div>

    <div class="body-content">
        <?php 
            
            echo '10001-м простым числом является - '.$j.'.';
        ?>
        

    </div>
</div>
