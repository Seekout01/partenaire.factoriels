
<style>

  
      /* Carousel styling */
      #introCarousel,
      .carousel-inner,
      .carousel-item,
      .carousel-item.active {
        height: 85vh;

      }

      .carousel-item:nth-child(1) {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      }

      .carousel-item:nth-child(2) {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      }

      .carousel-item:nth-child(3) {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      }

      /* Height for devices larger than 576px */
      /* @media (min-width: 992px) {
        #introCarousel {
          margin-top: -58.59px;
        }
      } */

      .navbar .nav-link {
        color: #fff !important;
      }
   
   .cards {
    margin: 0 auto;
    text-align: center;
      display: -webkit-flex;
      display: flex;
    border-radius: 10px;
      -webkit-justify-content: center; 
    justify-content: center;
    -webkit-flex-wrap: wrap; 
      flex-wrap: wrap;
      margin-top: 15px;
      padding: 1.5%;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box; */
    box-sizing: border-box; */
    box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
  }
  
  .cards:hover {
    box-shadow: 0 4px 10px rgba(0,0,0,0.16), 0 4px 10px rgba(0,0,0,0.23);
  }

</style>
 	
    			   <!-- Carousel wrapper -->
             <div
        id="introCarousel"
        class="carousel slide carousel-fade shadow-2-strong mt-0"
        data-mdb-ride="carousel"
        >
     
      <!-- Inner -->
      <div class="carousel-inner">
      

        <!-- Single item -->
        <div class="carousel-item active">
			<video   style=""  playsinline autoplay  muted  loop >
				<source
						class="h-100"
						src="<?= yii::$app->request->baseUrl.'/web/mainAssets/media/videos/2.mp4'?>"
						type="video/mp4"
						muted="muted"
						/>
			</video>
			
			<div class="carousel-caption d-none d-md-block">
        <h5 class="fs-5hx text-white ">Third slide label</h5>
        <p>
          Praesent commodo cursus magna, vel scelerisque nisl consectetur.
        </p>
		<a href="#produits" class="btn mb-15"  pa-marked="1">Devenir Partenaire</a>
      </div>
        </div>
      </div>
      <!-- Inner -->

 
    </div>
    <!-- Carousel wrapper -->
<form name="da_frm_aut_space" id="da_frm_initier" method="post" action="<?= Yii::$app->request->baseUrl."/".md5("visiteur_index") ?>">
        <?= Yii::$app->nonSqlClass->getHiddenFormTokenField(); ?>
      
      <!-- Debut :: Charger les inputs chachés par default -->
      <input type="hidden" name="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
      <input type="hidden" name="action_key" id="action_key" value=""/>
      <input type="hidden" name="action_on_this" id="action_on_this" value=""/>	
      <div class="container mt-10 " > 
      <!--Section: Content-->


 
    <!--begin::Wrapper-->
    <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
		
					<!--begin::Wrapper container-->
					<div class="app-container container-xxl d-flex pt-4 pt-lg-7 mt-10 mb-n2 mb-lg-n3" >
						<!--begin::Main-->
						<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
      <section>
      <div class="row">	
						<div class="col-md-12 section-title center   mb-10 m-auto ">		

                             <h4 class=" mb-6 text-center text-gray-800 pb-10" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis doloribus enim, ducimus quaerat quidem iste fugiat eum quam obcaecati sed, reiciendis laboriosam molestias. Praesentium ratione non voluptas facilis ipsa quae.
                             Dolorem quasi soluta corrupti, molestiae, totam veniam nisi quidem ducimus est ratione provident. Corrupti delectus facere dolor inventore nostrum aliquam adipisci. Autem magni facilis ratione ab in a quam consequuntur.</h4>
							<!-- Text -->	
						
               <div class=" fs-2x fw-bold pt-13 text-center pb-10 text-dark ">Nos produits informatiques sont conçus pour simplifier votre vie numérique 
						<br>et vous offrir une expérience de service reussie.</div>
						</div>
					</div>  
      </section>
      <!--Section: Content-->

    
      <!--Section: Content-->
      <section class="text-center " id="produits">
      
        <div class="row mb-15">
       
            <div class="col-lg-4">
                <div class="card cards card-2 text-center h-100 " style="">
                  <div class="card-body">
                    <h5 class="card-title fs-3 pb-5">SANTEYAH</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                 
                </div>
                <div class="card-footer">
                <a href="javascript:;" onclick=" document.getElementById('action_on_this').value='<?= yii::$app->params['Santeyah']?>';document.getElementById('da_frm_initier').submit(); " style="margin-top: 12px;" class="btn btn-md btn-primary black-hover">DEVENIR PARTENAIRE</a>
                  </div>
              </div>
            </div>
           
            <div class="col-lg-4">
                <div class="card cards card-2 text-center h-100 " style="">
                  <div class="card-body">
                    <h5 class="card-title fs-3 pb-5">ATEX</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                 
                </div>
                <div class="card-footer">
                <a href="javascript:;" onclick=" document.getElementById('action_on_this').value='<?= yii::$app->params['Atex']?>';document.getElementById('da_frm_initier').submit(); "  class="btn btn-primary">DEVENIR PARTENAIRE</a>
                  </div>
              </div>
            </div>

           
            <div class="col-lg-4">
                <div class="card cards card-2 text-center h-100 " style="">
                  <div class="card-body">
                    <h5 class="card-title fs-3 pb-5">OPTIMISIONS</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                 
                </div>
                <div class="card-footer">
                <a href="javascript:;" onclick=" document.getElementById('action_on_this').value='<?= yii::$app->params['Optimisons']?>';document.getElementById('da_frm_initier').submit(); " style="margin-top: 12px;" class="btn btn-md btn-primary black-hover">DEVENIR PARTENAIRE</a>
                  </div>
              </div>
            </div>
         

        </div>
        </div>
      </section>
      <!--Section: Content-->

 

    
    </div>