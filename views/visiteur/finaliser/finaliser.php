
 
 
 <div class="row m-2">
      
     
  <div class="col-lg-4  m-auto">
          <div id="leave-comment">     
          <form name="commentForm"  class="row comment-form"  method="post" id="formadd"  action="<?= Yii::$app->request->baseUrl."/".md5("visiteur_addfinaliser");?>" novalidate="novalidate">


                <div class="row " id="personnel">
              <!-- Title -->
              <label for="" class="pb-15">Etape 1/2 </label>

              <h5 class="h5-xl noto-font-700 purple-color">Généralité sur l’admin</h5>
              

                    <label for="" class="pb-15">Renseignez les infos sur l’administrateur</label>
              
                 <?= Yii::$app->session->getFlash('flashmsg'); Yii::$app->session->removeFlash('flashmsg'); ?>
 
                      <input type="hidden" name="_csrf" id="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
                      <input type="hidden" name="code" id="code" value="<?= $code ?>"/>

                                      
                  <div id="input-name" class="col-md-12">
                      <p>Prénom *</p>
                      <input type="text" name="prenom" class="form-control prenom" id="prenom" placeholder="Saisissez ici !*" required=""> 
                  </div>
                          
                  <div id="input-nom" class="col-md-12">
                      <p>Nom *</p>
                      <input type="text" name="nom" class="form-control nom" id="nom" placeholder="Saisissez ici !*" required=""> 
                  </div>

                  <div id="input-tel" class="col-md-12">
                      <p>Numéro de téléphone *</p>
                      <input type="text" name="tel" id="tel" class="form-control tel" placeholder="Saisissez ici !*" required=""> 
                  </div>

                  <div id="input-tel" class="col-md-12">
                      <p>mail *</p>
                      <input type="mail" name="mail" id="mail" class="form-control tel" placeholder="Saisissez ici !*" required=""> 
                  </div>
                 <!-- Contact Form Message -->
                  <div class="col-md-12 pb-2 comment-form-msg text-center">
                      <div class="sending-msg  text-warning" id="message"></div>
                  </div>  
                </div>        
                
          <div class="row" id="userCmpte" style="display:none" >
              <!-- Title -->
              <label for="" class="pb-15">Etape 2/2 </label>

                <h5 class="h5-xl noto-font-700 purple-color">Infos de connexion</h5>


                  <label for="" class="pb-15">Créez vous un seul accès securisé pour tous nos produits</label>
                 <?= Yii::$app->session->getFlash('flashmsg'); Yii::$app->session->removeFlash('flashmsg'); ?>
 
                      <input type="hidden" name="_csrf" id="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
                  
                                      
                  <div id="input-name" class="col-md-12">
                      <p>Identifiant *</p>
                      <input type="text" name="Identifiant" id="Identifiant" class="form-control prenom" placeholder="Saisissez ici !*" required />
                  </div>
                          
                  <div id="input-email" class="col-md-12">
                      <p>mots de passe *</p>
                      <input type="password" name="mdp"  class="form-control nom"  id="mdp" placeholder="Saisissez ici !*" required=""> 
                  </div>

                  <div id="input-tel" class="col-md-12">
                      <p>Confirmer *</p>
                      <input type="password" name="Confirmer" id="Confirmer" class="form-control tel" placeholder="Saisissez ici !*" required=""> 
                  </div>
              <!-- Contact Form Message -->
              <div class="col-md-12 pb-2 comment-form-msg text-center">
                      <div class="sending-msg  text-warning" id="message2"></div>
                  </div>  
                    </div>        
            </form>	
                   		  <!-- Contact Form Button -->
                 <div class="col-lg-12  me-2 form-btn"> 						                 
                      <button  class="btn btn-primary tra-black-hover" id="continuer" >Continuer</button> 
                </div>
                <div class="row d-flex  flex-end">
                <div class="col-4 me-lg-2 "> 						                 
                      <button  class="btn btn-primary   " id="Retour"  style="display:none" >Retour</button> 
                </div>
                <div class="col-4 me-lg-2 "> 						                 
                      <button  class="btn btn-primary  " id="Valider"  style="display:none" >Termniner</button> 
                </div>
                </div>
           							
      
      </div>
  </div>
 
</div>

<script>
     document.getElementById("continuer").addEventListener('click', function (e) {


          var prenom = document.getElementById("prenom").value;
          var nom=   document.getElementById("nom").value;
          var  tel=  document.getElementById("tel").value;
           var  email =document.getElementById("mail").value;
           if(prenom !=""){

           }
           if(nom !=""){
            
            }
            if(tel !=""){
            
            }
            if(email !=""){
            
            }

        if(prenom !="" & nom !="" & tel !="" & email !=""  ){
            document.getElementById("personnel").style= "display:none";
            document.getElementById("personnel").style= "display:none";
           document.getElementById("userCmpte").style= "display:block";
           document.getElementById("Retour").style= "display:block";
           document.getElementById("Valider").style= "display:block";
             document.getElementById("continuer").style= "display:none";


        }else{
           document.getElementById('message').append('Veuillez remplire les champs');
        }


      ;

     });

     document.getElementById("Retour").addEventListener('click', function (e) {
            
     


            document.getElementById("personnel").style= "display:block";
           document.getElementById("userCmpte").style= "display:none";
           document.getElementById("Retour").style= "display:none";
           document.getElementById("Valider").style= "display:none";
             document.getElementById("continuer").style= "display:block";

     });

     document.getElementById("Valider").addEventListener('click', function (e) {

        var Confirmer = document.getElementById("Confirmer").value;
          var mdp=   document.getElementById("mdp").value;
          var Identifiant=   document.getElementById("Identifiant").value;
          if(Confirmer !="" & mdp !="" & Identifiant !=""   ){
                if( Confirmer === mdp){
                    document.getElementById("formadd").submit();

                }else{
                    document.getElementById('message2').append('Les mots de passe sont differents');

                }
          }else{
            document.getElementById('message2').append('Veuillez remplire les champs');

          }
      
     });
</script>