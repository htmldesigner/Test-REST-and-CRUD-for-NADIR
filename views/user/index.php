<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Author */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Add authors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-index">

    <h1 class="mt-5"><?= Html::encode($this->title) ?></h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Author name</th>
            <th scope="col">Description</th>
            <th scope="col">Total books</th>
            <th scope="col" >View author book</th>
            <th scope="col" >Update author</th>
            <th scope="col" >Delete author</th>
        </tr>
        </thead>
        <tbody>

        <?php $count = 1; ?>
        <?php foreach ($authors as $author){ ?>
        <tr>
            <th scope="row"><?=  $count++ ?></th>
            <td> <?=  $author->author_name ?></td>
            <td> <?=  substr($author->description, 0, 20)."....." ?></td>
            <td> <?= count($author->book) ?></td>
            <td>  <?= Html::a('View/add book', ['book/index', 'id' => $author->id], ['class' => 'btn btn-info']) ?></td>
            <td>   <?= Html::a('Update', ['user/update', 'id' => $author->id], ['class' => 'btn btn-success']) ?></td>
            <td>  <?= Html::a('Delete', ['user/delete', 'id' => $author->id], ['class' => 'btn btn-danger', 'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],]) ?></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>

    <?= Html::a('Add Authors', ['create'], ['class' => 'btn btn-primary pull-right']) ?>






</div>
