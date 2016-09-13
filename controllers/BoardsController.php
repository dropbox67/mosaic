<?php
namespace app\controllers;

use Yii;
use app\components\FrontController;
use app\models\Boards;
use yii\data\ActiveDataProvider;

class BoardsController extends FrontController{

    public function actionList(){
        $query = Boards::find();

        $oProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> ['defaultOrder' => ['id'=>SORT_DESC]]
        ]);

        return $this->render('list', [
            'oProvider'   => $oProvider,
        ]);
    }


    public function actionView($id){
        $oBoard = Boards::findOne($id);

        if(false == ($oBoard instanceof Boards)){
            $this->redirect(['list']);
        }

        return $this->render('view', [
            'oBoard'    => $oBoard,
        ]);
    }

    public function actionDelete($id){
        $oBoard = Boards::findOne($id);

        if($oBoard instanceof Boards){
            $oBoard->delete();
        }

        $this->redirect(['list']);
    }

}
