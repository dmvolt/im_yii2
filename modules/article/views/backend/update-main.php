<?php

use yii\helpers\Html;

$this->title = 'Редактировать общий материал модуля(Статьи): ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Статьи', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="training-update">
    <h3><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form-main', [
        'model' => $model,
    ]) ?>
</div>