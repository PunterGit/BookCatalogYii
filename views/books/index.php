<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BooksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Books';
?>
<div class="books-index">

    <p>
        <?= Html::a('Create Books', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?=
        GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id',
            'title:ntext',
            'genre:ntext',
            'author:ntext',
            'pub_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>


</div>
