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
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a href="index.php">Главная</a>
                </li>
                <li>
                    <a href="index.php?r=sait/registration">Регистрация</a>
                </li>
                <li>
                    <a href="index.php?r=sait/about">О конференции</a>
                </li>
                <li>
                    <a href="index.php?r=sait/organization">Организаторы</a>
                </li>
                <li>
                    <a href="index.php?r=sait/abstract">Требования к тезисам</a>
                </li>
                <li>
                    <?php if(Yii::$app->user->isGuest) { ?>
                        <a href="index.php?r=sait/login">Вход</a>
                    <?php }else{ ?>
                        <a href="index.php?r=sait/profile"><?php echo Yii::$app->user->identity->sait_email; ?></a>
                    <?php } ?>
                </li>
                <li>
                    <?= Html::a('EN',['/sait/change-lang', 'lang' => 'en']) ?>
                </li>
            </ul>
        </div>
        <!-- <div class="alert alert-warning alert-dismissible show" role="alert">
            <h4 class="text-center">Внимание!</h4>
            <p class="text-center">
                <b style="font-size: 16px">Произошли изменения в выступлениях.</b> Актуальную информацию смотрите в разделе <span style="">"О конференции"</span> или можно скачать по <?= Html::a('ссылке',Yii::$app->request->BaseUrl.'/uploads/'.'sections_work_DEMM_2022_update24082022.docx',['target'=>'_blank', 'class'=>'alert-link']);?>  .
            </p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="position: relative; top:-80px; right: 0; color: inherit">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> -->
    </div>
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-heading">II Международная научная конференция <br>"Дифференциальные уравнения и математическое моделирование" </div>
            <div class="intro-lead-in">посвященная 90-летию БГПИ-БГУ</div>
            <div class="intro-lead-in">22 - 25 августа 2022 г.</div>
            <a href="index.php?r=sait/registration" class="page-scroll btn btn-xl">Принять участие</a>
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
                <h4 class="service-heading">О мероприятии</h4>
                <p class="text-left">Бурятский государственный университет совместно с Новосибирским государственным университетом, Институтом математики им. С.Л. Соболева СО РАН, Восточно-Сибирским государственным университетом технологий и управления, Бурятской государственной сельскохозяйственной академией им. В. Р. Филиппова организует II Международную научную конференцию "Дифференциальные уравнения и математическое моделирование" в г. Улан-Удэ (оз. Байкал, с. Максимиха, база отдыха "Колос") с 22 по 25 августа 2022 года (очно-дистанционное участие).</p>
                <p class="text-left">Организация конференции направлена на развитие интеграции высшего образования и фундаментальной науки, поддержание и продвижение науки в регионах, популяризацию среди молодых ученых исследований в области дифференциальных уравнений и приложений, а также привлечение талантливой молодежи в сферу образования и науки.</p>
                <p class="text-left">Основными задачами конференции ставятся обсуждение современных результатов в области дифференциальных уравнений и приложений, обмен научной информацией, разработка совместных научных проектов и программ, развитие и укрепление связей с ведущими российскими и зарубежными научными центрами, установление личных контактов ученых из России и зарубежья.</p>
                <p class="text-left">В программе семинара планируются пленарные доклады (30-35 минут), секционные (15-20 минут) и стендовые доклады , круглые столы и обсуждение докладов.</p>
            </div>
            <div class="col-md-6">
                <h4 class="service-heading">Основная информация</h4>
                <p class="text-left"><b>Дата проведения: </b>22 - 25 августа 2022 г.<br>
                    <b>Место проведения:</b> Россия, Республика Бурятия, г. Улан-Удэ, оз. Байкал, с. Максимиха, база отдыха "Колос"</b>
                </p>
                <h4 class="service-heading">Организаторы</h4>
                <p class="text-left">ФГБОУ ВО "Бурятский
                    государственный университет имени Доржи Банзарова" (БГУ),<br>
                    ФГБУН Институт математики им. С.Л. Соболева СО РАН,<br>
                    ФГБОУ ВО "Восточно-Сибирский государственный университет технологий и управления" (ВСГУТУ),<br>
                    Бурятская государственная сельскохозяйственная академия им. В.Р. Филиппова (БГСХА)</p>
                <h4 class="service-heading">Информационные сообщения</h4>
                <p class="text-center"><?= Html::a('Первое информационное сообщение',Yii::$app->request->BaseUrl.'/uploads/'.'1_info_ru.docx',['target'=>'_blank']);?></p>
                <p class="text-center"><?= Html::a('Второе информационное сообщение',Yii::$app->request->BaseUrl.'/uploads/'.'2_inform_letter_demm_ru.docx',['target'=>'_blank']);?></p>

            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid Section -->
<!-- <section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Навигация</h2><br>
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
                    <h4>Регистрация</h4>
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
                    <h4>О конференции</h4>
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
                    <h4>Организаторы</h4>
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
                <h2 class="section-heading">Контакты</h2>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <table style="color: #fff">
                    <tr style="margin-bottom: 100px">
                        <td style="vertical-align: top"><b style="font-size: 20px">Адрес:</b></td><td style="padding-left: 30px; padding-bottom: 30px"><span style="font-size: 16px">670000, Улан-Удэ, ул. Смолина 24а, Бурятский государственный университет, Институт
                        математики и информатики, кафедра прикладной математики и дифференциальных уравнений.</span></td>
                    </tr>
                    <tr>
                        <td><b style="font-size: 20px">Телефоны:</b></td><td style="padding-left: 30px"><span style="font-size: 16px">+7(3012) 29-71-60 (доб. 310)</span></td>
                    </tr>
                    <tr>
                        <td></td><td style="padding-left: 30px"><span style="font-size: 16px">+7 (3012) 21-97-57</span></td>
                    </tr>
                    <tr>
                        <td></td><td style="padding-left: 30px"><span style="font-size: 16px">+7 (924) 655-39-41 (Телешева Л.А.)</span></td>
                    </tr>
                    <tr>
                        <td></td><td style="padding-left: 30px; padding-bottom: 30px"><span style="font-size: 16px"><span style="font-size: 16px;">+7 (9025) 620-620 (Цыренжапов Н.Б.)</span></td>
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
                <span class="copyright">Институт математики и информатики &copy; Лаборатория программных систем <?=date("Y")?> | <?= Html::a('EN',['/sait/change-lang', 'lang' => 'en']) ?></span>
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