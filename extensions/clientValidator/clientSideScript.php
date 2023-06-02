<script type="text/javascript">
	// var protocol = window.location.protocol;   // Get the protocol (e.g., "http:" or "https:")
	// var host = window.location.host;           // Get the host (e.g., "www.example.com")
	// var path = window.location.pathname;       // Get the path (e.g., "/page.html")
	// var search = window.location.search;       // Get the query string (e.g., "?param=value")
	// var hash = window.location.hash;    

	//--- @ ----- Valider l'email ----- @ ---//
	function validerEmail(inputId) {
		const email = document.getElementById(inputId);
		const regex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
  		const rslt =  regex.test(email.value);

  		if(rslt !== true){
  			$('#mainErreurMsg').text('<?= Yii::t("app","emailAdresseNonValide")?>');
  			$('#miraEmptyMsgPopUp').modal({backdrop: 'static'});
      		$('#miraEmptyMsgPopUp').modal('show');
  		}
  		return rslt;
	}


	//--- @ ----- Afficher les caractères du mot de passe ----- @ ---//
	function afficherPswrd(inputId) {
		var x = document.getElementById(inputId); 
		if (x.type === "password") {
		    x.type = "text";
		} else {
			x.type = "password";
		}
	}

	//--- @ ----- Valider les champs du formulaire ----- @ ---//
	function formValidator(){
		var maxFileSize = <?= Yii::$app->params['maxFileSize'];?>;//GET THE MAXIMUN SIZE OF FILE PREVIOUSLY SET UN THE SYSTEM
		var validStep = true;//INITIATE A RESULT TO TRUE
		var stage = arguments[0];//GET THE FIRST ELEMENT OF THE ARGUMENT
		var arg  = new Array();

		for(var i=1; i< arguments.length;i++){// LOOP BASE ON THE NUMBER OF ARGEUMENT

			if(i == stage){

				for(var j=0;j<arguments[i].length;j++){//LOOP BASE ON EACH ELEMENT OF THE CURRENT ELEMENT

					$("[id="+arguments[i][j]+"]").closest('.form-control').removeClass('is-invalid');

					var sval = $("[id="+arguments[i][j]+"]");
					var type = '';//THIS VARIABLE ILL CONTAINT THE TYPE OF THE INPUT
					
					if($("[id="+arguments[i][j]+"]").is("select")){
						type = 'select';
					}else if($("[id="+arguments[i][j]+"]").is("textarea")){
						type = 'textarea';
					}else{
						type = $("[id="+arguments[i][j]+"]").attr('type');
					}

					switch(type){

						case 'text':
						case 'password':
							if(sval.val()==""){
								$('[id='+arguments[i][j]+']').closest('.form-control').addClass('is-invalid');
								validStep = false;
							}
						break;

						case 'checkbox':
							if(sval.val()!='1'){
								$('[id='+arguments[i][j]+']').closest('.form-control').addClass('is-invalid');
								validStep = false;
							}
						break;

						case 'select':
							if(sval.val() <= '0'){
								$('[id='+arguments[i][j]+']').closest('.form-controlr').addClass("is-invalid");
								validStep = false;
							}
						break;

						case 'textarea':
							if(sval.val()==""){
								$('[id='+arguments[i][j]+']').closest('.form-control').addClass("is-invalid");
								validStep = false;
							}
						break;

						case 'file':
							if(sval.val()==""){
								$('[id='+arguments[i][j]+']').closest('.form-control').addClass("is-invalid");
								validStep = false;
							}else{
									var ext = sval.val().split('.')[1];//GET THE FILE EXTENSION
							    var weight = $('#'+arguments[i][j])[0].files[0].size;//GET THE FILE SIZE IN BYTE
							    weight = weight*0.001;//SIZE IN KB
							    ext = ext.toLowerCase();
							    switch (ext){
							    	case 'jpg':
							    	case 'jpeg':
							    	case 'bmp':
							    	case 'png':
							    		if(weight  > maxFileSize){
							    			$('[id='+arguments[i][j]+']').closest('.form-control').addClass("is-invalid");
											validStep = false;
							    		}
							    	break;

							    	default:
							    		$('[id='+arguments[i][j]+']').closest('.form-control').addClass("is-invalid");
										validStep = false;
							    	break;
							    }
							}
						break;
					}
				}
			}
		}
		if(validStep == false)
		{
			$('#mainErreurMsg').text('<?= Yii::t("app","champsVide")?>');
			$('#miraEmptyMsgPopUp').modal({backdrop: 'static'});
      		$('#miraEmptyMsgPopUp').modal('show');
		}

		return validStep;
	}
</script>
