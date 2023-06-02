<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;


class SiteController extends Controller {
	private $pg = Null;

  public function actionIndex(){
    //var_dump(yii::$app->nonSqlClass->getActiveCodeEts().'&nbsp;'.yii::$app->nonSqlClass->getActiveAnneeScolaire());
       $this->pg ='index';
    return $this->render($this->pg);
  }


    public function actionLogin() {
      $notification = Null;
      Yii::$app->layout = 'main_layout';
      if (Yii::$app->request->isPost) { // MAKE SURE THE USER HAS REALLY SUBMITTED
        switch (AuthController::authentifcation()) { // CKECK THE USER AUTHENTIFICATION
          case 'success': // IF RESPONSE IS SUCCESS
            return $this->redirect(md5('site_index')); // REDIRECT IT TO THE ACTION INDEX
          break;
              
            //Champs imperatifs sont vides 
          case '11':
            $notification = yii::$app->nonSqlClass->afficherNofitication(yii::$app->params['attention'], yii::t('app', 'pasData_trouvee'));
          break;

          case '12':
            $notification = yii::$app->nonSqlClass->afficherNofitication(yii::$app->params['attention'], yii::t('app', 'actionNon_valide'));
          break;

          case '22':
            $notification = yii::$app->nonSqlClass->afficherNofitication(yii::$app->params['erreur'], yii::t('app', 'utilisateurNon_valid'));
          break;

          case '33':
            $notification = yii::$app->nonSqlClass->afficherNofitication(yii::$app->params['attention'], yii::t('app', 'compteBloque'));             
          break;
        }

        Yii::$app->session->setFlash('flashmsg', $notification);
        return $this->render('login', [
            'userName' => $_POST['userName'],
            'motPass' => $_POST['motPass'],
            'sugarpot' => $_POST['sugarpot'],
        ]);

      }
      
      return $this->render('login');
    }


    
    public function actionDeconnecter(){
      Yii::$app->getSession()->destroy();
    }
    //statiatique


   
}
 