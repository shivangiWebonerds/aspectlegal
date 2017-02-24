<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SitesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sites';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sites-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sites', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'branding',
            [
                'attribute' => 'logo_image',
                'format' => 'html',
                'label' => 'Logo Images',
                'value' => function ($data) {
                    return Html::img(IMG_PATH.'sites/' . $data['logo_image'],
                        ['width'=>'300','class' => 'img-responsive thumbnail']);
                },
            ],
            'host',
            'contact_number',
            // 'contact_email:email',
            // 'facebook_link',
            // 'google_link',
            // 'youtube_link',
            // 'twitter_link',
            // 'linkedin_link',
            // 'created_by',
            // 'created_at',
            // 'updated_by',
            // 'updated_at',
            // 'is_deleted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
