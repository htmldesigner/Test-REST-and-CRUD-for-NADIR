<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Booksss */

$this->title = $model->name;
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="index-view">

    <h1><?= Html::encode($this->title) ?></h1>

   <p>
       <?= $model->text ?>
   </p>

</div>
