<?php
namespace app\controllers;

use Yii;
use app\components\FrontController;

/**
 * Index application controller.
 *
 * @package app\controllers
 * @class SiteController
 */
class SiteController extends FrontController{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex(){
        return $this->render('index', [

        ]);
    }

}
