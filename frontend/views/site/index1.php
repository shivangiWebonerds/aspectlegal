<?php
use yii\helpers\Url;
?>
<div class="blocks-container">
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
    <!--Block services-->        
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
                                    <img class="icon-service" src="images/services/<?= $service->image_file?>" alt="">
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
                            <span class="button"><a href="about-us.php">all practice areas</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <!--Block attorneys-->    
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
                                <span class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"></span>
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
                                <div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 570px; height: 400px;">
                                    <div class="row">
                                        <div class="col-xs-10 col-xs-offset-1 col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-4">
                                            <div class="blog-post left">
                                                <img class="corner-rounding" src="aspect1/img/blog-1.png" alt="">
                                                <div class="content">
                                                    <div class="title">The standard chunk of Lorem Ipsum used since the 1500s</div>
                                                    <div class="text">Contrary to popular belief, Lorem Ipsum 
                                                        is not simply random text. It has roots in a piece of classical Latin 
                                                        literature from 45 BC, making it over 2000 years old. Richard 
                                                        McClintock, a Latin professor at Hampden-Sydney College in Virginia, 
                                                        looked up
                                                    </div>
                                                    <div class="meta-entry clearfix">
                                                        <div class="date">January 12, 2015</div>
                                                        <div class="comments">0 Comments</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                  
                                </div>
                                <div class="swiper-slide" style="width: 570px; height: 400px;">
                                    <div class="row">
                                        <div class="col-xs-10 col-xs-offset-1 col-sm-9 col-sm-offset-0 col-md-8">                                   
                                            <div class="blog-post right">
                                                <img class="corner-rounding" src="aspect1/img/blog-2.png" alt="">
                                                <div class="content">
                                                    <div class="title">The standard chunk of Lorem Ipsum used since the 1500s</div>
                                                    <div class="text">Contrary to popular belief, Lorem Ipsum 
                                                            is not simply random text. It has roots in a piece of classical Latin 
                                                            literature from 45 BC, making it over 2000 years old. Richard 
                                                            McClintock, a Latin professor at Hampden-Sydney College in Virginia, 
                                                            looked up
                                                    </div>
                                                    <div class="meta-entry clearfix">
                                                        <div class="date">January 12, 2015</div>
                                                        <div class="comments">0 Comments</div>
                                                    </div>                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                  
                                </div>
                            <div class="swiper-slide" style="width: 570px; height: 400px;">
                                    <div class="row">
                                        <div class="col-xs-10 col-xs-offset-1 col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-4">
                                            <div class="blog-post left">
                                                <img class="corner-rounding" src="aspect1/img/blog-1.png" alt="">
                                                <div class="content">
                                                    <div class="title">The standard chunk of Lorem Ipsum used since the 1500s</div>
                                                    <div class="text">Contrary to popular belief, Lorem Ipsum 
                                                        is not simply random text. It has roots in a piece of classical Latin 
                                                        literature from 45 BC, making it over 2000 years old. Richard 
                                                        McClintock, a Latin professor at Hampden-Sydney College in Virginia, 
                                                        looked up
                                                    </div>
                                                    <div class="meta-entry clearfix">
                                                        <div class="date">January 12, 2015</div>
                                                        <div class="comments">0 Comments</div>
                                                    </div>                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                  
                                </div>
                                <div class="swiper-slide" style="width: 570px; height: 400px;">
                                    <div class="row">
                                        <div class="col-xs-10 col-xs-offset-1 col-sm-9 col-sm-offset-0 col-md-8">                                   
                                            <div class="blog-post right">
                                                <img class="corner-rounding" src="aspect1/img/blog-2.png" alt="">
                                                <div class="content">
                                                    <div class="title">The standard chunk of Lorem Ipsum used since the 1500s</div>
                                                    <div class="text">Contrary to popular belief, Lorem Ipsum 
                                                        is not simply random text. It has roots in a piece of classical Latin 
                                                        literature from 45 BC, making it over 2000 years old. Richard 
                                                        McClintock, a Latin professor at Hampden-Sydney College in Virginia, 
                                                        looked up
                                                    </div>
                                                    <div class="meta-entry clearfix">
                                                        <div class="date">January 12, 2015</div>
                                                        <div class="comments">0 Comments</div>
                                                    </div>                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                  
                                </div>                              

                            
                            </div>
                            <div class="pagination pagination-swiper-unique-id-3"><span class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"></span><span class="swiper-pagination-switch"></span><span class="swiper-pagination-switch"></span><span class="swiper-pagination-switch"></span></div>                         
                        </div>
                        <div class="arrows">
                            <div class="left"></div>
                            <div class="right"></div>
                        </div>                          
                    </div>                  
                
                    
                </div>
            </div> 


    

</div>               