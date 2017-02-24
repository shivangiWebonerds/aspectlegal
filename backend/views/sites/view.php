<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Sites */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sites-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'branding',
            [
                'attribute'=>'logo_image',
                'value'=>IMG_PATH.'sites/'.$model->logo_image,
                'format' => ['image',['width'=>'200','height'=>'100']],
            ],
            
            'host',
            'contact_number',
            'contact_email:email',
            'facebook_link',
            'google_link',
            'youtube_link',
            'twitter_link',
            'linkedin_link',
            'created_by',
            'created_at',
            'updated_by',
            'updated_at',
            'is_deleted',
        ],
    ]) ?>

</div>
