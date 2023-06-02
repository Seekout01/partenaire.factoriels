<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\MainAsset;

/**
 * @author Factoriels Sarl
 * @since 1.0
**/

$asset = MainAsset::register($this);
$baseUrl = $asset->baseUrl;

$this->beginPage() 
?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" >

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700' rel='stylesheet'>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode("MiRA "."| SOLUTION") ?></title>
    	<!-- FAVICON AND TOUCH ICONS  -->
		
		<!-- GOOGLE FONTS -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <!-- MDB -->

  

  <?php
        //Charger quelques elements de validation
        require_once(\Yii::$app->basePath.'/extensions/clientValidator/clientSideScript.php');
        require_once(\Yii::$app->basePath.'/extensions/msg/popupMsg.php');
    ?>
    
    <?php $this->head() ?>
</head>

 	<!--begin::Body-->
     <body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
    		<!--begin::Theme mode setup on page load-->
	
    <?php $this->beginBody() ?>
    <?= $this->render('content/header.php', ['baseUrl' => $baseUrl]) ?>
	<?= $this->render('content/content.php', ['content' => $content]) ?>
	<?= $this->render('content/footer.php', ['baseUrl' => $baseUrl]) ?>

    <?php $this->endBody() ?>
</body>


</html>
<?php $this->endPage() ?>
