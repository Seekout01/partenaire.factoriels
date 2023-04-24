z<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;

$this->title = Yii::t('app', 'connexion');
$userName = !empty($userName) ? $userName : null;
$motPass = !empty($motPass) ? $motPass : null;
$sugarpot = !empty($sugarpot) ? $sugarpot : null;
?>


<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Page bg image-->
			<style>body { background-image: url('<?= Yii::$app->request->baseUrl ?>/web/mainAssets/media/auth/bg4.jpg'); } [data-theme="dark"] body { background-image: url('assets/media/auth/bg4-dark.jpg'); }</style>
			<!--end::Page bg image-->
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid flex-lg-row">
				<!--begin::Aside-->
				<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
					<!--begin::Aside-->
					<div class="d-flex flex-center flex-lg-start flex-column">
						<!--begin::Logo-->
						<a href="../../demo1/dist/index.html" class="mb-7">
							<img alt="Logo" src="<?= Yii::$app->request->baseUrl ?>/web/mainAssets/media/logos/custom-3.svg">
						</a>
						<!--end::Logo-->
						<!--begin::Title-->
						<h2 class="text-white fw-normal m-0">Branding tools designed for your business</h2>
						<!--end::Title-->
					</div>
					<!--begin::Aside-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-center w-lg-50 p-10">
					<!--begin::Card-->
					<div class="card rounded-3 w-md-550px">
						<!--begin::Card body-->
						<div class="card-body p-10 p-lg-20">
							<!--begin::Form-->
							<form class="form w-100" novalidate="novalidate" id="kt_sign_in_for" method="post"  action="<?= Yii::$app->request->baseUrl.'/'.md5('login')?>">
							   <?= Yii::$app->nonSqlClass->getHiddenFormTokenField(); ?>
								<?php
								$token2 = Yii::$app->getSecurity()->generateRandomString();
								$token2 = str_replace('+','.',base64_encode($token2));
								?>
								<!-- DEBUT : BASIC HIDDEN IMPUT FOR THE FORM --> 
								<input type="hidden" name="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
								<input type="hidden" name="token2" value="<?= $token2 ?>"/>								<!--begin::Heading-->
								<div class="text-center mb-11">
									<!--begin::Title-->
									<h1 class="text-dark fw-bolder mb-3">IDENTIFICATION</h1>
									<!--end::Title-->
									<?= Yii::$app->session->getFlash('flashmsg'); Yii::$app->session->removeFlash('flashmsg'); ?>

								</div>
								<!--begin::Heading-->
								<!--begin::Login options-->
								<div class="row g-7 mb-9">
									<!--begin::Col-->
									<div class="col-md-6">
										<!--begin::Google link=-->
										<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
										<img alt="Logo" src="<?= Yii::$app->request->baseUrl ?>/web/mainAssets/media/svg/brand-logos/google-icon.svg" class="h-15px me-3">Sign in with Google</a>
										<!--end::Google link=-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6">
										<!--begin::Google link=-->
										<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
										<img alt="Logo" src="<?= Yii::$app->request->baseUrl ?>/web/mainAssets/media/svg/brand-logos/apple-black.svg" class="theme-light-show h-15px me-3">
										<img alt="Logo" src="<?= Yii::$app->request->baseUrl ?>/web/mainAssets/media/svg/brand-logos/apple-black-dark.svg" class="theme-dark-show h-15px me-3">Sign in with Apple</a>
										<!--end::Google link=-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Login options-->
								<!--begin::Separator-->
								<div class="separator separator-content my-14">
									<span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
								</div>
								<!--end::Separator-->
								<!--begin::Input group=-->
								<div class="fv-row mb-8 fv-plugins-icon-container">
										<!--begin::Password-->
										<input type="text" placeholder="Identifiant" name="userName" autocomplete="off" class="form-control bg-transparent border-dark " />
									<!--end::Password-->
								<div class="fv-plugins-message-container invalid-feedback"></div></div>
								<!--end::Input group=-->
								<div class="fv-row mb-3 fv-plugins-icon-container">
									<!--begin::Password-->
									<input type="password" placeholder=" <?= yii::t("app",'Password') ?>" name="motPass" autocomplete="off" class="form-control bg-transparent border-dark" />
									<!--end::Password-->
								<div class="fv-plugins-message-container invalid-feedback"></div></div>
								<!--end::Input group=-->
								<!--end::Input group=-->
								<div class="fv-row mb-3 fv-plugins-icon-container">
									<!--begin::Password-->
									<input type="password" hidden placeholder=" <?= yii::t("app",'Password') ?>" name="sugarpot" autocomplete="off" class="form-control bg-transparent border-dark" />
									<!--end::Password-->
								<div class="fv-plugins-message-container invalid-feedback"></div></div>
								<!--end::Input group=-->
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
						<!--end::Card body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>

    <?php 
      require_once('script/login_sc.php');
    ?>