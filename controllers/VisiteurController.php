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
        $main = yii::$app->mainCLass;
        $nonSql = yii::$app->nonSqlClass;
        
 
        $columnName = $tableName =$tableNames = $whereValue  = $whereValueSelect= $inColumn = $inValue = $formatBy = $paginate = null;
         $columnName = '*';
         $tableNames = "systeme.produit";
         $produit = $main->selectJoinData($columnName, $tableNames);
         $tableNames = "individus.individus_maindata";
         $personel = $main->selectJoinData($columnName, $tableNames);
         $tableName= "partenaires.partenaire_globaldata";
         $whereValueSelect["partenaires.partenaire_globaldata.statut"] = "1";
         $partenaire = $main->selectJoinData($columnName, $tableName,  );
         $totalPartenaire=count($partenaire);
         $totalproduit =count($produit);
         $totalPersonnel =count($personel);
        //  dd($totalPersonnel);
        return $this->render('/visiteur/index.php',['produit'=>$produit ,'paretenaire'=>$totalPartenaire,'totalproduit'=>$totalproduit,'totalPersonnel'=>$totalPersonnel]);
    }

    public function actionInitier(){
        $main = yii::$app->mainCLass;
        $nonSql = yii::$app->nonSqlClass;
 
        $codeProduit = $_GET['codeservice'];
        $columnName = $tableName =$tableNames = $whereValue  = $whereValueSelect= $inColumn = $inValue = $formatBy = $paginate = null;
        $columnName = '*';
        $tableNames = "systeme.produit";
        $whereValueSelect["systeme.produit.code"] = "'".$codeProduit."'";

        $lisrprod = $main->selectJoinData($columnName, $tableNames, $whereValueSelect);
        $produit = $lisrprod[0];
        
        return $this->render('/visiteur/initier/initier.php',['produit'=>$produit]);

    }

    public function actionAddentite(){
        $nonSql = yii::$app->nonSqlClass;
        $main = yii::$app->mainCLass;
        $this->layout = false;

        if(Yii::$app->request->isPost)
        {
            $code = $nonSql->generateUniq();

        //    var_dump($_POST);die();

           $tableName = $columnValue = null;
           $tableName = "partenaires.partenaire_globaldata";
           $columnValue["code"] = $code;
           $columnValue["formejuridique"] = $_POST['typteEntite'];
           $columnValue["raisonsociale"] = $_POST['name'];
           $columnValue["emailpri"] = $_POST['email'];    
           $columnValue["telprinc"] = $_POST['tel'];
           if( ($main->insertData($tableName, $columnValue)) ==   1){
            $tableName = $columnValue = null;
            $tableName = "partenaires.paretenariat";
            $codeLiaiason = $nonSql->generateUniq();  
            $columnValue["code"] = $codeLiaiason;
            $columnValue["codepartenaireglobaldata"] = $code;
            $columnValue["codeproduit"] = $_POST['codeProduit'];
            $columnValue["ajouterle"] = date('Y-m-d');    
            if( ($main->insertData($tableName, $columnValue)) ==   1){
                
                
            
                        $client = new Client([
                            'base_uri' => "https://wp5eed.api.infobip.com/",
                            'headers' => [
                                'Authorization' => "App 57ec466a74c8869b8f8fee86ff37d5bc-e64e9dfd-bcd7-47a3-9518-ea41065c7d3f",
                                'Content-Type' => 'multipart/form-data',
                                'Accept' => 'application/json',
                        ]
                        ]);
                
                
                        
                    $response = $client->request(
                        'POST',
                        'email/2/send',
                        [
                            RequestOptions::MULTIPART => [
                        
                            ['name' => 'from', 'contents' => "bonjourFactoriels@selfserviceib.com"],
                            ['name' => 'to', 'contents' =>$_POST['email']],
                            ['name' => 'subject', 'contents' => 'This is a sample email subject'],
                            ['name' => 'text', 'contents' => 'This is a sample email message.'],
                                ['name' => 'html', 'contents' =>  $this->render('/visiteur/bienvenue.php')],
                            
                            ],
                        ]
                    );
            
                    echo("HTTP code: " . $response->getStatusCode() . PHP_EOL);
                    echo("Response body: " . $response->getBody()->getContents() . PHP_EOL);

                    // die();
                }
                            $notification = yii::$app->nonSqlClass->afficherNofitication(yii::$app->params['succes'], yii::t('app', 'enrgSuccess'));  
                            Yii::$app->session->setFlash('flashmsg', $notification);
                            return $this->redirect(Yii::$app->request->referrer); 
                        }

                    }else{
                            $notification = yii::$app->nonSqlClass->afficherNofitication(yii::$app->params['attention'], yii::t('app', 'infosAAffairerVide'));
                            Yii::$app->session->setFlash('flashmsg', $notification);
                            return $this->redirect(Yii::$app->request->referrer); 
                    };
               
                }


  

    
    
                public function actionFinaliser(){
        $code = $_GET['codesepartenariat'];
         return $this->render('/visiteur/finaliser/finaliser.php',['code'=>$code]);
    }

     public function actionAddfinaliser(){

            $nonSql = yii::$app->nonSqlClass;
            $main = yii::$app->mainCLass;
            if(yii::$app->request->isPost){


                $columnName = $tableName =$tableNames = $whereValue  = $whereValueSelect= $inColumn = $inValue = $formatBy = $paginate = null;
                $columnName = '*';
                $tableNames = "partenaires.paretenariat";
                $whereValueSelect["partenaires.paretenariat.code "] ="'".$_POST['code']."'";
                $partenaire = $main->selectJoinData($columnName, $tableNames,$whereValueSelect);


                $columnName = '*';
                $tableNames = "systeme.produit";
                $whereValueSelect2["systeme.produit.code "] ="'".$partenaire [0]['codeproduit']."'";
                $produit = $main->selectJoinData($columnName, $tableNames,$whereValueSelect2);

           

             //mise a jour de la table partenariat]
             $tab = $col = null;
             $tab = "partenaires.paretenariat";
             $col["statut"] =1;
             $col["datedebut"] = date('Y-m-d');
             $col["modifierle"] = date('Y-m-d');
            $where['code'] = $partenaire[0]['code'];
  
             $updatedata = $main->updateData($tab, $col, @$whereValue);
           

           //insertion individus main data
            $code = $nonSql->generateUniq();

            $tableName = $columnValue = null;
            $tableName = "individus.individus_maindata";
            $columnValue["code"] = $code;
            $columnValue["prenom"] = $_POST['prenom'];
            $columnValue["nom"] = $_POST['nom'];
            $main->insertData($tableName, $columnValue);
            
            //insertion individus contact data
            $codeContact = $nonSql->generateUniq();

            $tableName = $columnValue = null;
            $tableName = "individus.individus_contactdata";
            $columnValue["code"] = $codeContact;
            $columnValue["codeindividumaindata"] = $code;
            $columnValue["tel"] = $_POST['tel'];
            $columnValue["email"] = $_POST['mail'];
            $columnValue["ajouterle"] =  date('Y-m-d');  
            $main->insertData($tableName, $columnValue);

              
            //insertion individus partenaires data
            $codeLien = $nonSql->generateUniq();
            $tableName = $columnValue = null;
            $tableName = "partenaires.lien_individus_partenairie";
            $columnValue["code"] = $codeContact;
            $columnValue["codeindividusmaindata"] = $code;
            $columnValue["codepartenaire"] ='916fbcdd2840627d7b1a485005e2d3da50c3b05c67d50cc4';
            $columnValue["ajouterle"] =  date('Y-m-d');  
            $main->insertData($tableName, $columnValue);



              //insertion userauth
              $motPassCrypte = Yii::$app->accessClass->create_pass($_POST['username'],$_POST['password']);

              $codeLien = $nonSql->generateUniq();
              $tableName = $columnValue = null;
              $tableName = "authentification.userauth";
              $columnValue["code"] = $code;
              $columnValue["identifiant"] = $_POST['username'];
               $columnValue["motpass"] = $motPassCrypte;
              $main->insertData($tableName, $columnValue);

             //insertion individus partenaires prod
                $codeLien = $nonSql->generateUniq();
                $tableName = $columnValue = null;
                $tableName = "authentification.lien_user_partenaire_prod";
                $columnValue["code"] = $codeLien;
                $columnValue["codeindividus"] = $code;
                $columnValue["codeproduit"] = $produit[0]['code'];
                $columnValue["codepartenariat"] = $partenaire[0]['code'];
                $columnValue["menuaction"] ="'".$produit[0]['actionutilisatuer']."'" ;
                $columnValue["pardefault"] = 1;
                $main->insertData($tableName, $columnValue);
               
                
        }

            // $insetionUser =Yii::$app->etablissementClass->create_lien_user_ets($code,$codeEts,$code);
     }


     public function actionContact(){
        $main = yii::$app->mainCLass;
        $nonSql = yii::$app->nonSqlClass;   
        $columnName = $tableName =$tableNames = $whereValue  = $whereValueSelect= $inColumn = $inValue = $formatBy = $paginate = null;
        $columnName = '*';

        if(yii::$app->request->isPost){
            $code = $nonSql->generateUniq();
            $tableName = $columnValue = null;
            $tableName = "partenaires.contact";
            $columnValue["code"] = $code;
            $columnValue["nom"] = $_POST['name'];
            $columnValue["email"] = $_POST['email'];
            $columnValue["sujet"] = $_POST['subject'];
            $columnValue["message"] = $_POST['message'];    
            $main->insertData($tableName, $columnValue);
            $notification = yii::$app->nonSqlClass->afficherNofitication(yii::$app->params['succes'], yii::t('app', 'envoyersucces'));  
            Yii::$app->session->setFlash('flashmsg', $notification);
            return $this->redirect(Yii::$app->request->referrer); 
              
        }
        $tableNames = "systeme.produit";
        $lisrprod = $main->selectJoinData($columnName, $tableNames, $whereValueSelect);

        return $this->render('/visiteur/contact.php',['produit'=>$lisrprod]);
     }
}    

 