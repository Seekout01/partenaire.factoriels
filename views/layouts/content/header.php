<header id="header-2" class="header white-menu">
	<div class="header-wrapper">

		<!-- MOBILE HEADER -->
	    <div class="wsmobileheader clearfix">	
	    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>	    	
	    	<span class="smllogo"><img src="<?=yii::$app->request->baseUrl ?>/web/mainAssets/factoriels_img/logo.png" width="200" height="45" alt="mobile-logo"/></span>
	 	</div>
		
		<!-- NAVIGATION MENU -->
		<div class="wsmainfull menu clearfix">
	    	<div class="wsmainwp clearfix">
	    		<!-- LOGO IMAGE -->
				<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 90 pixels) -->
				<div class="desktoplogo"><a href="#hero-3" class="logo-black"><img src="<?=yii::$app->request->baseUrl ?>/web/mainAssets/factoriels_img/logo.png" width="180" height="40" alt="header-logo"></a></div>
				<div class="desktoplogo"><a href="#hero-3" class="logo-white"><img src="<?=yii::$app->request->baseUrl ?>/web/mainAssets/factoriels_img/logo.png" width="180" height="40" alt="header-logo"></a></div>
 				
 				<!-- MAIN MENU -->
	      		<nav class="wsmenu clearfix blue-header">
	        		<ul class="wsmenu-list">
						<li class="nl-simple" aria-haspopup="true">
							<a href="<?=yii::$app->request->baseUrl.'/'.md5('visiteur_contact') ?>" class="header-btn btn-primary tra-black-hover last-link">Laissez-nous un mot</a>
						</li>
	        		</ul>
	        	</nav>
	        	<!-- END MAIN MENU -->

	    	</div>
	    </div>
	    <!-- END NAVIGATION MENU -->
	</div>

</header>

