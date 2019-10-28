<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Books */

$this->title = 'Update Books: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="books-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
