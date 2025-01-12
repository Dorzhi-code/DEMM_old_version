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

<body id="page-top" >
<?php $this->beginBody() ?>

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
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
    </div>
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-heading">II International Conference <br> "DIFFERENTIAL EQUATIONS AND MATHEMATICAL MODELING" </div>
            <div class="intro-lead-in">dedicated to the 90th anniversary of BSPI – BSU</div>
            <div class="intro-lead-in">August 22-25, 2022</div>
            <a href="index.php?r=sait/registration" class="page-scroll btn btn-xl">Take part</a>
        </div>
    </div>
</header>

<!-- Services Section -->
<section id="services">
    <div class="container">
        <!-- <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="section-heading">Международный семинар «Дифференциально-алгебраические и интегро-алгебраические
                    системы уравнений: численные методы и приложения к задачам управления»</h3>
            </div>
        </div> -->
        <div class="row text-center">
            <div class="col-md-6">
                <h4 class="service-heading">About conference</h4>
                <p class="text-left">Buryat State University in cooperation with Novosibirsk State University, Sobolev Institute of Mathematics SB RAS, East Siberian State University of Technology and Management, Buryat State Agricultural Academy named after V.R. Filippov is organizing the II International Conference "Differential Equations and Mathematical Modeling" in the city of Ulan-Ude (Lake Baikal, Maksimikha village, recreation center "Kolos") from August 22 to 25, 2022 (in-person or online participation).</p>
                <p class="text-left">The organization of the conference is aimed at developing the integration of higher education and fundamental science, maintaining and promoting science in the regions, popularizing research in the field of differential equations and applications among young scientists, as well as attracting talented youth to the field of education and science.</p>
                <p class="text-left">The main objectives of the conference are the discussion of modern results in the field of differential equations and applications, the exchange of scientific information, the development of joint scientific projects and programs, the development and strengthening of relations with leading Russian and foreign research centers, the establishment of personal contacts between scientists from Russia and abroad.</p>
                <p class="text-left">The conference program includes plenary reports (30-35 minutes), sectional (15-20 minutes) and poster reports, round tables and discussion of reports.</p>
            </div>
            <div class="col-md-6">
                <h4 class="service-heading">General information</h4>
                <p class="text-left"><b>Dates of the conference: </b>August 22-25, 2022<br>
                    <b>Location of the conference:</b> Russia, Republic of Buryatia, Ulan-Ude, Lake Baikal, Maksimikha village, recreation center "Kolos"</b>
                </p>
                <h4 class="service-heading">Organizators</h4>
                <p class="text-left">Buryat State University named after Dorzhi Banzarov (BSU),<br>
                Sobolev Institute of Mathematics SB RAS,<br>
                East Siberian State University of Technology and Management (ESSUTM)<br>
                Buryat State Agricultural Academy named after V.R. Filippov (BSAA)</p>
                <h4 class="service-heading">Information letters</h4>
                <p class="text-center"><?= Html::a('First information letter',Yii::$app->request->BaseUrl.'/uploads/'.'1_info_en.docx',['target'=>'_blank']);?></p>
                <p class="text-center"><?= Html::a('Second information letter',Yii::$app->request->BaseUrl.'/uploads/'.'2_inform_letter_demm_en.docx',['target'=>'_blank']);?></p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid Section -->
<!-- <section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">NAVIGATION</h2><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="index.php?r=sait/registration" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/roundicons.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Registration</h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="index.php?r=sait/about" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/startup-framework.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>About the conference</h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="index.php?r=sait/organization" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/treehouse.png"  class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>The organizers</h4>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contacts</h2>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <table style="color: #fff">
                    <tr style="margin-bottom: 100px">
                        <td style="vertical-align: top"><b style="font-size: 20px">Address:</b></td><td style="padding-left: 30px; padding-bottom: 30px"><span style="font-size: 16px">670000, Ulan-Ude, Smolina st. 24a, Buryat State University, Institute of Mathematics and Informatics, Department of Applied Mathematics and Differential Equations</span></td>
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