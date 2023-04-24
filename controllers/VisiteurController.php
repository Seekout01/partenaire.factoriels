<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use infobip\api\client\SendSingleTextualSms;
use infobip\api\configuration\BasicAuthConfiguration;
use infobip\api\model\sms\mt\send\textual\SMSTextualRequest;               
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;



class VisiteurController extends Controller
{
    public function actionIndex(){
        return $this->render('/visiteur/index.php');
    }
}
 