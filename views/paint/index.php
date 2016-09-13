<?php
use app\components\widgets\board\Board;
/**
 * @var $this   yii\web\View
 * @var $oBoard \app\models\Boards
 */

$this->title = 'Рисование';

?>


<div class="body-content">

<div class="container">

    <?= Board::widget(['oBoard' => $oBoard]); ?>


</div>
</div>