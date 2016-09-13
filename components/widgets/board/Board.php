<?php
namespace app\components\widgets\Board;

use Yii;
use yii\base\ErrorException;
use yii\base\Widget;
use yii\helpers\Html;
use app\models\Boards;

class Board extends Widget{

    public $oBoard;

    public function init(){

        $this->getView()->registerJsFile('@web/js/board.js', ['depends' => ['yii\web\JqueryAsset']]);

        parent::init();
    }

    public function run(){


        return $this->render('index', [
            'oBoard'    => $this->oBoard,
        ]);
    }

}
