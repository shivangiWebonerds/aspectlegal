<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Testimonials */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="testimonials-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

     <?= $form->field($model, 'image_file')->fileInput()?>


    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'designation')->textInput(['maxlength' => true]) ?>

        
    <?= $form->field($model, 'organisation')->textInput(['maxlength' => true]) ?>

    

    <?= $form->field($model, 'status')->dropDownList([ '1' => 'Active', '0' => 'Deactive', ], ['prompt' => 'select status']) ?>

    <?php 
        $sites=ArrayHelper::map(\common\models\Sites::find()->asArray()->all(), 'id', 'host');
        echo $form->field($model, 'site_id')->dropDownList($sites,['prompt'=>'Select Site']);
      ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
