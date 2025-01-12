<?php
use yii\helpers\Html;
use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>


<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
<?php $this->beginBody() ?>

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-custom.affix navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <!--<a class="navbar-brand page-scroll" href="#page-top">SAIT-2019</a>-->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a href="index.php">HOME</a>
                </li>
                <li>
                    <a href="index.php?r=sait/registration">REGISTRATION</a>
                </li>
                <li>
                    <a href="index.php?r=sait/about">ABOUT</a>
                </li>
                <li>
                    <a href="index.php?r=sait/organization">ORGANIZERS</a>
                </li>
                <li>
                    <a href="index.php?r=sait/abstract">ABSTRACT REQUIREMENTS</a>
                </li>
                <li>
                    <?php if(Yii::$app->user->isGuest) { ?>
                        <a href="index.php?r=sait/login">LOGIN</a>
                    <?php }else{ ?>
                        <a href="index.php?r=sait/profile"><?php echo Yii::$app->user->identity->sait_email; ?></a>
                    <?php } ?>
                </li>
                <li>
                    <?= Html::a('RU',['/sait/change-lang', 'lang' => 'ru']) ?>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<!--<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Школа-семинар молодых ученых<br>
                «Актуальные вопросы теории управления и методов оптимизации»</div>
            <div class="intro-heading">6 июня - 10 июля</div>
            <a href="#services" class="page-scroll btn btn-xl">Принять участие</a>
        </div>
    </div>
</header>

<!-- Services Section -->


<section>
    <div class="container">
        <div class="row">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>
</section>

<?php
/*
<!-- Portfolio Grid Section -->
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Portfolio</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/roundicons.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Информационные сообщения</h4>

                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/startup-framework.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>О конференции</h4>

                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/treehouse.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Условия участия</h4>

                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/golden.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Регистрация</h4>
                    <p class="text-muted">Website Design</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/escape.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Организаторы</h4>
                    <p class="text-muted">Website Design</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/dreams.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Место</h4>
                    <p class="text-muted">Website Design</p>
                </div>
            </div>
        </div>
    </div>
</section>
*/
?>
<!-- Clients Aside -->


<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">CONTACTS</h2>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <table style="color: #fff">
                    <tr style="margin-bottom: 100px">
                        <td style="vertical-align: top"><b style="font-size: 20px">Address:</b></td><td style="padding-left: 30px; padding-bottom: 30px"><span style="font-size: 16px">670000, 24a Smolin st., Ulan-Ude, Russia, Buryat State University, Institute of Mathematics and Informatics, Department of Applied Mathematics and Differential Equations</span></td>
                    </tr>
                    <tr>
                        <td><b style="font-size: 20px">Phones:</b></td><td style="padding-left: 30px"><span style="font-size: 16px">+7(3012) 29-71-60 (ext. 310)</span></td>
                    </tr>
                    <tr>
                        <td></td><td style="padding-left: 30px"><span style="font-size: 16px">+7 (3012) 21-97-57</span></td>
                    </tr>
                    <tr>
                        <td></td><td style="padding-left: 30px"><span style="font-size: 16px">+7 (924) 655-39-41 (Lyubov Alexandrovna Telesheva)</span></td>
                    </tr>
                    <tr>
                        <td></td><td style="padding-left: 30px; padding-bottom: 30px"><span style="font-size: 16px"><span style="font-size: 16px">+7 (9025) 620-620 (Nima Bulatovich Tsyrenzhapov)</span></td>
                    </tr>
                    <tr>
                        <td><b style="font-size: 20px">E-mail:</b></td><td style="padding-left: 30px"><span style="font-size: 16px">pmduconf@yandex.ru</span></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span class="copyright">Institute of Mathematics and Computer Science &copy; Laboratory of System Development <?=date("Y")?> | <?= Html::a('Перейти на русский',['/sait/change-lang', 'lang' => 'ru']) ?></span>
            </div>
        </div>
    </div>
</footer>
<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="js/agency.min.js"></script>
<?php $this->endBody() ?>
</body>

</html>

<?php $this->endPage() ?>