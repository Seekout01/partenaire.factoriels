<?php
    namespace app\components;
    use Yii;
    use yii\base\component;
    use yii\web\Controller;
    use yii\base\InvalidConfigException;

    Class accessClass extends Component {

      public $connect = Null;

      Public function __construct(){
        $this->connect = \Yii::$app->db;
      }

      public static function create_pass($usr_name, $usr_password){
        if(isset($usr_password) && !empty($usr_password) && isset($usr_name) && !empty($usr_name)){
          $strg = $usr_name.Yii::$app->params['key_connector'].$usr_password;
          return $usr_password = Yii::$app->cryptoClass->create_password($strg);
        }

        return false;
      }


      public function mettreStatPresenceSaltAJour($salt='', $userCode)
      {
        $stmt = $this->connect->createCommand('update at_userauth set salt=:salt, userActif=:userActif where code=:code')
        ->bindValues([':code'=>$userCode, ':userActif'=>1, ':salt'=>$salt])
        ->execute();
        if($stmt) return true;
        return;
      }


      public function chargerUserAuthData($userCode='')
      {
        $rslt = null;
        if(isset($userCode)){
          $rslt = $this->connect->createCommand('SELECT * from at_userauth where code=:code')
                      ->bindValue(':code', $userCode)
                      ->queryOne();
        }
        if($rslt) return $rslt;
        return;
      }

      

    }
