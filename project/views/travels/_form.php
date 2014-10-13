<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Travel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="travel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'from')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'to')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'payment')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'no_pets')->textInput() ?>

    <?= $form->field($model, 'no_smoke')->textInput() ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
