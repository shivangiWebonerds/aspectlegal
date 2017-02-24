<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\models\Sites;
use yii\helpers\Url;
AppAsset::register($this);
?>
<?php $this->beginPage()?>
<?php
    //$model=new Sites();
    $model=Sites::find()->one();
    //echo "<pre>"; print_r($model);exit;
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
     <meta http-equiv="content-type" content="text/html; charset=UTF-8">
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title><?= $model->branding; ?></title>

    <?php $this->head() ?>
</head>
<body class="header-moved loaded">
<?php $this->beginBody() ?>

 
    <!-- LOADER -->
    <div id="loader-wrapper" style="display: none;">
        <div class="loader-content">
            <img src="aspect1/img/loader.gif" alt="">
            <div class="title">Loading</div>
        </div>
    </div>

    <header class="fixed-top">
        <div class="top-line hidden-xs">
            <div class="container">
                <div class="contact">
                    <span><img src="aspect1/img/email.png" alt=""><a href="mailto:e-mail@MyLawyer.com"><?= $model->contact_email; ?></a></span>
                    <span><img src="aspect1/img/phone.png" alt=""><a href="tel:5233857090"><?= $model->contact_number; ?></a></span>
                </div>
                <div class="social">
                    <a href="<?= $model->facebook_link; ?>"><img src="aspect1/img/facebook.png" alt=""></a>
                    <a href="<?= $model->twitter_link; ?>"><img src="aspect1/img/twitter.png" alt=""></a>
                    <a href="<?= $model->google_link; ?>"><img src="aspect1/img/google-plus.png" alt=""></a>
                    <a href="<?= $model->youtube_link; ?>"><img src="aspect1/img/youtube.png" alt=""></a>                  
                    <a href="<?= $model->linkedin_link; ?>"><img src="aspect1/img/linked-in.png" alt=""></a>
                    <a href="#"><img src="aspect1/img/pinterest.png" alt=""></a>
                </div>
            </div>
        </div>
        <nav>
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a id="logo" class="clearfix" href="index.php"><img src="images/sites/<?= $model->logo_image; ?>" style="height:51px; width:60px;" alt=""><p class="name"><?= $model->branding; ?></p></a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="<?php echo Url::toRoute('site/index');?>">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="<?php echo Url::toRoute('site/about');?>">All Pages<span class="closed"></span></a>
                    <ul role="menu">
                        <li><a href="<?php echo Url::toRoute('site/index');?>">Home</a></li>
                        <li><a href="<?php echo Url::toRoute('team/index');?>">Our Attorneys</a></li>
                        <li><a href="<?php echo Url::toRoute('blogs/index');?>">Blog</a></li>                        
                        <li><a href="<?php echo Url::toRoute('site/contact');?>">Contact us</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo Url::toRoute('site/about');?>">About US</a></li>
                <li><a href="<?php echo Url::toRoute('team/index');?>">Our Attorneys</a></li>
                <li><a href="<?php echo Url::toRoute('site/contact');?>">Get in Touch</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>  
    </header>
    
    
        
    <div id="content-wrapper">
            <?= $content ?>
    </div>      
            
    
   <footer class="background-block" style="background-image: url(&quot;aspect1/img/background-4.jpg&quot;);">
        <img class="center-image" src="aspect1/img/background-4.jpg" alt="" style="display: none;"> 
        <div class="container">
            <div class="row">
                <div class="footer-entry col-xs-12 col-sm-6 col-md-3">
                    <h3 class="title">company address</h3>
                    <div class="address">
                        <p>Burnaby, BC V5G 1M4 4990 </p>
                        <p>Canada Way</p>
                    </div>
                    <img class="img-responsive" src="aspect1/img/map.png" alt="">
                </div>
                <div class="footer-entry col-xs-12 col-sm-6 col-md-3">
                    <h3 class="title">Company information</h3>
                    <div class="text row">
                        <div class="col-xs-6">
                            <ul class="list-styled">
                                <li><a href="<?php echo Url::toRoute('site/index');?>">Home</a></li>  
                                <li><a href="<?php echo Url::toRoute('site/about');?>">About us</a></li>
                                <li><a href="<?php echo Url::toRoute('team/index');?>">Attorneys</a></li>
                                <li><a href="<?php echo Url::toRoute('services/index');?>">Services</a></li>
                                <!-- <li><a href="<?php //echo Url::toRoute('site/about');?>">For Business</a></li> -->
                                <li><a href="<?php echo Url::toRoute('blogs/index');?>">Blog</a></li>
                                <li><a href="<?php echo Url::toRoute('site/contact');?>">Contact us</a></li>
                            </ul>                       
                        </div>
                        <div class="col-xs-6">
                            <ul class="list-styled">
                                <li><a href="<?php echo Url::toRoute('site/index');?>">Home</a></li>  
                                <li><a href="<?php echo Url::toRoute('site/about');?>">About us</a></li>
                                <li><a href="<?php echo Url::toRoute('team/index');?>">Attorneys</a></li>
                                <li><a href="<?php echo Url::toRoute('services/index');?>">Services</a></li>
                                <!-- <li><a href="<?php //echo Url::toRoute('site/about');?>">For Business</a></li> -->
                                <li><a href="<?php echo Url::toRoute('blogs/index');?>">Blog</a></li>
                                <li><a href="<?php echo Url::toRoute('site/contact');?>">Contact us</a></li>
                            </ul>                       
                        </div>
                    </div>
                </div>
                <div class="footer-entry col-xs-12 col-sm-6 col-md-3">
                    <h3 class="title">Latest from our blog</h3>
                    <div class="blog-latest clearfix">
                        <img src="aspect1/img/blog-latest-1.png" alt="">
                        <div class="title"><a href="blog.php">Content Builder for posts</a></div>
                        <div class="date">October 3, 2014</div>
                    </div>
                    <div class="blog-latest clearfix">
                        <img src="aspect1/img/blog-latest-2.png" alt="">
                        <div class="title"><a href="blog.php">Lorem Ipsum is simply dummy text of printing</a></div>
                        <div class="date">October 3, 2014</div>
                    </div>          
                    <div class="blog-latest clearfix">
                        <img src="aspect1/img/blog-latest-3.png" alt="">
                        <div class="title"><a href="blog.php">Lorem Ipsum is that it has a more-or-less</a></div>
                        <div class="date">October 3, 2014</div>
                    </div>                          
                </div>
                <div class="footer-entry col-xs-12 col-sm-6 col-md-3">
                    <h3 class="title">Subscribe newsletter</h3>
                    <div class="text">
                        Lorem Ipsum is simply dummy text of the printing and typese industry.
                    </div>
                    <form>
                         <input placeholder="Your email address ..." type="email">
                         <button type="submit"></button>
                    </form>
                    
                    <h3 class="title">Follow us</h3>
                    <div class="social">
                        <a href="<?= $model->facebook_link; ?>"><img src="aspect1/img/facebook.png" alt=""></a>
                        <a href="<?= $model->twitter_link; ?>"><img src="aspect1/img/twitter.png" alt=""></a>
                        <a href="<?= $model->linkedin_link; ?>"><img src="aspect1/img/linked-in.png" alt=""></a>
                        <a href="<?= $model->google_link; ?>"><img src="aspect1/img/google-plus.png" alt=""></a>
                        <a href="<?= $model->youtube_link; ?>"><img src="aspect1/img/youtube.png" alt=""></a>
                        <a href="#"><img src="aspect1/img/pinterest.png" alt=""></a>
                    </div>                  
                </div>              
            </div>
        </div>
    </footer>

<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647;"></a>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
