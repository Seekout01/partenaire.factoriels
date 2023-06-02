<section id="contacts-1" class="wide-60 contacts-section division">
					<div class="container">
					 	<div class="row">


					 		<!-- LOCATION -->
							<div class="col-sm-6 col-lg-3">
								<div class="contact-box icon-xs">
									<div class="contact-box-icon"><span class="flaticon-240-placeholder"></span></div>
									<h5 class="h5-sm deepblue-color">Notre emplacement</h5>														
									<p class="grey-color">Conakry, CObayah carefour fall</p>
								</div>
							</div>


							<!-- PHONES -->
							<div class="col-sm-6 col-lg-3">
								<div class="contact-box icon-xs">
									<div class="contact-box-icon"><span class="flaticon-172-telephone-1"></span></div>
									<h5 class="h5-sm deepblue-color">Parlons</h5>	
									<p class="grey-color">Phone : +224 611 885 050</p>
								</div>
							</div>


							<!-- EMAIL -->
							<div class="col-sm-6 col-lg-3">
								<div class="contact-box icon-xs">
									<div class="contact-box-icon"><span class="flaticon-235-mail"></span></div>
									<h5 class="h5-sm deepblue-color">Email</h5>	
									<p class="grey-color"><a href="mailto:bonjour@factoriels.com">bonjour@factoriels.com</a></p>
								</div>
							</div>


							<!-- WORKING HOURS -->
							<div class="col-sm-6 col-lg-3">
								<div class="contact-box icon-xs">
									<div class="contact-box-icon"><span class="flaticon-358-wall-clock-1"></span></div>
									<h5 class="h5-sm deepblue-color">Heures de Travail</h5>	
									<p class="grey-color">Lun - vend: 8:30am - 7:30pm</p>
								</div>
							</div>


					 	</div>	  <!-- End row -->
					</div>	   <!-- End container -->	
				</section>

                <section id="contacts-3" class="bg-lightgrey bg-tra-city wide-80 contacts-section division">
					<div class="container">


						<!-- SECTION TITLE -->
						<div class="row">	
							<div class="col-md-12 section-title center">		

				 				<!-- Title -->
								<h2 class="h2-xs">Vous avez une question ? entrer en contact</h2>

								<!-- Text -->	
								<p class="p-md">Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat, 
								   felis lacinia risus interdum auctor id viverra dolor iaculis luctus placerat and massa
								</p>

							</div>
						</div>	 <!-- END SECTION TITLE -->	


						<!-- CONTACT FORM -->	
					 	<div class="row">
					 		<div class="col-lg-10 offset-lg-1">
					 			<div class="form-holder">
					 				<form name="contactForm" method="post" class="row contact-form"  action ="<?=yii::$app->request->baseUrl.'/'.md5('visiteur_contact') ?>" novalidate="novalidate">
 
                                        <input type="hidden" name="_csrf" id="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>"/>

						                <!-- Contact Form Input -->
						                <div id="input-name" class="col-lg-6">
						                	<input type="text" name="name" class="form-control name" placeholder="Votre nom*" required=""> 
						                </div>
						                 
						                <!-- Contact Form Input -->        
						                <div id="input-email" class="col-lg-6">
						                	<input type="text" name="email" class="form-control email" placeholder="Votre email*" required=""> 
						                </div>	

						                <!-- Contact Form Select -->
						                <div id="input-subject" class="col-lg-12 input-subject">
						                    <select id="inlineFormCustomSelect2" name="subject" class="custom-select subject" required="">
						                        <option value="" hidden>Votre Question sur..</option>  
												<option value="1" >Optimison</option>  
												<option value="2" >Santeyah</option>  
												<option value="1" >Daara</option>  
												<option value="2" >Atext</option>  
						                    </select>
						                </div>			                          
						                 
						                 <!-- Contact Form Mesaage -->        
						                <div id="input-message" class="col-lg-12 input-message">
						                	<textarea class="form-control message" name="message" rows="6" placeholder="Votre message ..." required=""></textarea>
						                </div> 
						                                            
						                <!-- Contact Form Button -->
						                <div class="col-lg-12 mt-15 form-btn text-right"> 
						                	<button type="submit" class="btn btn-primary tra-black-hover submit">Envoyer Votre Message</button> 
						                </div>
						                                                              
						                <!-- Contact Form Message -->
						                <div class="col-lg-12 contact-form-msg text-center">
						                	<div class="sending-msg"><span class="loading"></span></div>
						                </div>  
					                                              
					                </form> 
					 			</div>	
					 		</div>	
					 	</div>  <!-- END CONTACT FORM -->	


					</div>	   <!-- End container -->
				</section>