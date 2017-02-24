<?php
use yii\helpers\Url;
?>
 <div class="blocks-container"> 
        
        <!-- BLOCK "TYPE 1" -->     
        <div class="block type-1 post fadeIn background-block animated" style="background-image: url(&quot;aspect1/img/slide.jpg&quot;);">
            <img class="center-image" src="aspect1/img/slide.jpg" alt="" style="display: none;">
            <div class="main-slider">
                <div class="swiper-container swiper-swiper-unique-id-0 initialized" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1" id="swiper-unique-id-0">
                    <div class="swiper-wrapper" style="width: 6545px; transform: translate3d(-5236px, 0px, 0px); transition-duration: 0.5s; height: 500px;">
                       
                        <?php foreach($sliders as $slider){ 
                            $i=0;
                            if($slider['status']){
                          ?>    

                                <div class="swiper-slide background-block swiper-slide-duplicate" style="background-image: url(&quot;images/sliders/<?= $slider['image_file'] ?>&quot;); width: 1309px; height: 500px;">
                                    <img class="center-image" src="images/sliders/<?= $slider['image_file'] ?>" alt="" style="display: none;">
                                        <div class="container">
                                            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 vertical-align">
                                                    <p class="slide-name"><?= $slider['name']?></p>
                                                    <p class="slide-title"><?= $slider['heading']?></p>
                                                    <p class="slide-text"><?= $slider['caption']?></p>
                                            </div>
                                        </div>
                                </div>
                        <?php
                            }else{
                          ?>
        

                                <div class="swiper-slide background-block" style="background-image: url(&quot;images/sliders/<?= $slider['image_file'] ?>&quot;); width: 1309px; height: 500px;">
                                    <img class="center-image" src="images/sliders/<?= $slider['image_file'] ?>" alt="" style="display: none;">
                                        <div class="container">
                                            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 vertical-align">
                                                <p class="slide-name"><?= $slider['name']?></p>
                                                <p class="slide-title"><?= $slider['heading']?></p>
                                                <p class="slide-text"><?= $slider['caption']?></p>
                                            </div>
                                        </div>
                                </div>
                        <?php    
                            }
                         $i++; 
                        }?>
                    
                    </div><!--Slider images ending-->
                        
                    <div class="container arrows">
                        <div class="slider-arrow left hidden-xs">
                            <img src="aspect1/img/arrow-left.png" alt="">
                        </div>
                        <div class="slider-arrow right hidden-xs">
                            <img src="aspect1/img/arrow-right.png" alt="">
                        </div>
                    </div>

                    <div class="pagination pagination-swiper-unique-id-0">
                        <span class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"></span>
                        <span class="swiper-pagination-switch"></span>
                        <span class="swiper-pagination-switch"></span>
                    </div>
                    
                </div>
            </div>
        </div>
            
            <!-- BLOCK "TYPE 2" -->     
        <div class="block type-2">
 
            <div class="container">
                    <div class="row">
                        <div class="block-header col-xs-12">
                            <div class="block-header-wrapper">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-5 post animated fadeInLeft">
                                        <h2 class="title"><span class="first">Our</span>services</h2>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-7 post animated fadeInRight">
                                        <div class="text">Lorem Ipsum is simply dummy text of the 
                                            printing and typesetting industry. Lorem Ipsum has been the industry's 
                                            standard dummy text ever since the 1500s, when an unknown pri.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row post animated fadeInUp">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                            <img class="img-responsive center-block" src="aspect1/img/law-block.png" alt="">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 icon-blocks">
                            <div class="row">
                                <?php foreach ($services as $service ) {
                                ?>
                                    <div class="col-xs-12 col-sm-6 services">
                                        <img class="icon-service" src="images/services/<?= $service->image_file?>" style="heigth:70px; width:70px" alt="">
                                        <div class="description">
                                            <div class="title"><?= $service->name?></div>
                                            <div class="text"><?= $service->information?></div>
                                        </div>
                                    </div>

                                <?php   
                                }
                                ?>
                            </div>

                            <div class="row text-center">
                                <span class="button"><a href="<?php echo Url::toRoute('site/about');?>">all practice areas</a></span>
                            </div>
                        </div>
                    </div>
                    
            </div>
        </div>    

            
            <!-- BLOCK "TYPE 3" -->     
        <div class="block type-3 background-block" style="background-image: url(&quot;aspect1/img/background-1.jpg&quot;);">
                <img class="center-image" src="aspect1/img/background-1.jpg" alt="" style="display: none;">
                <div class="container">
                    <div class="row">
                        <div class="block-header col-xs-12">
                            <div class="block-header-wrapper">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-5 post fadeInLeft">
                                        <h2 class="title"><span class="first">our win</span>in court</h2>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-7 post fadeInRight">
                                        <div class="text">Lorem Ipsum is that it has a more-or-less 
                                            normal distribution of letters, as opposed to using 'Content here, 
                                            content here', making it look like readable English. Many desktop 
                                            publishing
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row content-block in-court post fadeInUp">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <h3 class="title">Lorem Ipsum is</h3>
                            <p class="text">Lorem Ipsum is simply dummy text of the printing 
                                and typesetting industry. Lorem Ipsum has been the industry's standard 
                                dummy text ever since the 1500s, when an unknown printer took a galley 
                                of type and scrambled it to make a type specimen book. It has survived 
                                not only five centuries, but.</p>
                            <div class="row statistic">
                                <div class="stat-block">
                                    <div class="percent"><span class="counter">48</span>%</div>
                                    <div class="text">Lorem Ipsum is simply dummy text of the prig and typesetting indury. Lorem Ipsum has been</div>
                                </div>
                                <div class="stat-block">
                                    <div class="percent"><span class="counter">48</span>%</div>
                                    <div class="text">Lorem Ipsum is simply dummy text of the prig and typesetting indury. Lorem Ipsum has been</div>
                                </div>
                                <div class="stat-block">
                                    <div class="percent"><span class="counter">48</span>%</div>
                                    <div class="text">Lorem Ipsum is simply dummy text of the prig and typesetting indury. Lorem Ipsum has been</div>
                                </div>                              
                            </div>
                        </div>                      
                        <div class="hidden-xs col-xs-12 col-sm-12 col-md-6">
                            <div class="chart-wrapper">
                                <div class="chart-entry">
                                    <div class="chart">
                                        <div class="overflow-1">
                                            <div class="round-1"></div>
                                            <div class="color-block"></div>
                                            <div class="number">04</div>
                                        </div>
                                        <div class="overflow-2">
                                            <div class="round-2 part-1"></div>
                                            <div class="color-block"></div>
                                            <div class="number">03</div>                                    
                                        </div>
                                        <div class="overflow-2 part-2">
                                            <div class="round-2 part-2"></div>
                                        </div>
                                        <div class="overflow-3">
                                            <div class="round-3 part-1"></div>
                                            <div class="color-block"></div>
                                            <div class="number">02</div>                                    
                                        </div>  
                                        <div class="overflow-3 part-2">
                                            <div class="round-3 part-2"></div>
                                        </div>
                                        <div class="overflow-4 part-1">
                                            <div class="round-4 part-1"></div>
                                            <div class="color-block"></div>
                                            <div class="number">01</div>                                    
                                        </div>
                                        <div class="overflow-4 part-2">
                                            <div class="round-4 part-2"></div>
                                        </div>
                                        <div class="round-center"></div>
                                    </div>
                                </div>
                                <div class="chart-titles">
                                    <p>Lorem Ipsum  is simply</p>
                                    <p>Contrary to popular belief are</p>
                                    <p>There are many variations</p>
                                    <p>passages of Lorem</p>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    
                </div>
        </div>

            <!-- BLOCK "TYPE 4" -->     
        <div class="block type-4">
            <div class="container">
                    <div class="row">
                        <div class="block-header col-xs-12">
                            <div class="block-header-wrapper">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-5 post fadeInLeft">
                                        <h2 class="title"><span class="first">Our</span>Attorneys</h2>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-7 post fadeInRight">
                                        <div class="text">Lorem Ipsum is simply dummy text of the 
                                            printing and typesetting industry. Lorem Ipsum has been the industry's 
                                            standard dummy text ever since the 1500s, when an unknown pri.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row team">
                        <?php foreach($attorneys as $attorney){ 
                            
                            
                        ?>
                        <div class="icon-entry col-sm-6 col-md-3 post fadeInLeft">
                            <img class="corner-rounding" src="images/attorneys/<?= $attorney->image_file ?>" alt="">
                            <div class="content">
                                <div class="information">
                                    <h3 class="name"><?= $attorney->name ?></h3>
                                    <div class="job"><?= $attorney->designation ?></div>
                                </div>
                                <div class="text">
                                    <?= $attorney->about_me ?>
                                </div>
                                <div class="social-block">
                                    <a href="#"><img src="aspect1/img/info-facebook.png" alt=""></a>
                                    <a href="#"><img src="aspect1/img/info-twitter.png" alt=""></a>
                                    <a href="#"><img src="aspect1/img/info-in.png" alt=""></a>                                      
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>

                    <div class="row text-center">
                        <span class="button"><a href="<?php echo Url::toRoute('team/index');?>">all Attorneys</a></span>
                    </div>                  
                    
                </div>
        </div>

            <!-- BLOCK "TYPE 5" -->     
        <div class="block type-5 background-block" style="background-image: url(&quot;aspect1/img/background-2.jpg&quot;);">
            <img class="center-image" src="aspect1/img/background-2.jpg" alt="" style="display: none;">
            <div class="container">
                    <div class="row">
                        <div class="block-header col-xs-12">
                            <div class="block-header-wrapper">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-5 post fadeInLeft">
                                        <h2 class="title"><span class="first">our</span>clients</h2>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-7 post fadeInRight">
                                        <div class="text">Lorem Ipsum is that it has a more-or-less 
                                            normal distribution of letters, as opposed to using 'Content here, 
                                            content here', making it look like readable English. Many desktop 
                                            publishing
                                        </div>
                                    </div>
                                </div>
                                <div class="block-header-border"></div>
                            </div>
                        </div>
                    </div>

                <div class="clients-wrapper post fadeInDown">
                    <div class="swiper-container swiper-swiper-unique-id-1 initialized" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="2" data-sm-slides="4" data-md-slides="4" data-lg-slides="6" id="swiper-unique-id-1">
                        <div class="swiper-wrapper" style="width: 2660px; height: 92px;">
                            
                            <div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 190px; height: 92px;">
                                <div class="clients-entry">
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-1.png" alt=""></a>
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-7.png" alt=""></a>                                        
                                </div>
                            </div>

                            <div class="swiper-slide" style="width: 190px; height: 92px;">
                                <div class="clients-entry">
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-2.png" alt=""></a>
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-8.png" alt=""></a>                                        
                                </div>
                            </div>

                            <div class="swiper-slide" style="width: 190px; height: 92px;"> 
                                <div class="clients-entry">
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-3.png" alt=""></a>
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-9.png" alt=""></a>                                        
                                </div>
                            </div>

                            <div class="swiper-slide" style="width: 190px; height: 92px;">
                                <div class="clients-entry">
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-4.png" alt=""></a>
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-10.png" alt=""></a>                                   
                                </div>
                            </div>

                            <div class="swiper-slide" style="width: 190px; height: 92px;">
                                <div class="clients-entry">
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-4.png" alt=""></a>
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-10.png" alt=""></a>                                   
                                </div>
                            </div>

                            <div class="swiper-slide" style="width: 190px; height: 92px;">
                                <div class="clients-entry">
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-5.png" alt=""></a>
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-11.png" alt=""></a>                                   
                                </div>
                            </div>

                            <div class="swiper-slide" style="width: 190px; height: 92px;">
                                <div class="clients-entry">
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-6.png" alt=""></a>
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-12.png" alt=""></a>                                   
                                </div>
                            </div>

                            <div class="swiper-slide" style="width: 190px; height: 92px;">
                                <div class="clients-entry">
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-1.png" alt=""></a>
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-7.png" alt=""></a>                                        
                                </div>
                            </div>

                            <div class="swiper-slide" style="width: 190px; height: 92px;">
                                <div class="clients-entry">
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-2.png" alt=""></a>
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-8.png" alt=""></a>                                        
                                </div>
                            </div>

                            <div class="swiper-slide" style="width: 190px; height: 92px;"> 
                                <div class="clients-entry">
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-3.png" alt=""></a>
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-9.png" alt=""></a>                                        
                                </div>
                            </div>

                            <div class="swiper-slide" style="width: 190px; height: 92px;">
                                <div class="clients-entry">
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-4.png" alt=""></a>
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-10.png" alt=""></a>                                   
                                </div>
                            </div>

                            <div class="swiper-slide" style="width: 190px; height: 92px;">
                                <div class="clients-entry">
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-4.png" alt=""></a>
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-10.png" alt=""></a>                                   
                                </div>
                            </div>

                            <div class="swiper-slide" style="width: 190px; height: 92px;">
                                <div class="clients-entry">
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-5.png" alt=""></a>
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-11.png" alt=""></a>                                   
                                </div>
                            </div>

                            <div class="swiper-slide" style="width: 190px; height: 92px;">
                                <div class="clients-entry">
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-6.png" alt=""></a>
                                    <a href="#"><img class="img-responsive" src="aspect1/img/logo-12.png" alt=""></a>                               
                                </div>
                            </div>

                        </div>
                        
                        <div class="pagination pagination-swiper-unique-id-1">
                            <span class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"></span>
                            <span class="swiper-pagination-switch"></span>
                            <span class="swiper-pagination-switch"></span>
                            <span class="swiper-pagination-switch"></span>
                            <span class="swiper-pagination-switch"></span>
                            <span class="swiper-pagination-switch"></span>
                            <span class="swiper-pagination-switch"></span>
                            <span class="swiper-pagination-switch"></span>
                            <span class="swiper-pagination-switch"></span>
                            <span class="swiper-pagination-switch"></span>
                            <span class="swiper-pagination-switch"></span>
                            <span class="swiper-pagination-switch"></span>
                            <span class="swiper-pagination-switch"></span>
                            <span class="swiper-pagination-switch"></span>
                        </div>                         
                    </div>
                    <div class="arrows">
                        <div class="clients-arrow left"><img src="aspect1/img/carusel-left.png" alt=""></div>
                        <div class="clients-arrow right"><img src="aspect1/img/carusel-right.png" alt=""></div>
                    </div>                          
                </div>
                
            </div>
        </div>

            <!-- BLOCK "TYPE 6" -->     
            
        <div class="block type-6">
                <div class="container">
                    <div class="row">
                        <div class="block-header col-xs-12">
                            <div class="block-header-wrapper">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 post fadeInLeft">
                                        <h2 class="title"><span class="first">our clients</span>testimonials</h2>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-7 post fadeInRight">
                                        <div class="text">Lorem Ipsum is simply dummy text of the 
                                            printing and typesetting industry. Lorem Ipsum has been the industry's 
                                            standard dummy text ever since the 1500s, when an unknown pri.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonials-wrapper post fadeInUp">
                        <div class="swiper-container swiper-swiper-unique-id-2 initialized" data-autoplay="0" data-loop="0" data-speed="500" data-slides-per-group="2" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="2" id="swiper-unique-id-2">
                            <div class="swiper-wrapper" style="width: 3420px; height: 94px;">
                               <?php 
                                     $i=1;
                                foreach ($testimonials as $testimonial) 
                                {
                                
                                    if($i%2==0)
                                    {
                                        $first="";
                                        $class="text-left";
                                    }else{

                                            $class="text-right";
                                            if($i==1)
                                            {
                                                $first="swiper-slide-visible swiper-slide-active";         
                                            }
                                            else{
                                             $first="";   
                                            }
                                        }
                                    
                                    ?>
                                        <div class="swiper-slide <?= $first ?>" style="width: 570px; height: 94px;">
                                            <div class="row">
                                                <div class="col-xs-11">                                 
                                                    <div class="testimonials-entry <?= $class ?>">
                                                        <img src="images/testimonials/<?= $testimonial->image_file; ?>" style=" height:94px ;width:94px"alt="">
                                                        <div class="content">
                                                            <div class="name"><?= $testimonial->author; ?></div>
                                                            <div class="job"><?= $testimonial->designation." - ".$testimonial->organisation;?></span></div>
                                                            <div class="text">
                                                                <?= $testimonial->content;?>                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                  
                                        </div>                                   
                                <?php
                                $i=$i+1;
                               } 
                               ?>
                              

                            </div>
                            <div class="pagination pagination-swiper-unique-id-2">
                                <span class="swiper-pagination-switch swiper-visible-switch swiper-active-switch">
                                </span>
                                <span class="swiper-pagination-switch"></span>
                                <span class="swiper-pagination-switch"></span>
                                <span class="swiper-pagination-switch"></span>
                                <span class="swiper-pagination-switch"></span>
                                <span class="swiper-pagination-switch"></span>
                            </div>                         
                        </div>
                        <div class="arrows">
                            <div class="testimonials-arrow left"></div>
                            <div class="testimonials-arrow right"></div>
                        </div>                          
                    </div>                  
                
                    
                </div>
        </div>

            <!-- BLOCK "TYPE 3" -->     
            <div class="block type-3 background-block" style="background-image: url(&quot;aspect1/img/background-3.jpg&quot;);">
                <img class="center-image" src="aspect1/img/background-3.jpg" alt="" style="display: none;">
                <div class="container">

                    <div class="row">
                        <div class="block-header col-xs-12">
                            <div class="block-header-wrapper">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-5 post fadeInLeft">
                                        <h2 class="title"><span class="first">our</span>benefits</h2>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-7 post fadeInRight">
                                        <div class="text">Lorem Ipsum is that it has a more-or-less 
                                            normal distribution of letters, as opposed to using 'Content here, 
                                            content here', making it look like readable English. Many desktop 
                                            publishing
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row content-block post fadeInUp">
                        
                        <div class="col-xs-12 col-sm-6">
                            <h3 class="title">many variations of passages</h3>
                            <div class="text">
                                <p>Lorem Ipsum is simply All the Lorem Ipsum generators on the 
                                    Internet tend to repeat predefined chunks as necessary, making this the 
                                    first true generator on the Internet. It uses a dictionary of over 200 
                                    Latin
                                </p>
                                <ul>
                                    <li>All the Lorem Ipsum generators on the Internet tend to repeat predefin chunks as necessar;</li>
                                    <li>Making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words;</li>
                                    <li>Lorem Ipsum which looks reasonable;</li>
                                    <li>The generated Lorem Ipsum is;</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <h3 class="title">many variations of passages</h3>
                            <div class="text">
                                <p>Lorem Ipsum is simply All the Lorem Ipsum generators on the 
                                Internet tend to repeat predefined chunks as necessary, making this the 
                                first true generator on the Internet. It uses a dictionary of over 200 
                                Latin. If you are going to use a passage of Lorem Ipsum, you need to be 
                                sure there isn't anything embarrassing hidden in the middle of text.</p>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat
                                 predefined chunks as necessary, making this the first true generator on
                                 the Internet. It uses a dictionary of over 200 Latin words, combined 
                                with a handful of model sentence structures, to generate Lorem Ipsum 
                                which looks reasonable. The generated Lorem Ipsum is therefore always 
                                free from repetition</p>
                            </div>                      
                        </div>

                    </div>
                    
                </div>
            </div>


            <div class="block type-8">
                <div class="container">

                    <div class="row">
                        <div class="block-header col-xs-12">
                            <div class="block-header-wrapper">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-5 post fadeInLeft">
                                        <h2 class="title"><span class="first">our last</span>blog post</h2>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-7 post fadeInRight">
                                        <div class="text">Lorem Ipsum is simply dummy text of the 
                                            printing and typesetting industry. Lorem Ipsum has been the industry's 
                                            standard dummy text ever since the 1500s, when an unknown pri.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-wrapper post fadeInUp">
                        <div class="swiper-container swiper-swiper-unique-id-3 initialized" data-autoplay="0" data-loop="0" data-speed="500" data-slides-per-group="2" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="2" id="swiper-unique-id-3">
                            <div class="swiper-wrapper" style="width: 2280px; height: 400px;">
                                
                               <?php 
                                     $i=1;

                                    // print_r($blogs);exit;
                                foreach ($blogs as $blog) 
                                {
                                
                                    if($i%2==0)
                                    {
                                        $first="";
                                        $class="right";
                                        $offset="col-sm-offset-0 col-md-8";
                                    }else{

                                            $class="left";
                                            $offset="col-sm-offset-3 col-md-8 col-md-offset-4";
                                            if($i==1)
                                            {
                                                $first="swiper-slide-visible swiper-slide-active";         
                                            }
                                            else{
                                                
                                             $first="";   
                                            }
                                        }
                                    
                                    ?>
                                    <div class="swiper-slide <?php echo $first; ?>" style="width: 570px; height: 400px;">
                                        <div class="row">
                                            <div class="col-xs-10 col-xs-offset-1 col-sm-9 <?php echo $offset; ?>">
                                                <div class="blog-post <?php echo $class; ?>">
                                                    <img class="corner-rounding" src="images/blogs/<?php echo $blog->image_file; ?>" style="height:210px; width:368px;" alt="">
                                                    <div class="content">
                                                        <div class="title"><?php echo $blog->title?></div>
                                                        <div class="text"><?php echo $blog->content?></div>
                                                        <div class="meta-entry clearfix">
                                                            <div class="date"><?php echo $blog->created_at; ?></div>
                                                            <!-- <div class="comments">0 Comments</div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                  
                                    </div>                                  
                                <?php
                                $i=$i+1;
                               } 
                               ?>     

                                                      

                            
                            </div>
                            <div class="pagination pagination-swiper-unique-id-3">
                                <span class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"></span>
                                <span class="swiper-pagination-switch"></span>
                                <span class="swiper-pagination-switch"></span>
                                <span class="swiper-pagination-switch"></span>
                            </div>                         
                        </div>
                        <div class="arrows">
                            <div class="left"></div>
                            <div class="right"></div>
                        </div>                          
                    </div>                  
                
                    
                </div>
     </div>

            <!-- BLOCK "TYPE 8" -->     
                      
            
        </div>
    
    
   