<?php
use yii\helpers\Html;

$this->title = 'Project Euler Test Form';
?>

<div class="numberform">
    <h1 class="display-4", style="text-align: center">Проект Эйлера</h1>
    <div>
        <a href="/web/euler/tasks">Back to list</a>
    </div>
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Test</h1>

    </div>

    <div class="body-content">
        <p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Number1</label>: <?= Html::encode($model->number1) ?></li>
    <li><label>Number2</label>: <?= Html::encode($model->number2) ?></li>
</ul>
        

    </div>
</div>
