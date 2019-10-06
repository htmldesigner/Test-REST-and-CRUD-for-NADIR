<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Books */

$this->title = 'Add book';
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['user/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booksss-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
