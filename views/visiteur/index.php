<!-- SERVICES-4
			============================================= -->
			<section id="services-4" class="wide-70 services-section division">
				<div class="container">


					<!-- SECTION TITLE -->
					<div class="row">	
						<div class="col-md-12 section-title center">		

			 				<!-- Title -->
							<h2 class="darkblue-color">Ensemble, créons un avenir incroyablement brillant et passionnant - laissez-nous vous montrer comment</h2>

							<!-- Text -->	
							<p class="p-md">Nos produits informatiques sont conçus pour simplifier votre vie numérique et vous offrir une expérience de service reussie.</p> 

						</div>
					</div>


					<div class="row">


					
				     	<?php
							if(sizeof($produit)>0){
								
								foreach ($produit as $key => $value) {
									echo '
									<!-- SERVICE BOX #2 -->
									<div class="col-md-6 col-lg-6">
										<div class="sbox-4 icon-sm">
											<a href="visa-details.html">
											
												<!-- Icon -->
												<div class="sbox-4-icon primary-color"><span class="flaticon-295-folder-3"></span></div>
										
												<!-- Text -->
												<div class="sbox-4-txt">
													<h5 class="h5-md darkblue-color">'.$value['libelle'].'</h5>
													<p>'.$value['description'].'</p>
													<a href="'.yii::$app->request->baseUrl.'/'.md5('visiteur_initier').'/'.$value['code'].'"  style="margin-top: 12px;" class="btn btn-md btn-primary black-hover">DEVENIR PARTENAIRE</a>
												</div>
			
											</a>
										</div>							
									</div>';
								}
							}


						?>

				

						


					</div>    <!-- End row -->
				</div>     <!-- End container -->
			</section>	<!-- END SERVICES-4 -->




			<!-- HORIZONTAL GREY LINE -->
			<div class="section-divider"><div class="container"><div class="row"><div class="grey-border"></div></div></div></div>


			<!-- STATISTIC-2
			============================================= -->
			<div id="statistic-2" class="bg-blue-map wide-60 statistic-section division">
				<div class="container">


					<!-- SECTION TITLE -->
					<div class="row">	
						<div class="col-md-12 section-title center white-color">		

			 				<!-- Title -->
							<h2 class="h2-xs">Pourquoi choisire factoriels?</h2>

							<!-- Text -->	
							<p class="p-md">Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat, 
							   felis lacinia risus interdum auctor id viverra dolor iaculis luctus placerat and massa
							</p> 

						</div>
					</div>	 <!-- END SECTION TITLE -->	


					<div class="row">

						<!-- STATISTIC BLOCK #1 -->
						<div class="col-md-6 col-lg-3">							
							<div class="statistic-block icon-sm">

								<!-- Icon -->
								<span class="flaticon-431-bank"></span>
								<!-- Text -->
								<h5 class="primary-color"><span class="count-element"><?= $paretenaire ?></span>+</h5>
								<p class="p-md">Partenaires</p>	

							</div>								
						</div>

						<!-- STATISTIC BLOCK #1 -->
						<div class="col-md-6 col-lg-3">							
							<div class="statistic-block icon-sm">

								<!-- Icon -->
								<span class="flaticon-032-user-3"></span>

								<!-- Text -->
								<h5 class="primary-color"><span class="count-element"><?= $totalPersonnel ?></span>+</h5>
								<p class="p-md">Personnel</p>	

							</div>								
						</div>

						<!-- STATISTIC BLOCK #2 -->
						<div class="col-md-6 col-lg-3">							
							<div class="statistic-block icon-sm">
		
								<!-- Icon -->
								<span class="flaticon-295-folder-3	"></span>

								<!-- Text -->
								<h5 class="primary-color"><span class="count-element"><?= $totalproduit ?></span></h5>
								<p class="p-md">Produit</p>	

							</div>						
						</div>

						<!-- STATISTIC BLOCK #3 -->
						<div class="col-md-6 col-lg-3">						
							<div class="statistic-block icon-sm">

								<!-- Icon -->
								<span class="flaticon-285-internet-2"></span>

								<!-- Text -->
								<h5 class="primary-color"><span class="count-element">2</span></h5>
								<p class="p-md">Pays</p>	

							</div>						
						</div>



					</div>	<!-- End row -->
				</div>	 <!-- End container -->		
			</div>	 <!-- END STATISTIC-2 -->



			



			<!-- TESTIMONIALS-1
			============================================= -->
 			<section id="reviews-1" class="bg-tra-city bg-lightgrey wide-100 reviews-section division">
				<div class="container">


					<!-- SECTION TITLE -->
					<div class="row">	
						<div class="col-md-12 section-title center">			

			 				<!-- Title -->
							<h2 class="h2-xs darkblue-color">Ce que disent nos clients</h2>

							<!-- Text -->	
							<p class="p-md">Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat, 
							   felis lacinia risus interdum auctor id viverra dolor iaculis luctus placerat and massa
							</p> 

						</div>
					</div>	 <!-- END SECTION TITLE -->	

					
					<!-- TESTIMONIALS CONTENT -->
					<div class="row">
						<div class="col-md-12">					
							<div class="owl-carousel owl-theme reviews-holder">

						
								<!-- TESTIMONIAL #1 -->
								<div class="review-1">

									<!-- Testimonial Author -->
									<div class="author-data clearfix">
									
										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="" alt="testimonial-avatar">
										</div>

										<!-- Author Data -->
										<div class="review-author">
											<h5 class="h5-sm">Robert</h5>	
											<span>(UK Business Visa)</span>									
										</div>

									</div>	<!-- End Testimonial Author -->	
															
									<!-- Testimonial Text -->
									<p>Sagittis congue etiam sapien at velna accumsan suscipit egestas at lobortis magna, a 
									   porttitor sodales an aenean mauris tempor aenean cubilia blandit porta justo integer  
									   velna vitae auctor integer a congue magna sapien gravida donec ultrice ligula risus					   
									</p>
						
								</div>
						
						
								<!-- TESTIMONIAL #2 -->
								<div class="review-1">

									<!-- Testimonial Author -->
									<div class="author-data clearfix">
									
										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="" alt="testimonial-avatar">
										</div>

										<!-- Author Data -->
										<div class="review-author">
											<h5 class="h5-sm">Evelyn W.</h5>	
											<span>(Canada Studients Visa)</span>										
										</div>

									</div>	<!-- End Testimonial Author -->	
															
									<!-- Testimonial Text -->
									<p>Sapien sem accumsan vitae at purus diam integer congue magna sodales. Magna vitae and aenean 
									   mauris tempor augue in cubilia laoreet magna suscipit magna ipsum vitae purus ipsum primis 
									   cubilia laoreet and augue ultrice ligula egestas magna suscipit lectus gestas at magna viverra 
									   dolor neque gravida				   
									</p>
					
								</div>
						
						
								<!-- TESTIMONIAL #3 -->
								<div class="review-1">

									<!-- Testimonial Author -->
									<div class="author-data clearfix">
									
										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="" alt="testimonial-avatar">
										</div>

										<!-- Author Data -->
										<div class="review-author">
											<h5 class="h5-sm">Leslie Serpas</h5>	
											<span>(Singapore PR Visa)</span>										
										</div>

									</div>	<!-- End Testimonial Author -->	
																									
									<!-- Testimonial Text -->
									<p>Etiam sapien gravida and donec sagittis congue. Augue cubilia laoreet at magna suscipit egestas 
									   magna an ipsum vitae and purus ipsum primis undo cubilia laoreet augue ultrice ligula and egestas 
									   suscipit  magna lectus gestas magna as viverra neque est gravida									   
									</p>															
															
								</div>
								
								
								<!-- TESTIMONIAL #4 -->
								<div class="review-1">

									<!-- Testimonial Author -->
									<div class="author-data clearfix">
									
										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="" alt="testimonial-avatar">
										</div>

										<!-- Author Data -->
										<div class="review-author">
											<h5 class="h5-sm">Dan Hodges</h5>	
											<span>(USA Studients Visa)</span>										
										</div>

									</div>	<!-- End Testimonial Author -->	
																									
									<!-- Testimonial Text -->
									<p>An augue in cubilia laoreet undo magna suscipit egestas magna ipsum egestas vitae purus ipsum
									   primis cubilia laoreet augue ultrice ligula egestas and magna suscipit lectus gestas magna a 
									   viverra dolor neque est gravida								   
									</p>	
						
								</div>
								
								
								<!-- TESTIMONIAL #5 -->
								<div class="review-1">

									<!-- Testimonial Author -->
									<div class="author-data clearfix">
									
										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="" alt="testimonial-avatar">
										</div>

										<!-- Author Data -->
										<div class="review-author">
											<h5 class="h5-sm">Amelie Peterson</h5>	
											<span>(France Working Visa)</span>										
										</div>

									</div>	<!-- End Testimonial Author -->																
																																							
									<!-- Testimonial Text -->
									<p>An orci nullam tempor sapien, gravida donec enim ipsum a porta. An augue in cubilia laoreet 
									   magna suscipit egestas magna ipsum vitae purus ipsum primis in cubilia laoreet augue ultrice 
									   at ligula egestas magna suscipit lectus gestas magna viverra dolor neque est gravida justo 
									   integer and velna auctor					   
									</p>

								</div>
								
								
								<!-- TESTIMONIAL #6 -->
								<div class="review-1">

									<!-- Testimonial Author -->
									<div class="author-data clearfix">
									
										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="" alt="testimonial-avatar">
										</div>

										<!-- Author Data -->
										<div class="review-author">
											<h5 class="h5-sm">Scott Boxer</h5>	
											<span>(Germany Travel Visa)</span>										
										</div>

									</div>	<!-- End Testimonial Author -->	
																									
									<!-- Testimonial Text -->
									<p>An augue cubilia laoreet magna suscipit egestas magna ipsum vitae purus undo ipsum primis 
									   in cubilia laoreet augue ultrice ligula egestas magna at suscipit lectus gestas magna viverra 
									   dolor neque est gravida. Mauris donec ociis magnis sapien etiam sapien sem sagittis		   
									</p>	
						
								</div>
								
								
								<!-- TESTIMONIAL #7 -->
								<div class="review-1">

									<!-- Testimonial Author -->
									<div class="author-data clearfix">
									
										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="" alt="testimonial-avatar">
										</div>

										<!-- Author Data -->
										<div class="review-author">
											<h5 class="h5-sm">Evelyn</h5>	
											<span>(Austrlia PR Visa)</span>										
										</div>

									</div>	<!-- End Testimonial Author -->	
																									
									<!-- Testimonial Text -->
									<p>At sagittis congue augue egestas undo magna ipsum vitae purus ipsum primis in cubilia
									   laoreet augue ociis at nullam tempor sapien gravida porta integer at odio velna auctor. 
									   An augue in cubilia laoreet magna suscipit egestas magna ipsum vitae purus ipsum primis 
									   cubilia laoreet augue ultrice ligula egestas 	 
									</p>	
					
								</div>

							
							</div>
						</div>									
					</div>	<!-- END TESTIMONIALS CONTENT --> 
							
						
				</div>	   <!-- End container -->
			</section>	 <!-- END TESTIMONIALS-1 -->



