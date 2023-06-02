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
        $visiteur = yii::$app->visiteurClass;
        
        if(yii::$app->request->isPost){
            // die();
            Yii::$app->layout = 'login_ayout';
            $produit = $_POST['action_on_this'];
            $typteEntite = $name = $tel = $email = Null;
            $data =[
                'tel'=>$tel,
                'typteEntite'=>$typteEntite,
                'name'=>$name,
                'email'=>$email,

            ];

            // $this->layout = 'login_layout';
            return $this->render('/visiteur/initier/initier.php',['produit'=>$produit,'data'=>$data]);
        }
        if(isset($_GET['codeservice'])){
            $produit = '';
            $codep = $_GET['codeservice'];

           
            switch ($codep) {
                case md5('1'):
                    $produit =1;
                    break;
                
                default:
                    # code...
                    break;
            }
            return $this->render('/visiteur/initier/initier.php',['produit'=>$produit]);
        }
        $columnName = $tableName =$tableNames = $whereValue  = $whereValueSelect= $inColumn = $inValue = $formatBy = $paginate = null;
         $columnName = '*';
         $tableNames = "systeme.produit";
         $produit = $main->selectJoinData($columnName, $tableNames);
         $tableNames = "individus.individus_maindata";
         $personel = $main->selectJoinData($columnName, $tableNames);
         $tableName= "partenaires.partenaire_globaldata";
         $whereValueSelect["partenaires.partenaire_globaldata.statut"] = "'0'";
         $partenaire = $main->selectJoinData($columnName, $tableName);
         $totalPartenaire=count($partenaire);
         $totalPersonnel =count($personel);
        //  $comment = $visiteur->comment();

         $columnName = $tableName =$tableNames = $whereValue  = $whereValueSelect= $inColumn = $inValue = $formatBy = $paginate = null;
         $columnName = '*';
         $tableNames = "partenaires.contact";
         $comment = $main->selectJoinData($columnName, $tableNames);
        //  die(var_dump($comment));
        //  dd($totalPersonnel);
        return $this->render('/visiteur/index.php',['produit'=>$produit ,'paretenaire'=>$totalPartenaire,'totalPersonnel'=>$totalPersonnel,'comment'=>$comment]);
    }



    public function actionAddentite(){
        // die(var_dump($_POST));
        $nonSql = yii::$app->nonSqlClass;
        $main = yii::$app->mainCLass;
        $this->layout = false;

        if(Yii::$app->request->isPost)
        {


            $typteEntite = $_POST['typteEntite'];$name= $_POST['name'];$tel =$_POST['tel'];$email = $_POST['email']; 
            
            $data = [
                'tel'=>$tel,
                'typteEntite'=>$typteEntite,
                'name'=>$name,
                'email'=>$email,
                ];
    
            //---- S33 ------ @ ----- Preparer champs obligatoires a valider ------ @ ------//
            $requiredFields = [
                'tel'=>$tel,
                'typteEntite'=>$typteEntite,
                'name'=>$name,
                'email'=>$email,
            ];

            $inputFormulaireValides = yii::$app->mainCLass->validerForm(1, $requiredFields);
            if($inputFormulaireValides !== true)  return $this->redirect(Yii::$app->request->referrer); 

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
                
              //ajout dans la table  entite optimision  
            if($_POST['codeProduit']==1){
                $tableName = $columnValue = null;
                $tableName = "optimisions.entreprise";
                $columnValue["codeglobelentite"] = $code;
                $columnValue["nom"] = $_POST['name'];
                $columnValue["email"] = $_POST['email'];    
                $columnValue["tel"] = $_POST['tel'];
                $main->insertData($tableName, $columnValue);
            }
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
        $main = yii::$app->mainCLass;

                 $code = $_GET['codesepartenariat'];
                 $columnName = '*';
                 $tableNames = "partenaires.paretenariat";
                 $whereValueSelect["partenaires.paretenariat.code"] = "'".$code."'";
         
                 $partenaires = $main->selectJoinData($columnName, $tableNames, $whereValueSelect);
                  

          
            if(sizeof($partenaires)>0){
                $partenaire =$partenaires[0];
                $date =$partenaire["ajouterle"];
                $compare=Yii::$app->mainCLass->getNbDaybetweenTwoDate($date);
                if($compare==false){
                
            
                if($partenaire['statut']=='1'){
                    $notification = yii::$app->nonSqlClass->afficherNofitication(yii::$app->params['attention'], yii::t('app', 'espaceAutorise'));  
                    Yii::$app->session->setFlash('flashmsg', $notification);
                    die('compte deja cree');
                     // return $this->redirect(md5('visiteur_index'));
                }
                    }else{
                    return;
        
                }
            }else{
                die('l\'url que vous aviez saisie est incorrect');

        }
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
            

               
           

             //mise a jour de la table partenariat]
             $tab = $col = null;
             $tab = "partenaires.paretenariat";
             $col["statut"] =1;
             $col["datedebut"] = date('Y-m-d');
             $col["modifierle"] = date('Y-m-d');
            $where['code'] = $partenaire[0]['code'];
  
             $updatedata = $main->updateData($tab, $col, @$whereValue);
           

           //insertion individus main data
            $codeMain = $nonSql->generateUniq();

            $tableName = $columnValue = null;
            $tableName = "individus.individus_maindata";
            $columnValue["code"] = $codeMain;
            $columnValue["prenom"] = $_POST['prenom'];
            $columnValue["nom"] = $_POST['nom'];
            $main->insertData($tableName, $columnValue);
            
            //insertion individus contact data
            $codeContact = $nonSql->generateUniq();

            $tableName = $columnValue = null;
            $tableName = "individus.individus_contactdata";
            $columnValue["code"] = $codeContact;
            $columnValue["codeindividumaindata"] = $codeMain;
            $columnValue["tel"] = $_POST['tel'];
            $columnValue["email"] = $_POST['mail'];
            $columnValue["ajouterle"] =  date('Y-m-d');  
            $main->insertData($tableName, $columnValue);

               //insertion individus contact data
               $codeContact = $nonSql->generateUniq();

               $tableName = $columnValue = null;
               $tableName = "individus.individus_biodata";
               $columnValue["code"] = $codeContact;
               $columnValue["codeindividusdatamain"] = $codeMain;
               $columnValue["ajouterle"] =  date('Y-m-d');  
               $main->insertData($tableName, $columnValue);
   
              
            //insertion individus partenaires data
            $codeLien = $nonSql->generateUniq();
            $tableName = $columnValue = null;
            $tableName = "partenaires.lien_individus_partenairie";
            $columnValue["code"] = $codeContact;
            $columnValue["codeindividusmaindata"] = $codeMain;
            $columnValue["codepartenaire"] =$partenaire[0]['codepartenaireglobaldata'];;
            $columnValue["ajouterle"] =  date('Y-m-d');  
            $main->insertData($tableName, $columnValue);



              //insertion userauth
              $motPassCrypte = Yii::$app->accessClass->create_pass($_POST['Identifiant'],$_POST['mdp']);

              $codeLien = $nonSql->generateUniq();
              $tableName = $columnValue = null;
              $tableName = "authentification.userauth";
              $columnValue["code"] = $codeMain;
              $columnValue["identifiant"] = $_POST['Identifiant'];
               $columnValue["motpass"] = $motPassCrypte;
              $main->insertData($tableName, $columnValue);

             //insertion individus partenaires prod
             $menuaction="";
             switch ( $partenaire[0]['codeproduit']) {
                case '1':
                    $menuaction ="repport,repport_ventelist,repport_inventlistarticle,repport_inventanalysearticle,repport_inventhistoriquearticle,repport_inventarticlealertstok,repport_articlestokinitial,repport_venteparproduit,repport_lignesdevente,repport_margeventeparproduit,repport_margenetventeparproduit,repport_fondroulement,repport_depensediver,repport_userdiver,repport_evenementdiver,repport_facture,parametre_users@site_index@site_signagreement@inventaire,inventaire_nproduit,inventaire_produits,inventaire_reaprovision,inventaire_udms,inventaire_cats@vente_simple@fournisseur_themain@paiement_themain@client_themain@diver,diver_charge@parametre,parametre_entreprises,parametre_motifsenrgclient,parametre_campagnes@rg,rg_invent,rg_vente,rg_diver";
                break;
                case '4':
                    $menuaction = "site_index@personel,personel_listepersonnel@notification,notification_index,notification_direct,notification_groupe@config,config_fonction,config_post,config_reference,config_entreprise,config_utilisateur";
                    break;
                
                default:
                    # code...
                    break;
                  }

                $codeLien = $nonSql->generateUniq();
                $tableName = $columnValue = null;
                $tableName = "authentification.lien_user_partenaire_prod";
                $columnValue["code"] = $codeLien;
                $columnValue["statut"] = 1;
                $columnValue["codeindividus"] = $codeMain;
                $columnValue["codeproduit"] = $partenaire[0]['codeproduit'];
                $columnValue["codepartenariat"] = $partenaire[0]['code'];
               
                $columnValue["menuaction"] =$menuaction ;
                $columnValue["pardefault"] = 1;
                $main->insertData($tableName, $columnValue);
              
                
        }
        $notification = yii::$app->nonSqlClass->afficherNofitication(yii::$app->params['succes'], yii::t('app', 'envoyersucces'));  
        Yii::$app->session->setFlash('flashmsg', $notification);
        return $this->redirect(Yii::$app->request->referrer); 

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



     public function actionUnicitelibelle(){
        Yii::$app->response->format = Response::FORMAT_JSON;  

        switch ($_POST['action_key']) {

            case md5(strtolower('uniReference')):
                   
            $libCat =$_POST['reference'];
            $verifieUniciter = Yii::$app->mainCLass->uniLibelle('atext.reference',$libCat,'libelle');
            
            break;
            case md5(strtolower('unientreprise')):
            
                $raisonSocial =$_POST['raisonSocial'];
                $verifieUniciter = Yii::$app->mainCLass->uniLibelle('atext.partenaire',$raisonSocial,'raisonSocial');
                
              break;
            case md5(strtolower('verifiermail')):
                           
                $email =$_POST['email'];
               
                $verifieUniciter = Yii::$app->mainCLass->verifie_mail($email);

               return $verifieUniciter;

             break;
            
            default:
                # code...
                break;
        }

                return $_POST;
     }



}    

 