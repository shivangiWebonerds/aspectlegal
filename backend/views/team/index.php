<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TeamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Team', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'designation',
            'about_me:ntext',
             [
                'attribute' => 'image_file',
                'format' => 'html',
                'label' => 'Blogs Images',
                'value' => function ($data) {
                    return Html::img(IMG_PATH.'attorneys/' . $data['image_file'],
                        ['width'=>'300','class' => 'img-responsive thumbnail']);
                },
            ],
            'fb_link',
            // 'twitter_link',
            // 'linkdin_link',
            // 'created_at',
            // 'created_by',
            // 'updated_by',
            // 'updated_at',
            // 'is_deleted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
