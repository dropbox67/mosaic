<?php
namespace app\controllers;

use app\models\Boards;
use Yii;
use app\components\FrontController;
use yii\web\Response;
use yii\widgets\ActiveForm;

class PaintController extends FrontController{
    /**
     * Show paint board.
     *
     * @return string
     */
    public function actionIndex(){

        $oBoard = new Boards;
        if($oBoard->load(Yii::$app->request->post())) {

            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ActiveForm::validate($oBoard);
            }

            if($oBoard->validate()){
                if($oBoard->save()){
                    return $this->redirect(['boards/list']);
                }
            }
        }

        return $this->render('index', [
            'oBoard'    => $oBoard,
        ]);
    }

}
