<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="../style/bootstrap.min.css" rel="stylesheet">
    <link href="../style/datepicker.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700'
    rel='stylesheet' type='text/css'>
    <?php $this->head() ?>
</head>
<body>

    <?php $this->beginBody() ?>
    <div class="container-fluid">
        <div class="row">

            <div id="content" class="col-md-9 col-lg-9 col-sm-9 col-xs-9">
                <div class="navbar header row">
                    <div class="searchbar-action col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <!-- <button type="button" class="btn btn-success">Пошук</button> -->
                        <h2>Пошук:</h2>
                    </div>
                    <div class="searchbar col-lg-9 col-md-9 col-sm-9 col-xs-9">
                        <div class="row">
                            <div class="input-group-sm col-lg-5 col-sm-5 col-md-5 col-xs-5">
                                <input type="text" class="form-control" placeholder="Від...">
                            </div>
                            <div class="btn-group col-lg-1 col-md-1 col-sm-1 col-xs-1"><button class="btn btn-default btn-arrows"><span class="glyphicon glyphicon-transfer"></span></button></div>
                            <div class="input-group-sm col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                <input type="text" class="form-control" placeholder="До...">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group-sm col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                <input type="text" class="form-control" placeholder="ДД/ММ/РРРР">
                            </div>
                            <div class="btn-group col-lg-5 col-md-5 col-sm-5 col-xs-5 col-md-offset-1 col-lg-offset-1">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    Тип поїздки <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Одноразова поїздка</a></li>
                                    <li><a href="#">Періодична поїздка</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?= $content ?>
            </div>
            <div id="sidebar" class="col-md-3 col-lg-3 col-sm-3 col-xs-3">
                <div class="profile">
                    <div class="profile-img"><img src="../imgs/user.jpg" alt="avatar"></div>
                    <div class="profile-name">
                        Іванов Іван
                        <div class="profile-place"><span class="glyphicon glyphicon-map-marker"></span>Івано-Франківськ, Україна</div>
                    </div>
                    <ul class="profile-settings row">
                        <li class="col-md-3 col-lg-3 col-sm-3 col-sm-3 col-xs-3"><span class="glyphicon glyphicon-comment"> <span class="notification-counter">1</span></span></li>
                        <li class="col-md-3 col-lg-3 col-sm-3 col-sm-3 col-xs-3"><span class="glyphicon glyphicon-user"> <span class="notification-counter">3</span></span></li>
                        <li class="col-md-3 col-lg-3 col-sm-3 col-sm-3 col-xs-3"><span class="glyphicon glyphicon-cog"></span></li>
                        <li class="col-md-3 col-lg-3 col-sm-3 col-sm-3 col-xs-3"><span class="glyphicon glyphicon-log-out"></span></li>
                    </ul>
                </div>
                <div class="menu">
                    <ul class="menu-list">
                        <li><span class="glyphicon glyphicon-plus"></span>Створити</li>
                        <li class="active"><span class="glyphicon glyphicon-search"></span>Пошук</li>
                    </ul>
                </div>
                <div class="people">
                    <h3>ЛЮДИ</h3>
                    <div class="people-list">
                        <div class="people-item"><img src="../imgs/user2.jpg" alt="" class="people-img"><span class="people-name">Ім’я Прізвище</span></div>
                        <div class="people-item"><img src="../imgs/user4.jpg" alt="" class="people-img"><span class="people-name">Ім’я Прізвище</span></div>
                        <div class="people-item"><img src="../imgs/user3.jpg" alt="" class="people-img"><span class="people-name">Ім’я Прізвище</span></div>
                        <div class="people-item"><img src="../imgs/user5.jpg" alt="" class="people-img"><span class="people-name">Ім’я Прізвище</span></div>
                    </div>
                </div>
                <div class="history">
                    <h3>СПОВІЩЕННЯ</h3>
                    <div class="history-list">
                        <div class="history-msg ">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, repellat!</p>
                            <p class="history-msg-date">25.06 13:36</p>
                        </div>
                        <div class="history-msg ">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <p class="history-msg-date">25.06 13:36</p>
                        </div>
                        <div class="history-msg ">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quibusdam eos beatae, iste ea officia nobis. Nostrum esse ipsa at.</p>
                            <p class="history-msg-date">25.06 13:36</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
