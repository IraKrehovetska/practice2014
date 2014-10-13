<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Travel */

$this->title = 'Update Travel: ' . ' ' . $model->travel_id;
$this->params['breadcrumbs'][] = ['label' => 'Travels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->travel_id, 'url' => ['view', 'travel_id' => $model->travel_id, 'user_id' => $model->user_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="travel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
