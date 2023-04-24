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
		<link rel="shortcut icon" href="@web/Mainassets/images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="@web/Mainassets/ images/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="@web/Mainassets/mages/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="120x120" href="@web/Mainassets/images/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="@web/Mainassets/images/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" href="@web/Mainassets/images/apple-touch-icon.png">
		<link rel="icon" href="apple-touch-icon.png" type="image/x-icon">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"> 	
		<link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900&display=swap" rel="stylesheet">

    <?php $this->head() ?>
</head>

 <body>
    <?php $this->beginBody() ?>
        	<!-- PRELOADER SPINNER
		============================================= -->		
		<div id="loader-wrapper">
			<div id="loader"><div class="cssload-box-loading"></div></div>
		</div>

		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">

            <?= $this->render('content/header.php', ['baseUrl' => $baseUrl]) ?>

            <?= $this->render('content/content.php', ['content' => $content]) ?>

            <?= $this->render('content/footer.php', ['baseUrl' => $baseUrl]) ?>


    <?php $this->endBody() ?>
    </body>


</html>
<?php $this->endPage() ?>
