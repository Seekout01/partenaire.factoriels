
<?=

$url = Yii::$app->request->baseUrl."/".md5("site_statistiquesanction");

$csrf =   Yii::$app->request->getCsrfToken() ;
?>
<script type="text/javascript">


   $(document).ready(function(){
    var content = "";
        
            $("#tbdoy").empty();
          
            $.post(
            '<?= $url ?>', 
            {_csrf: '<?= $csrf ?>' },
            function(response)
            {
                if (response != null) {
                    Nbsanction = response['nbsanctionEts'];
                    total =response['totalEncadrer'];
                   Nbsanction.forEach(element => {
                  
                   content = content + "<tr><td><a href='#' class='text-gray-600 fw-bold text-hover-primary mb-1 fs-6'>"+element['libelleSanction']+"</a></td><td class='d-flex align-items-center border-0'><span class='fw-bold text-gray-800 fs-6 me-3'>"+element['nombre']+"</span><div class='progress rounded-start-0'><div class='progress-bar bg-success m-0' role='progressbar' style='height: 12px;width: "+element['nombre']+"px' aria-valuenow='"+element['libelleSanction']+"' aria-valuemin='0' aria-valuemax='"+total+"px'></div></div></td></tr>";
             }); 
                }
              
          
             $("#tbdoy").append(content);
            })
    });

</script>