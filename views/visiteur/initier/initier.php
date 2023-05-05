

 
 <div class="row m-2">
      
            <div class="col-lg-4 m-auto">
                <div id="leave-comment">
                    	<!--begin::Content-->
					<div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
						<!--begin::Image-->
						<!--begin::Image-->
						<img class="theme-light-show mx-auto mw-100 w-150px w-lg-450px mb-10 mb-lg-20" src="/../partenaire.administration.factoriels/web/mainAssets/media/uploads/photo/<?=$produit['background']?>" alt="" />
                          <!--end::Image-->
                 </div>
                
            </div>
        </div>
        <div class="col-lg-4  m-auto">
                <div id="leave-comment">
                
                    <!-- Title -->
                    <h5 class="h5-xl noto-font-700 purple-color">Initiez gratuitement
                       votre Espace Partenaire</h5>
                    
                      
                       <?= Yii::$app->session->getFlash('flashmsg'); Yii::$app->session->removeFlash('flashmsg'); ?>

                        <form name="commentForm" method="post" class="row comment-form" action="<?= Yii::$app->request->baseUrl."/".md5("visiteur_addentite");?>" novalidate="novalidate">
                                <input type="hidden" name="_csrf" id="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
                            <input type="hidden" name="codeProduit" id="codeProduit" value="<?= $produit['code'] ?>"/>
                        <div id="input-typteEntite" class="col-md-12 input-message">
                            <p>Spécifiez la forme juridique de votre
                             entité</p>
                             <select     id=""  name="typteEntite" class="form-control  custom-select typteEntite " required="">
                                <option value="" hidden >Faites un choix </option>
                                <?php
                                    $typeEntite = yii::$app->nonSqlClass->listEntite();
                                    if(sizeof($typeEntite)>0){
                                        foreach ($typeEntite as $key => $value) {
                                           echo ' <option value="'.$key.'"  >'. $value.' </option>';
                                        }
                                    }

                                
                                ?>
                             </select>
                        </div> 
                                            
                        <div id="input-name" class="col-md-12">
                            <p>Raison sociale *</p>
                            <input type="text" name="name" class="form-control name" placeholder="Saisissez ici !*" required=""> 
                        </div>
                                
                        <div id="input-email" class="col-md-12">
                            <p>Email d’administration *</p>
                            <input type="email" name="email" class="form-control email" placeholder="Saisissez ici !*" required=""> 
                        </div>

                        <div id="input-tel" class="col-md-12">
                            <p>Numéro de téléphone *</p>
                            <input type="text" name="tel" class="form-control tel" placeholder="Saisissez ici !*" required=""> 
                        </div>
                                            
                        <!-- Contact Form Button -->
                        <div class="col-lg-12 mt-15 form-btn"> 						                 
                            <button  class="btn btn-primary tra-black-hover submit">Initier l'espacet</button> 
                        </div>
                                                                        
                        <!-- Contact Form Message -->
                        <div class="col-md-12 comment-form-msg text-center">
                            <div class="sending-msg"><span class="loading"></span></div>
                        </div>  
                                                    
                    </form>									
            
            </div>
        </div>
       
    </div>
    

    <?php //require('initierjs.php');?>
 