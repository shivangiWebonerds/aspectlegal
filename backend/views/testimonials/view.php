<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Testimonials */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Testimonials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testimonials-view">

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
           [
                'attribute'=>'image_file',
                'value'=>IMG_PATH.'testimonials/'.$model->image_file,
                'format' => ['image',['width'=>'200','height'=>'100']],
            ],
            'content:ntext',
            'author',
            'status',
            'designation',
            'organisation',
            // 'created_by',
            // 'updated_by',
            // 'created_on',
            // 'updated_on',
        ],
    ]) ?>

</div>
