<!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Body-->
        <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1 flex-center flex-column flex-lg-row-fluid">
            <!--begin::Form-->
            <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                <!--begin::Wrapper-->
                <div class="w-lg-500px p-5">
                    <!--begin::Form-->
                    <form id="initierform" name="commentForm" method="post" class="row comment-form" action="<?= Yii::$app->request->baseUrl."/".md5("visiteur_addentite");?>" novalidate="novalidate">
                                <input type="hidden" name="_csrf" id="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
                                 <input type="hidden" name="codeProduit" id="codeProduit" value="<?= $produit?>"/>
                        <!--begin::Illustration-->
                        <div class="text-center pb-10  px-5">
                            <!-- <img src="<?= Yii::$app->request->baseUrl ?>/web/assets/medias/logo/fact.png" alt="" class="mw-100 h-100px h-sm-125px" /> -->
                        </div>
                        <!--end::Illustration-->

                        <!--begin::Heading-->
                        <div class="text-center mb-11">
                            <!--begin::Title-->
                            <h1 class="text-dark fw-bolder mb-3">Initier Votre Espace</h1>
                            <!--end::Title-->
                            <!--begin::Subtitle-->
                            <div class="text-gray-500 fw-semibold fs-6">Tous nos services à portée de main </div>
                            <!--end::Subtitle=-->
                        </div>
                        <!--begin::Heading-->

                      <?= Yii::$app->session->getFlash('flashMsg'); Yii::$app->session->removeFlash('flashMsg'); ?>

                        
                        <div class="fv-row mb-8">
                            <div class="fs-5 fw-semibold mb-2 required">Spécifiez la forme juridique de votre entité</div>
                            <select id="" name="typteEntite" class="form-control   border-dark custom-select typteEntite " required="">
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
                       


                       
                        <div class="fv-row mb-8">
                            <div class="fs-5 fw-semibold mb-2 required">Raison sociale</div>
                            <input type="text" placeholder="Saisir ici votre nom" name="name" id="name" value="<?= $data['name'] ?>" autocomplete="off" class="form-control  border-dark " />
                        </div>
                     

                        <!--Debut::Email -->
                        <div class="fv-row mb-8">
                            <div class="fs-5 fw-semibold mb-2 required">Email</div>
                            <input type="text" placeholder="Saisir ici votre email" name="email" id="email" value="<?= $data['email'] ?>" autocomplete="off" class="form-control  border-dark " />
                        </div>
                        <!--Fin::Email -->

                         <!--Debut::Email -->
                         <div class="fv-row mb-8">
                            <div class="fs-5 fw-semibold mb-2 required">Numéro de téléphone</div>
                            <input type="text" placeholder="Saisir ici votre email" name="tel" id="tel" value="<?= $data['email'] ?>" autocomplete="off" class="form-control  border-dark " />
                        </div>
                        <!--Fin::Email -->

                    

                        <!-- Soumettre le formulaire -->
                        <div class="d-grid mb-10">
                            <a href="javascript:;" onClick="doSignUp();" class="btn btn-primary ">
                                <!--begin::Indicator label-->
                                <span class="indicator-label">INITIER VOTRE COMPTE</span>
                                <!--end::Indicator label-->
                            </a>
                        </div>
                        <!--end::Submit button-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require('initierjs.php') ?>
