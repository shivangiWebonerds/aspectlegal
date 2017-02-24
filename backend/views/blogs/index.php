<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BlogsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blogs';
$this->params['breadcrumbs'][] = $this->title;
echo $_SERVER['HTTP_HOST'];
?>
<div class="blogs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Blogs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            'content:ntext',
            [
                'attribute' => 'image_file',
                'format' => 'html',
                'label' => 'Blogs Images',
                'value' => function ($data) {
                    return Html::img(IMG_PATH.'blogs/' . $data['image_file'],
                        ['width'=>'300','class' => 'img-responsive thumbnail']);
                },
            ],
            //'created_by',
            // 'created_at',
            // 'updated_by',
            // 'updated_at',
            // 'is_deleted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
