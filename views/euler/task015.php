<?php

/* @var $this yii\web\View */
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use app\controllers\EulerController;

$this->title = 'Project Euler Task15';
?>
<div class="euler-task1">
    <h1 class="display-4", style="text-align: center">Проект Эйлера</h1>
    <div>
        <a href="/web/euler/tasks">Back to list</a>
    </div>
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Задача №15</h1>
        <h2>Пути через таблицу.</h2>
        <p class="lead">



Начиная в левом верхнем углу сетки 2×2 и имея возможность двигаться только вниз или вправо, существует ровно 6 маршрутов до правого нижнего угла сетки.<br><br>

Сколько существует таких маршрутов в сетке 20×20?

<!-- <?php $form = ActiveForm::begin() ?>
<?= $form->field($model, 'number1') ?>
<?= $form->field($model, 'number2') ?>
<?= Html::submitButton('Задать размер сетки', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end() ?> -->

</p>

    </div>

    <div class="body-content">
        <?php 
            echo "Количество маршрутов в сетке 20х20 = $res."
        ?>
        

    </div>
</div>
