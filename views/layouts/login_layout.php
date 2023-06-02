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
    <link href='https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700' rel='stylesheet'>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode("ATEX "."| SOLUTION") ?></title>
    
    <?php $this->head() ?>
</head>

<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
    <!--begin::Theme mode setup on page load-->
    <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
    <!--end::Theme mode setup on page load-->

  <!-- Appliquer la police montserrat -->

  
  <?php $this->beginBody() ?>
  
  <?= $this->render('main_component/content.php', ['content' => $content]) ?>

  <?php $this->endBody() ?>
</body>


</html>
<?php $this->endPage() ?>
