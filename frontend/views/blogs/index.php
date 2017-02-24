<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BlogsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blogs';
$this->params['breadcrumbs'][] = $this->title;
?>


        <div class="blocks-container">      
            
            <!-- BLOCK "TYPE 3" -->     
            <div class="block type-3 background-block" style="background-image: url(&quot;aspect1/img/background-blog-v1.jpg&quot;);">
                <img class="center-image" src="aspect1/img/background-blog-v1.jpg" alt="" style="display: none;">
                <div class="container">
                    <div class="row">
                        <div class="block-header col-xs-12">
                            <div class="block-header-wrapper">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-5 post fadeInLeft animated">
                                        <h2 class="title"><span class="first">our </span>blo<span class="blue">g</span></h2>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-7 post fadeInRight animated">
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
                </div>
            </div>
            
            <div class="container blog-wrapper">
                
                <div class="row">
                    <div class="breadcrumbs col-xs-12">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Blog</li>                               
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 blog-inline">

                        <?php  
                            echo \yii\widgets\ListView::widget([
                                'dataProvider' => $dataProvider,
                                'options' => [
                                    'tag' => 'div',
                                     'class' => 'blog-entry',
                                    //'id' => 'list-wrapper',
                                    //'pageSize' => 4,
                                ],
                               'layout' => "{summary}\n<div> &nbsp;</div>{items}\n<div class='row'> &nbsp;</div>{pager}",
                                'itemView' => 'blog_list_item',
                            ]);
                        ?>


                        <!-- <div class="blog-entry">
                            <div class="row">
                                <div class="col-sm-12 col-md-7">
                                    <div class="data-column">
                                        <div class="date">
                                            <span>12</span> Jan, 2015
                                        </div>
                                        <div class="data-entry">
                                            <a href="#"><span class="icon-entry like"></span>
                                            <br>351</a>
                                        </div>
                                        <div class="data-entry"><a href="#">
                                            <span class="icon-entry views"></span><br>502</a>
                                        </div>
                                        <div class="data-entry"><a href="#">
                                            <span class="icon-entry comments"></span><br>131</a>
                                        </div>
                                    </div>
                                    <div class="image-column">
                                        <a class="blog-video" data-src="http://www.youtube.com/embed/GUEZCxBcM78" href="#">
                                            <img class="img-responsive" src="aspect1/img/post-1.png" alt="">
                                        </a>
                                        <div class="popup-video">
                                            <div class="movie">
                                                <iframe src="" class=""></iframe>
                                                <div class="close-button">
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </div>                      
                                            </div>
                                        </div>                                      
                                    </div>
                                </div>                          
                                <div class="col-sm-12 col-md-5">                    
                                    <div class="content">
                                        <a class="title" href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry</a>
                                        <div class="author">Tech by <a href="#">Dorian Gray</a></div>
                                        <div class="description">Lorem Ipsum is simply All the Lorem 
                                            Ipsum generators on the Internet tend to repeat predefined chunks as 
                                            necessary, making this the first true genator on the Internet. Lorem 
                                            Ipsum is simply dummy text of the printing and types industry. Lorem 
                                            Ipsum has been the industry's
                                        </div>
                                        <span class="button"><a href="http://templatation.com/Site-templates/Mylawyer/blog-detail.html">read more</a></span>
                                    </div>                              
                                </div>                      
                            </div>
                        </div>

                        <div class="blog-entry">
                            <div class="row">
                                <div class="col-sm-12 col-md-7">
                                    <div class="data-column">
                                        <div class="date"><span>09</span> Jan, 2015</div>
                                        <div class="data-entry"><a href="#"><span class="icon-entry like"></span><br>152</a></div>
                                        <div class="data-entry"><a href="#"><span class="icon-entry views"></span><br>300</a></div>
                                        <div class="data-entry"><a href="#"><span class="icon-entry comments"></span><br>21</a></div>
                                    </div>
                                    <div class="image-column">
                                        <a class="blog-video" data-src="http://www.youtube.com/embed/GUEZCxBcM78">
                                            <img class="img-responsive" src="aspect1/img/post-2.png" alt="">
                                        </a>
                                        <div class="popup-video">
                                            <div class="movie">
                                                <iframe src="" class=""></iframe>
                                                <div class="close-button">
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </div>                      
                                            </div>
                                        </div>                                          
                                    </div>
                                </div>     

                                <div class="col-sm-12 col-md-5">                    
                                    <div class="content">
                                        <a class="title" href="#">It is a long established fact that a reader will be distracted by</a>
                                        <div class="author">Tech by <a href="#">Dorian Gray</a></div>
                                        <div class="description">Lorem Ipsum is simply All the Lorem 
                                                Ipsum generators on the Internet tend to repeat predefined chunks as 
                                                necessary, making this the first true genator on the Internet. Lorem 
                                                Ipsum is simply dummy text of the printing and types industry. Lorem 
                                                Ipsum has been the industry's
                                        </div>
                                        <span class="button"><a href="http://templatation.com/Site-templates/Mylawyer/blog-detail.html">read more</a></span>
                                    </div>                              
                                </div>                      
                            </div>
                        </div>

                        <div class="blog-entry">
                            <div class="row">
                                <div class="col-sm-12 col-md-7">
                                    <div class="data-column">
                                        <div class="date"><span>01</span> Jan, 2015</div>
                                        <div class="data-entry"><a href="#"><span class="icon-entry like"></span><br>195</a></div>
                                        <div class="data-entry"><a href="#"><span class="icon-entry views"></span><br>209</a></div>
                                        <div class="data-entry"><a href="#"><span class="icon-entry comments"></span><br>48</a></div>
                                    </div>
                                    <div class="image-column">
                                        <a href="#" class="blog-video" data-src="http://www.youtube.com/embed/GUEZCxBcM78">
                                            <img class="img-responsive" src="aspect1/img/post-3.png" alt="">
                                        </a>
                                        <div class="popup-video">
                                            <div class="movie">
                                                <iframe src="" class=""></iframe>
                                                <div class="close-button">
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </div>                      
                                            </div>
                                        </div>                                          
                                    </div>
                                </div>                          
                                <div class="col-sm-12 col-md-5">                    
                                    <div class="content">
                                        <a class="title" href="#">Many desktop publishing packages and web page editors</a>
                                        <div class="author">Tech by <a href="#">Dorian Gray</a></div>
                                        <div class="description">Lorem Ipsum is simply All the Lorem 
                                                Ipsum generators on the Internet tend to repeat predefined chunks as 
                                                necessary, making this the first true genator on the Internet. Lorem 
                                                Ipsum is simply dummy text of the printing and types industry. Lorem 
                                                Ipsum has been the industry's
                                        </div>
                                        <span class="button"><a href="http://templatation.com/Site-templates/Mylawyer/blog-detail.html">read more</a></span>
                                    </div>                              
                                </div>                      
                            </div>
                        </div>

                        <div class="blog-entry">
                            <div class="row">
                                <div class="col-sm-12 col-md-7">
                                    <div class="data-column">
                                        <div class="date"><span>12</span> Jan, 2015</div>
                                        <div class="data-entry"><a href="#"><span class="icon-entry like"></span><br>351</a></div>
                                        <div class="data-entry"><a href="#"><span class="icon-entry views"></span><br>502</a></div>
                                        <div class="data-entry"><a href="#"><span class="icon-entry comments"></span><br>131</a></div>
                                    </div>
                                    <div class="image-column">
                                        <a class="blog-video" data-src="http://www.youtube.com/embed/GUEZCxBcM78" href="#">
                                            <img class="img-responsive" src="aspect1/img/post-1.png" alt="">
                                        </a>
                                        <div class="popup-video">
                                            <div class="movie">
                                                <iframe src="" class=""></iframe>
                                                <div class="close-button">
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-5">
                                    <div class="content">
                                        <a class="title" href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry</a>
                                        <div class="author">Tech by <a href="#">Dorian Gray</a></div>
                                        <div class="description">Lorem Ipsum is simply All the Lorem 
                                            Ipsum generators on the Internet tend to repeat predefined chunks as 
                                            necessary, making this the first true genator on the Internet. Lorem 
                                            Ipsum is simply dummy text of the printing and types industry. Lorem 
                                            Ipsum has been the industry's
                                        </div>
                                        <span class="button"><a href="http://templatation.com/Site-templates/Mylawyer/blog-detail.html">read more</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-entry">
                            <div class="row">
                                <div class="col-sm-12 col-md-7">
                                    <div class="data-column">
                                        <div class="date"><span>09</span> Jan, 2015</div>
                                        <div class="data-entry"><a href="#"><span class="icon-entry like"></span><br>152</a></div>
                                        <div class="data-entry"><a href="#"><span class="icon-entry views"></span><br>300</a></div>
                                        <div class="data-entry"><a href="#"><span class="icon-entry comments"></span><br>21</a></div>
                                    </div>
                                    <div class="image-column">
                                        <a class="blog-video" data-src="http://www.youtube.com/embed/GUEZCxBcM78">
                                            <img class="img-responsive" src="aspect1/img/post-2.png" alt="">
                                        </a>
                                        <div class="popup-video">
                                            <div class="movie">
                                                <iframe src="" class=""></iframe>
                                                <div class="close-button">
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-5">
                                    <div class="content">
                                        <a class="title" href="#">It is a long established fact that a reader will be distracted by</a>
                                        <div class="author">Tech by <a href="#">Dorian Gray</a></div>
                                        <div class="description">Lorem Ipsum is simply All the Lorem 
                                            Ipsum generators on the Internet tend to repeat predefined chunks as 
                                            necessary, making this the first true genator on the Internet. Lorem 
                                            Ipsum is simply dummy text of the printing and types industry. Lorem 
                                            Ipsum has been the industry's
                                        </div>
                                        <span class="button"><a href="http://templatation.com/Site-templates/Mylawyer/blog-detail.html">read more</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-entry">
                            <div class="row">
                                <div class="col-sm-12 col-md-7">
                                    <div class="data-column">
                                        <div class="date"><span>01</span> Jan, 2015</div>
                                        <div class="data-entry"><a href="#"><span class="icon-entry like"></span><br>195</a></div>
                                        <div class="data-entry"><a href="#"><span class="icon-entry views"></span><br>209</a></div>
                                        <div class="data-entry"><a href="#"><span class="icon-entry comments"></span><br>48</a></div>
                                    </div>
                                    <div class="image-column">
                                        <a href="#" class="blog-video" data-src="http://www.youtube.com/embed/GUEZCxBcM78">
                                            <img class="img-responsive" src="aspect1/img/post-3.png" alt="">
                                        </a>
                                        <div class="popup-video">
                                            <div class="movie">
                                                <iframe src="" class=""></iframe>
                                                <div class="close-button">
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-5">
                                    <div class="content">
                                        <a class="title" href="#">Many desktop publishing packages and web page editors</a>
                                        <div class="author">Tech by <a href="#">Dorian Gray</a></div>
                                        <div class="description">Lorem Ipsum is simply All the Lorem 
                                            Ipsum generators on the Internet tend to repeat predefined chunks as 
                                            necessary, making this the first true genator on the Internet. Lorem 
                                            Ipsum is simply dummy text of the printing and types industry. Lorem 
                                            Ipsum has been the industry's
                                        </div>
                                        <span class="button"><a href="http://templatation.com/Site-templates/Mylawyer/blog-detail.html">read more</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="pagination">
                          <ul>
                            <li class="previous"><a href="#"></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">10</a></li>                             
                            <li class="next"><a href="#"></a></li>
                          </ul>                     
                        </div> -->

                    </div>
                </div>
            </div>

        </div>
    