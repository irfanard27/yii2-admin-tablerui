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
    <script src="https://unpkg.com/@tabler/core@latest/dist/js/tabler.min.js"></script>

</head>

<body class="layout-fluid h-100 theme-light">
    <?php $this->beginBody() ?>

    <div class="page">
        <?= $this->render("sidebar"); ?>

        <div class="page-wrapper">
            <header>
                <?php
                NavBar::begin([
                    'brandLabel' => Yii::$app->name,
                    'brandUrl' => Yii::$app->homeUrl,
                    'options' => [
                        'class' => 'navbar navbar-expand-md navbar-light bg-light',
                    ],
                ]);
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav'],
                    'items' => [
                        ['label' => 'Home', 'url' => ['/site/index']],
                        ['label' => 'About', 'url' => ['/site/about']],
                        ['label' => 'Contact', 'url' => ['/site/contact']],
                        Yii::$app->user->isGuest ? (['label' => 'Login', 'url' => ['/site/login']]
                        ) : ('<li>'
                            . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                            . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->username . ')',
                                ['class' => 'btn btn-link logout']
                            )
                            . Html::endForm()
                            . '</li>'
                        )
                    ],
                ]);
                NavBar::end();
                ?>
            </header>

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