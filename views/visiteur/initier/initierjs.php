
<?php 

$url = Yii::$app->request->baseUrl."/".md5("visiteur_unicitelibelle");
$csrf =   Yii::$app->request->getCsrfToken() ;
$caseValue =  md5(strtolower('uniciteCat'));


?>





<script type="text/javascript">

	function doSignUp() 
	{

		
		//--- @ --- Initialiser variables ---- @ ---//
		const form = document.getElementById('initierform');

		var index = 1;
		var requiredField = ['name','email','tel','typteEntite'];

		var search = window.location.search;

		var formValidation = false;

		//--- @ --- Validation champs du formulaire ---- @ ---//
		formValidation = formValidator(index, requiredField);
      	if(formValidation !== true){
      		return false;
		}

		//--- @ --- Valider l'email --- # ---//
		if(validerEmail('email') !== true){
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
					}else{
						$('#mainErreurMsg').text('<?= Yii::t("app","emailInvalid")?>');
						$('#miraEmptyMsgPopUp').modal({backdrop: 'static'});
						$('#miraEmptyMsgPopUp').modal('show');
					}
						
				}
			);
		//--- @ --- Soumission du formulaire --- # ---//
		// form.action = '<?= Yii::$app->request->baseUrl."/".md5("site_signup") ?>'+search;

		// $('#factorielsMainForm').submit();

	}

</script>