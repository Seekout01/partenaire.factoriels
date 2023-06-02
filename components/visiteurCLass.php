<?php

namespace app\components;

use Yii;
use yii\base\component;
use yii\web\Controller;
use yii\base\InvalidConfigException;

class visiteurClass extends Component
{
  public $connect = Null;
  public $main = null;

  public function __construct()
  {
    $this->connect = \Yii::$app->db;
   
  }


   //recuperer les commentaire des clients
   public function comment(){
       
        $columnName = $tableName =$tableNames = $whereValue  = $whereValueSelect= $inColumn = $inValue = $formatBy = $paginate = null;
        $columnName = '*';
        $tableNames = "partenaires.contact";
        $produit = $main->selectJoinData($columnName, $tableNames);
   }

}