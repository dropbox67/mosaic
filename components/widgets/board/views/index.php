<?php
/**
 * @var app\models\Boards $oBoard
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>


<?php

$oForm = ActiveForm::begin(
    [   'id' => 'board-form',
        'enableClientValidation' => true,
        'enableAjaxValidation' => true,
        'enableClientScript'    => true,
    ]
);
?>



<?php
for($x = 0; $x < 20; $x++):
?>


<div class="row row-<?= $x; ?>">

    <?php for($y = 0; $y < 20; $y++): ?>
        <?php $class = false == $oBoard->getIsNewRecord() ? $oBoard->getColor($x, $y) : ''; ?>
        <div data-axis-x="x<?= $x; ?>" data-axis-y="y<?= $y; ?>" class="col-md-1 cell <?= $class; ?>" data-color="<?= $class; ?>">
            &nbsp;
        </div>
    <?php endfor; ?>

</div>

<?php
endfor;
?>

<div class="alert alert-danger errors" style="display: none;">
    <h4>Необходимо исправить следующие ошибки:</h4>
    <ul>
        <?php foreach($oBoard->getErrors() as $key => $aErrors): ?>
            <?php foreach($aErrors as $error): ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </ul>
</div>

<div class="form-group row-name">
    <?= $oForm->field($oBoard, 'name', ['enableAjaxValidation' => true])->textInput(['id' => 'name']) ?>
</div>

<div class="form-group row-hidden">
    <?= $oForm->field($oBoard, 'time_start')->hiddenInput(['id' => 'time_start']) ?>
</div>

<div class="form-group row-hidden">
    <?= $oForm->field($oBoard, 'time_work')->hiddenInput(['id' => 'time_work']) ?>
</div>

<div class="form-group row-hidden">
    <?= $oForm->field($oBoard, 'data')->hiddenInput(['id' => 'data']) ?>
</div>



<div class="form-group">
    <?php if($oBoard->getIsNewRecord()): ?>
        <?= Html::submitButton('Создать', ['class' => 'btn btn-success', 'id' => 'processSave']) ?>
    <?php else: ?>
        <?= Html::a('К списку', ['/boards/list'], ['class'=>'btn btn-primary grid-button']) ?>
    <?php endif; ?>
</div>



<?php ActiveForm::end(); ?>

