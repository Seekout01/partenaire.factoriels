	<!--begin::Form-->
  <div class="d-flex flex-center flex-column flex-lg-row-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-500px p-10">
							<!--begin::Form-->
							<form class="form w-100" novalidate="novalidate" id="kt_sign_in_for" method="post"  action="<?= Yii::$app->request->baseUrl.'/'.md5('login')?>">
							<?= Yii::$app->nonSqlClass->getHiddenFormTokenField(); ?>
								<?php
								$token2 = Yii::$app->getSecurity()->generateRandomString();
								$token2 = str_replace('+','.',base64_encode($token2));
								?>
								<!-- DEBUT : BASIC HIDDEN IMPUT FOR THE FORM --> 
								<input type="hidden" name="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
								<input type="hidden" name="token2" value="<?= $token2 ?>"/>	
							<!--begin::Heading-->
								<div class="text-center mb-11">
									<!--begin::Title-->
									<h1 class="text-dark fw-bolder mb-3">IDENTIFICATION</h1>
									<!--end::Title-->
									<?= Yii::$app->session->getFlash('flashmsg'); Yii::$app->session->removeFlash('flashmsg'); ?>

								</div>
								<!--begin::Heading-->
								<!--begin::Login options-->
								<div class="row g-3 mb-9">
								
								</div>
								<!--end::Login options-->
						
								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Email-->
									<input type="text" placeholder="Identifiant" name="userName" autocomplete="off" class="form-control bg-transparent border-dark " />
									<!--end::Email-->
								</div>
								<!--end::Input group=-->
								<div class="fv-row mb-3">
									<!--begin::Password-->
									<input type="password" placeholder=" <?= yii::t("app",'Password') ?>" name="motPass" autocomplete="off" class="form-control bg-transparent border-dark" />
									<!--end::Password-->
								</div>
								<!--end::Input group=-->
									<!--begin::Password-->
									<input type="password" hidden placeholder=" <?= yii::t("app",'Password') ?>" name="sugarpot" autocomplete="off" class="form-control bg-transparent border-dark" />
									<!--end::Password-->
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
									<div></div>
									<!--begin::Link-->
									<a href="../../demo2/dist/authentication/layouts/corporate/reset-password.html" class="link-primary"> <?= yii::t("app",'mdpOublier') ?></a>
									<!--end::Link-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Submit button-->
								<div class="d-grid mb-10">
									<button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
										<!--begin::Indicator label-->
										<span class="indicator-label"><?= yii::t('app','identifier')?></span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
								</div>
								<!--end::Submit button-->
								<!--begin::Sign up-->
								<div class="text-gray-500 text-center fw-semibold fs-6"><?= yii::t("app",'pasMembre') ?>
								<a href="<?= yii::$app->request->baseurl.'/'.md5('visiteur_initierespace')?>" class="link-primary"><?= yii::t("app",'insc') ?></a></div>
								<!--end::Sign up-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Form-->