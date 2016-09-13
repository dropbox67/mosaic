<?php
namespace app\components;

use Yii;
use yii\web\Controller;

/**
 * Common application controller.
 *
 * @package app\components
 * @class FrontController
 */
class FrontController extends Controller{
    /**
     * Declare common actions.
     *
     * @return array
     */
    public function actions(){
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
}
