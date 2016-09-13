<?php
/**
 * @var $oBoard \app\models\Boards
 */

$this->title = 'Рисование - ' . $oBoard->name;

?>


<h1><?= $oBoard->name; ?></h1>

<div class="body-content">

    <div class="container">

        <?= \app\components\widgets\board\Board::widget(['oBoard' => $oBoard]); ?>


    </div>
</div>