<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TeamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teams';
$this->params['breadcrumbs'][] = $this->title;
?>
        <div class="blocks-container">
        
            <!-- BLOCK "TYPE 3" -->     
            <div class="block type-3 background-block" style="background-image: url(&quot;aspect1/img/background-5.jpg&quot;);">
                <img class="center-image" src="aspect1/img/background-5.jpg" alt="" style="display: none;">
                <div class="container">
                    <div class="row">
                        <div class="block-header col-xs-12">
                            <div class="block-header-wrapper">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-5 post fadeInLeft animated">
                                        <h2 class="title"><span class="first">our </span>Attorney<span class="blue">s</span></h2>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-7 post fadeInRight animated">
                                        <div class="text">Lorem Ipsum is simply dummy text of the 
                                            printing and typesetting industry. Lorem Ipsum has been the industry's 
                                            standard dummy text ever since the 1500s, when an unknown pri.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      

            <!-- BLOCK "TYPE 4" -->     
            <div class="block type-4">
                <div class="container">
                    <div class="row team">

                        <?php  
                            echo \yii\widgets\ListView::widget([
                                'dataProvider' => $dataProvider,
                                'options' => [
                                    'tag' => 'div',
                                    // 'class' => 'profile_item',
                                    //'id' => 'list-wrapper',
                                    //'pageSize' => 4,
                                ],
                               'layout' => "{summary}\n<div> &nbsp;</div>{items}\n<div class='row'> &nbsp;</div>{pager}",
                                'itemView' => 'attorney_list_item',
                            ]);
                        ?>
                        <!-- <div class="icon-entry col-sm-6 col-md-3 post fadeInLeft fadeInUp fadeInRight animated">
                            <img class="corner-rounding" src="aspect1/img/samantha.png" alt="">
                            <div class="content">
                                <div class="information">
                                    <h3 class="name">Samantha Megans</h3>
                                    <div class="job">Proffesor</div>
                                </div>
                                <div class="text">Lorem Ipsum is simply dummy text of the printin and typesetting industry. Lorem Ipsum has been the industry's standard.</div>
                                <div class="social-block">
                                    <a href="#"><img src="aspect1/img/info-facebook.png" alt=""></a>
                                    <a href="#"><img src="aspect1/img/info-twitter.png" alt=""></a>
                                    <a href="#"><img src="aspect1/img/info-in.png" alt=""></a>                                      
                                </div>
                            </div>
                        </div> -->
                    </div>                      
                    
                </div>
            </div>
            <!-- BLOCK "TYPE 9" -->     
            <div class="block type-9">
                <div class="container">
                    <div class="pull-left">
                        <p><span class="title">get a free consultation</span> <span class="text">Lorem Ipsum is simply dummy text of the printing.</span></p>
                    </div>
                    <div class="pull-right">
                        <span class="button"><a href="#">learn more</a></span>
                    </div>
                </div>
            </div>              
        
            
        </div>
    