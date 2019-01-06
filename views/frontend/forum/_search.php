<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\forum\models\ForumSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="forum-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Kullanici_Adi') ?>

    <?= $form->field($model, 'Sifre') ?>

    <?= $form->field($model, 'Sorular') ?>

    <?= $form->field($model, 'Cevaplar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>