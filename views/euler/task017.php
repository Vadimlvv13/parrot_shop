<?php

/* @var $this yii\web\View */
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use app\controllers\EulerController;

$this->title = 'Project Euler Task17';
?>
<div class="euler-task1">
    <h1 class="display-4", style="text-align: center">Проект Эйлера</h1>
    <div>
        <a href="/web/euler/tasks">Back to list</a>
    </div>
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Задача №17</h1>
        <h2>Счет букв в числительных.</h2>
        <p class="lead">





Если записать числа от 1 до 5 английскими словами (one, two, three, four, five), то используется всего 3 + 3 + 5 + 4 + 4 = 19 букв.<br>

Сколько букв понадобится для записи всех чисел от 1 до 1000 (one thousand) включительно?<br>


Примечание: Не считайте пробелы и дефисы. Например, число 342 (three hundred and forty-two) состоит из 23 букв, число 115 (one hundred and fifteen) - из 20 букв. Использование "and" при записи чисел соответствует правилам британского английского.



</p>

    </div>

    <div class="body-content">
        <?php 
            
            foreach ($test as $value) {
                echo $value."<br>";
            }
        ?>
        

    </div>
</div>
