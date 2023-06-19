
<?php 

$url = Yii::$app->request->baseUrl."/".md5("visiteur_unicitelibelle");
$csrf =   Yii::$app->request->getCsrfToken() ;
$caseValue =  md5(strtolower('uniciteCat'));


?>





<script type="text/javascript">

	function doSignUp() 
	{

		var button = document.querySelector("#kt_button_1");

		//--- @ --- Initialiser variables ---- @ ---//
		const form = document.getElementById('initierform');

		var index = 1;
		var requiredField = ['name','email','tel','typteEntite'];

		var search = window.location.search;

		var formValidation = false;
		button.setAttribute("data-kt-indicator", "on");

		//--- @ --- Validation champs du formulaire ---- @ ---//
		formValidation = formValidator(index, requiredField);
      	if(formValidation !== true){
			button.removeAttribute("data-kt-indicator");

      		return false;
		}

		//--- @ --- Valider l'email --- # ---//
		if(validerEmail('email') !== true){
			button.removeAttribute("data-kt-indicator");

			return false;
		}


		var email =document.getElementById('email').value;
		
	
		$.post(
			'<?= $url ?>', 

			{_csrf: '<?= $csrf ?>',email:email ,action_key:  '<?=  md5(strtolower('verifiermail')) ?>'},
			function(response)
				{
					if(response){
						 form.submit();
						button.removeAttribute("data-kt-indicator");

						
					}else{
						$('#mainErreurMsg').text('<?= Yii::t("app","emailInvalid")?>');
						$('#miraEmptyMsgPopUp').modal({backdrop: 'static'});
						$('#miraEmptyMsgPopUp').modal('show');
					}
						
				}
			);

			setTimeout(function() {
        button.removeAttribute("data-kt-indicator");
    }, 3000);
		//--- @ --- Soumission du formulaire --- # ---//
		// form.action = '<?= Yii::$app->request->baseUrl."/".md5("site_signup") ?>'+search;

		// $('#factorielsMainForm').submit();

	}

</script>