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
<html lang="<?= Yii::$app->language ?>" class="h-full bg-white">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
     
    <script src="https://jsuites.net/v4/jsuites.js"></script>
  <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
  <script src="https://cdn.jsdelivr.net/npm/@jsuites/cropper/cropper.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@jsuites/cropper/cropper.min.css" type="text/css" />


    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode("ATEX "."| SOLUTION") ?></title>
    
    <?php $this->head() ?>
</head>

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
     <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>

  <?php $this->beginBody() ?>
    
    <?= $this->render('user_component/header.php', ['baseUrl' => $baseUrl]) ?>

    
    <?= $this->render('user_component/content.php', ['content' => $content]) ?>

  <?php $this->endBody() ?>

</body>


</html>
<?php $this->endPage() ?>