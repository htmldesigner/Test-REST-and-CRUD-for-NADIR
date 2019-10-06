<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Author;
use app\models\User;

/* @var $this yii\web\View */
/* @var $model app\models\Author */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="authors-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?//= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'author_name')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'description')->textArea() ?>

<!--    --><?//= $form->field($model, 'created_at')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
