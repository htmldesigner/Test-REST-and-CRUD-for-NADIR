<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Author */

$this->params['breadcrumbs'][] = ['label' => 'Authors', 'url' => ['user/index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="author-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'author_name',
            'description',
        ],
    ]) ?>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Book name</th>
            <th scope="col">Description</th>
            <th scope="col">Short text</th>
            <th scope="col">View book</th>
            <th scope="col">Update book</th>
            <th scope="col">Delete book</th>
        </tr>
        </thead>
        <tbody>

        <?php $count = 1?>
        <?php foreach ($books as $book){ ?>
            <tr>
                <th scope="row"><?= $count ++ ?></th>
                <td><?= $book['name']?></td>
                <td><?= substr($book['description'], 0, 20)."....."?> </td>
                <td><?= substr($book['text'], 0, 20)."....."?> </td>
                <td><?= Html::a('View book', ['book/view', 'id' => $book['id']], ['class' => 'btn btn-info']) ?></td>
                <td><?= Html::a('Update book', ['book/update', 'id' => $book['id']], ['class' => 'btn btn-success']) ?></td>
                <td>  <?= Html::a('Delete', ['book/delete', 'id' => $book['id']], ['class' => 'btn btn-danger', 'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],]) ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <?= Html::a('Add book', ['book/create', 'id' => $model->id], ['class' => 'btn btn-primary pull-right']) ?>

</div>
