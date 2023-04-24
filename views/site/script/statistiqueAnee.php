
<?=

$url = Yii::$app->request->baseUrl."/".md5("site_statistiqueans");
$lien =  Yii::$app->request->baseUrl."/".md5("site_statisqueeffectif");
$csrf =   Yii::$app->request->getCsrfToken() ;
?>
<script type="text/javascript">


   $(document).ready(function(){
  
            $("#classe").empty();
            $("#genre").empty();
            $("#niveau ").empty();
          
            $.post(
            '<?= $lien ?>', 
            {_csrf: '<?= $csrf ?>' },
            function(response)
            { 
                console.log(response);
               effectif = response;
             
                   
                content="";
                var entreprise = effectif['PersonnelEntrprise'] 
                    content = content +"<div class='d-flex flex-stack'><div class='d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2'><div class='me-5'><a href='#' class='text-gray-800 fw-bold text-hover-primary fs-6'>"+entreprise[0]+"</a></div><div class='d-flex align-items-center'><span class='text-gray-800 fw-bold fs-4 me-3'>"+entreprise[1]+"</span><div class='m-0'></div></div></div></div><div class='separator separator-dashed my-3'></div>";

                var Partenaire = effectif['Partenaire']
                content = content +"<div class='d-flex flex-stack'><div class='d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2'><div class='me-5'><a href='#' class='text-gray-800 fw-bold text-hover-primary fs-6'>"+Partenaire[0]+"</a></div><div class='d-flex align-items-center'><span class='text-gray-800 fw-bold fs-4 me-3'>"+Partenaire[1]+"</span><div class='m-0'></div></div></div></div><div class='separator separator-dashed my-3'></div>";
                
                var Guest = effectif['Guest']
                content = content +"<div class='d-flex flex-stack'><div class='d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2'><div class='me-5'><a href='#' class='text-gray-800 fw-bold text-hover-primary fs-6'>"+Guest[0]+"</a></div><div class='d-flex align-items-center'><span class='text-gray-800 fw-bold fs-4 me-3'>"+Guest[1]+"</span><div class='m-0'></div></div></div></div><div class='separator separator-dashed my-3'></div>";
                  
                $("#niveau").append(content);
          

                var statistiquePartenaire = effectif['statistiquePartenaire'];
                content="";
                statistiquePartenaire.forEach(element => {
                    content =content + "<div class='d-flex flex-stack'><div class='d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2'><div class='me-5'><a href='#' class='text-gray-800 fw-bold text-hover-primary fs-6'>"+element['raisonSocial']+"</a></div><div class='d-flex align-items-center'><span class='text-gray-800 fw-bold fs-4 me-3'>"+element['nbPersonnel']+"</span><div class='m-0'></div></div></div></div><div class='separator separator-dashed my-3'></div>";
                });
                $("#classe").append(content);
                content="";
                
                content ="<div class='d-flex flex-stack'>	<div class='d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2'><div class='me-5'><a href='#' class='text-gray-800 fw-bold text-hover-primary fs-6'>Garçon</a></div><div class='d-flex align-items-center'><span class='text-gray-800 fw-bold fs-4 me-3'>"+nbgarcon+"</span><div class='m-0'></div>	</div></div>	</div>	<div class='separator separator-dashed my-3'></div>	<div class='d-flex flex-stack'><div class='d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2'><div class='me-5'>	<a href='#' class='text-gray-800 fw-bold text-hover-primary fs-6'>Fille</a>	</div><div class='d-flex align-items-center'><span class='text-gray-800 fw-bold fs-4 me-3'>"+nbfille+"</span><div class='m-0'></div></div></div></div>";
                $("#genre").append(content);

            });

});

</script>