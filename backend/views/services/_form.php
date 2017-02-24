<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Services */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="services-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_file')->fileInput() ?>

    <?= $form->field($model, 'information')->textarea(['rows' => 6]) ?>

    <?php 
    	$sites=ArrayHelper::map(\common\models\Sites::find()->asArray()->all(), 'id', 'host');
       	echo $form->field($model, 'site_id')->dropDownList($sites,['prompt'=>'Select Site']);
      ?>
  
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
