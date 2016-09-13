<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

?>

<div class="boards-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Рисовать', ['paint/index'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $oProvider,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],
            ['label' => 'ID', 'value' => 'id'],
            ['label' => 'Название', 'attribute' => 'name'],
            ['label' => 'Дата создания', 'attribute' => 'time_start', 'format' => ['date', 'php:Y-m-d']],
            ['label' => 'Дата окончания', 'attribute' => 'time_work', 'format' => ['date', 'php:Y-m-d']],
            ['label' => 'Время работы', 'value' => function($model){
                return date_diff(
                    date_create('@' . $model->time_work),
                    date_create('@' . $model->time_start)
                )->format('%s') . ' сек';
            }],

            ['class' => 'yii\grid\ActionColumn',
                'buttons'   => [
                    'view' => function ($url, $model, $key) {
                            return Html::a('Смотреть', \yii\helpers\Url::to(['boards/view', 'id' => $model['id']]));
                        },
                    'delete' => function ($url, $model, $key) {
                        return Html::a('Удалить', \yii\helpers\Url::to(['boards/delete', 'id' => $model['id']]));
                    }
                    ],
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?></div>

