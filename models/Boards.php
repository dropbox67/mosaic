<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Boards extends ActiveRecord{

    public $aData;

    public static function tableName(){
        return '{{%boards}}';
    }

    public function rules(){
        return [
            [['name', 'data', 'time_start', 'time_work'], 'required'],
            [['time_start', 'time_work'], 'integer'],
            [['name'], 'unique'],
            [['name'], 'string', 'max' => 64],
        ];
    }

    public function attributeLabels(){
        return [
            'id'            => 'ID',
            'data'          => 'Сетка',
            'time_start'    => 'Время начала',
            'time_end'      => 'Время работы',
            'name'          => 'Название',
        ];
    }

    public function getColor($x, $y){

        $axisX = 'x' . $x;
        $axisY = 'y' . $y;

        if(isset($this->aData[$axisX][$axisY])){
            return 'cell-' . $this->aData[$axisX][$axisY];
        }else{
            return '';
        }
    }

    public function afterFind(){

        $this->aData = json_decode($this->data, true);
        // var_dump($this->getColor(9, 8)); exit();

        parent::afterFind();
    }

}
