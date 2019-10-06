<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

<!--    --><?php
//    echo "<pre>";
//    var_dump($model);?>

<?php //foreach ($model as $item)
//{
//    echo $item->author_name;
//    echo $item->book[0]->name;
//}
//    ?>







    <?php foreach ($model as $item) { ?>
        <?php if(!empty($item['book'])){ ?>
           <h3 style="line-height: .5"><?= $item['author_name'] . "<br>" ?></h3>
           <strong><?= $item['description'] . "<br>" ?></strong>
        <?php } ?>
        <?php foreach ($item['book'] as $book) { ?>
            <?= Html::a($book['name'], ['site/view', 'id' =>$book['id']], ['class' => 'btn btn-info']) ?>
        <?php } ?>

    <?php } ?>


</div>
