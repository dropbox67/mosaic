<?php
use yii\helpers\Url;

/**
 * @var $this yii\web\View
 */

$this->title = 'Главная';
?>
<div class="site-index">

    <div class="jumbotron">
        <p><a class="btn btn-lg btn-success" href="<?= Url::toRoute(['/paint/index']); ?>">Рисовать</a></p>

        <p><a class="btn btn-lg btn-success" href="<?= Url::toRoute(['/boards/list']); ?>">Список сохраненных досок</a></p>
    </div>

    <div class="body-content">


    </div>
</div>
