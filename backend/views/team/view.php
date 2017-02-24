<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Team */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-view">

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
            'name',
            [
                'attribute'=>'image_file',
                'value'=>IMG_PATH.'attorneys/'.$model->image_file,
                'format' => ['image',['width'=>'200','height'=>'100']],
            ],
            'designation',
            'about_me:ntext',
            'fb_link',
            'twitter_link',
            'linkdin_link',
            // 'created_at',
            // 'created_by',
            // 'updated_by',
            // 'updated_at',
            // 'is_deleted',
        ],
    ]) ?>

</div>
