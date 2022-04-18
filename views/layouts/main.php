<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>

    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="https://unpkg.com/@tabler/core@latest/dist/css/tabler.min.css">
    <link rel="stylesheet" href="<?= $this->registerCssFile(Yii::getAlias('@web') . '/css/tabler-icons.css') ?>" />
    <script src="https://unpkg.com/@tabler/core@latest/dist/js/tabler.min.js"></script>

</head>

<body class="layout-fluid h-100 theme-light">
    <?php $this->beginBody() ?>

    <div class="page">
        <?= $this->render("sidebar"); ?>

        <div class="page-wrapper">
            <?= $this->render("header"); ?>

            <main role="main" class="flex-shrink-0 mt-3">
                <div class="container-xl">
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                    <?= Alert::widget() ?>
                    <?= $content ?>
                </div>
            </main>

            <footer class="footer mt-auto py-3 text-muted">
                <div class="container">
                    <p class="float-left">&copy; My Company <?= date('Y') ?></p>
                    <p class="float-right"><?= Yii::powered() ?></p>
                </div>
            </footer>
        </div>
    </div>


    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>