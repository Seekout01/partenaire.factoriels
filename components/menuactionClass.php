<?php
    namespace app\components;
    use yii;
    use yii\base\component;
    use yii\web\controller;
    use yii\base\invalidconfigexception;

    Class menuactionClass extends Component 
    {

      public $connect = Null;
      
      public function __construct(){
        $this->connect = \Yii::$app->db;
      }

      #***********************************************
      # RENVOIS ACTIVE SI MENU CONTIENT ACTIVE ACTION
      #***********************************************
      public function colorActiveMenu($menuaction, $identifier){
      
        switch ($identifier) {
          #****************************************************************
          # IDENTIFICATION DU TYPE DE MENU : SIMPLE MENU OU AVEC SOUS MENU
          #****************************************************************
          case 1: # CASE DE SIMPLE MENU
          if(isset($menuaction)){
            if(Yii::$app->controller->id.'_'.Yii::$app->controller->action->id == $menuaction){
              return "here show menu-here-bg";
            }
          }
          break;

          case 2: # CAS DES SUB / MENUS
              for ($i=1; $i < sizeof($menuaction); $i++) {
                #*************************************************************
                # ANALYSE SI LE SUB_MENU CLIQUER EST AUTORISER A L'UTILISATEUR
                #*************************************************************
                if($menuaction[$i] == Yii::$app->controller->id.'_'.Yii::$app->controller->action->id){
                  return "here show menu-here-bg";
                }
            }
          break;

          default:
            return Null;
          break;
        }
        return Null;
      }


      #*****************************************
      # RENVOIS LA CHAINE DE CHARACTERE DE MENU
      #*****************************************
      public function menuString($codeUser){
        $menuArray = Null;
        if(isset($codeUser)){
          
          $rslt = $this->connect->createCommand('SELECT menuaction,mainmenu FROM at_userauth
                                            WHERE code=:codeIdentifiant')
                          ->bindValue(':codeIdentifiant', $codeUser)
                          ->queryOne();

            if(is_array($rslt)){
              return $rslt;
            }
          }

          return $menuArray;
        }



        public function navbarConstructor(){
          $mainmenu =Yii::$app->params['adminAction'];
          $activeController = Yii::$app->controller->id;
          $menu = explode(Yii::$app->params['menuSeperator'], $mainmenu); 
          $ajaxAction = Yii::$app->params['ajaxActions'];

           foreach ($menu as $key => $value) {
          $sousMenu = explode(Yii::$app->params['subMenuSeperator'], $value);
          if(!(in_array($sousMenu[0], $ajaxAction))){
            if(is_array($sousMenu) AND sizeof($sousMenu) > 1){
              for ($j=1; $j < sizeof($sousMenu); $j++) {

               
            if($sousMenu[0] == $activeController){
                echo '

                <div data-kt-menu-placement="bottom-start" class="menu-item '.menuactionClass::colorActiveMenu($sousMenu[$j], 1).' menu-lg-down-accordion menu-sub-lg-down-indention me-0">
                <!--begin:Menu link-->
                <a class="menu-link" href="'.Yii::$app->request->baseUrl.'/'.md5($sousMenu[$j]).'">
                <span class="menu-link">
                  <span class="menu-title">'.Yii::t("app",$sousMenu[$j]).'</span>
                  <span class="menu-arrow d-lg-none"></span>
                </span>
                </a>
                <!--end:Menu link-->
              
              </div>
              <!--end:Menu item-->
           
            ';
          }
        }
      
        }

        }
      }
              
        }
        #**********************
        # CONSTRUCTEUR DE MENU
        #**********************
        public function menuConstructeur($codeUser){
          $subMenu = $menuString = Null;
          $menus = menuactionClass::menuString($codeUser);
          // $mainmenu =$menus['mainmenu'];
          // $menuString=$menus['menuaction'];
          $menuNavbar='';
          $mainmenu =Yii::$app->params['etsAdminMenuAction'];
          $menuString= Yii::$app->params['mainMenu'];
        if(isset($menuString)){
          $ajaxAction = Yii::$app->params['ajaxActions'];
          $menuArray = explode(Yii::$app->params['menuSeperator'], $menuString); # ON FORME LA LIGNE PRICI[ALE DES MENUS


          echo '
          <!--begin:Menu item-->
            <div class="menu-item pt-5 ">
                <!--begin:Menu content-->
                <div class="menu-content">
                    <span class="menu-heading fw-bold text-uppercase fs-7">Pages</span>
                </div>
                <!--end:Menu content-->
            </div>
           <!--end:Menu item-->
          ';
          foreach ($menuArray as $value) {
            /* Empechons la vue des actions ajax */
            $subMenuArray = explode(Yii::$app->params['subMenuSeperator'], $value);
            if(!(in_array($subMenuArray[0], $ajaxAction))){
              if(is_array($subMenuArray) AND sizeof($subMenuArray) > 1){
                # DANS CE CAS , CEST UN MENU AVEC SOUS MENU


                echo '
              <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                      <span class="menu-link">
                           <span class="menu-title">'.Yii::t("app",$subMenuArray[0]).'</span>
                          <span class="menu-arrow"></span>
                        </span>
                         <div class="menu-sub menu-sub-accordion">
                        ';
                        for ($i=1; $i < sizeof($subMenuArray); $i++) {

                         
                           if(!(in_array($subMenuArray[$i], $ajaxAction))){
                         
                            echo '
                              <div class="menu-item '.menuactionClass::colorActiveMenu($subMenuArray, 2).'">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="'.Yii::$app->request->baseUrl.'/'.md5($subMenuArray[$i]).'">
                                   <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                    </span>
                                     <span class="menu-title">'.Yii::t("app",$subMenuArray[$i]).'
                                   </span>    
                                </a>
                              </div>
                            ';
                        
                             
                           }


                         
                        }
                      
                      echo '
                      </div>
                  </div>';
              }else {
                if(isset($value) && !empty($value)){
            
                  echo '
                  <div  class="menu-item menu-accordion '.menuactionClass::colorActiveMenu($menuArray, 2).'">
                  <span class="menu-link">
                
                    <a href="'.Yii::$app->request->baseUrl.'/'.md5($value).'">    <span class="menu-title">'.Yii::t("app",$value).'</span>
                    </a>
                    </span>
                    </div>
                  ';

                }
              }
            }
          }
        }
      }


      // RENVOIS TITRE DE PAGE EN FONCTION DE CONTROLLER ID
      public function getPageTitle($controllerId){
        $pTitle = Null;
        if(!empty($controllerId)){
          switch ($controllerId) {

            case 'bondcommand':
            case 'bondcommand_themain':
              $pTitle = Yii::t('app','bondcommand_themain');
            break;

          }
        }
        return $pTitle;
      }

      // RENVOIS LES DIFFERENTS ICONS DU MENU
      public function getIcon($actions){
        $icon = Null;
        switch ($actions) {

          case 'bondcommand':
          case 'bondcommand_themain':
            $icon = 'bold';
          break;

        }
        return $icon;
      }
    }