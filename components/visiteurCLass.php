<?php

namespace app\components;

use Yii;
use yii\base\component;
use yii\web\Controller;
use yii\base\InvalidConfigException;

class visiteurClass extends Component
{
  public $connect = Null;

  public function __construct()
  {
    $this->connect = \Yii::$app->db;
  }

  //Charger les tickets d'un résidant non traités
  public function getTicketResidant($codeResidant='', $statut='')
  {
    switch($statut){
      case Yii::$app->params['nontraite']:
        $cdt = '< 3';
      break;

      case Yii::$app->params['traite']:
        $cdt = '= 3';
      break;

      default:
        $cdt = '< 3';
      break;


    }
    $stmt = $this->connect->createCommand('select * from fg_ticket where codeResidantEmetteur=:codeResidant and statut '.$cdt)
            ->bindValue(':codeResidant', $codeResidant)
            ->queryAll();

    if($stmt) return $stmt;

    return;

  }
  //Methode :: Créer un ticket non assigné
  public function creerTicket($code,$libelleTicket, $descriptionTicket, $codeChambre, $dateEmission, $codeResidantEmetteur, $codeEts, $statut){
    try {
      $query = $this->connect->createCommand("INSERT INTO fg_ticket(code, sujet, reclamation, codeChambre, dateEmission, codeResidantEmetteur , codeEts, statut) 
                                               VALUES (:code, :sujet, :reclamation, :codeChambre, :dateEmission, :codeResidantEmetteur , :codeEts, :statut)")
                               ->bindValues( [':code'=>$code,':sujet'=>$libelleTicket, ':reclamation'=>$descriptionTicket, ':codeChambre'=>$codeChambre, ':dateEmission'=>$dateEmission, ':codeResidantEmetteur'=>$codeResidantEmetteur, ':statut'=>$statut, ':codeEts'=>$codeEts])
                               ->execute();
    } catch (\Throwable $th) {
      die($th->getMessage());
    }
  }

  public function validerC0deR3sidant($codeSupport='')
  {
    $stmt = $this->connect->createCommand('select * from fg_sejour where codeSupport =:codeSupport')
    ->bindValue(':codeSupport', $codeSupport)
    ->queryOne();
    if(isset($stmt) && is_array($stmt) ) return $stmt;
    return;
  }

  public function getResidant($codePersonel='')
  {
    $stmt = $this->connect->createCommand('select * from fg_personnel where code=:code')
    ->bindValue(':code', $codePersonel)
    ->queryOne();
    if(isset($stmt) && is_array($stmt)) return $stmt;

    $stmt = $this->connect->createCommand('select * from fg_guest where code=:code')
    ->bindValue(':code', $codePersonel)
    ->queryOne();
    if(isset($stmt) && is_array($stmt)) return $stmt;
    
    return;
  }

}