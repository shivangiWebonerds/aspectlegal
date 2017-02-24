<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

        <div class="blocks-container">      
            
            <!-- BLOCK "TYPE 3" -->     
            <div class="block type-3 background-block" style="background-image: url(&quot;aspect1/img/background-7.jpg&quot;);">
                <img class="center-image" src="aspect1/img/background-7.jpg" alt="" style="display: none;">
                <div class="container">
                    <div class="row">
                        <div class="block-header col-xs-12">
                            <div class="block-header-wrapper">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-5 post fadeInLeft animated">
                                        <h2 class="title"><span class="first">our</span>contac<span class="blue">t</span></h2>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-7 post fadeInRight animated">
                                        <div class="text">Lorem Ipsum is that it has a more-or-less 
normal distribution of letters, as opposed to using 'Content here, 
content here', making it look like readable English. Many desktop 
publishing</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row content-block">
                        <div class="col-sm-12 col-md-4 address-info">
                            <h3 class="title">Address info</h3>
                            <div class="text">
                                <p>Lorem Ipsum is simply dummy text of the printing and 
typesetting industry. Lorem Ipsum has been the industry's standard dummy
 text.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and 
typesetting industry. Lorem Ipsum has been the industry's standard dummy
 text.</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 contact-wrapper">
                            <div class="contact-entry">
                                <div class="contact-icon"><img src="aspect1/img/c-address.png" alt=""></div>
                                <div class="description">
                                    <div class="title">our Address</div>
                                    <div class="text">The Michener Institute 222 St<br> Patrick St Toronto, ON M5T 1V4</div>
                                </div>
                            </div>
                            <div class="contact-entry">
                                <div class="contact-icon"><img src="aspect1/img/c-email.png" alt=""></div>
                                <div class="description">
                                    <div class="title">E-mail</div>
                                    <div class="text">Suport1: <a href="mailto:support@MyLawyer.com">support@MyLawyer.com</a><br> Suport2 : <a href="mailto:e-mail@MyLawyer.com">e-mail@MyLawyer.com</a></div>
                                </div>                              
                            </div>                          
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 contact-wrapper">
                            <div class="contact-entry">
                                <div class="contact-icon"><img src="aspect1/img/c-phone.png" alt=""></div>
                                <div class="description">
                                    <div class="title">Our phones</div>
                                    <div class="text">Toll Free: <a href="tel:+5233857090">+(523) 385-7090</a><br> Main Office: <a href="tel:+5233858092">+(523) 385-8092</a></div>
                                </div>                              
                            </div>
                            <div class="contact-entry">
                                <div class="contact-icon"><img src="aspect1/img/c-skype.png" alt=""></div>
                                <div class="description">
                                    <div class="title">Skype</div>
                                    <div class="text">Suport1: suportMyLawyer.com<br> Suport1: my_lawyer_123</div>
                                </div>                                  
                            </div>                      
                        </div>                      
                    </div>
                </div>
            </div>
            
            <!-- BLOCK "TYPE 2" -->     
            <div class="block type-2">
                <div class="container">
                    <div class="row">
                        <div class="breadcrumbs post fadeInUp col-xs-12 animated">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li>Contact</li>                            
                            </ul>
                        </div>
                    </div>              
                    <div class="row">
                        <div class="block-header col-xs-12">
                            <div class="block-header-wrapper">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-5 post animated fadeInLeft">
                                        <h2 class="title"><span class="first">contact</span>for<span class="blue">m</span></h2>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-7 post animated fadeInRight">
                                        <div class="text">Lorem Ipsum is simply dummy text of the 
printing and typesetting industry. Lorem Ipsum has been the industry's 
standard dummy text ever since the 1500s, when an unknown pri.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row post animated fadeInUp">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                            <img class="img-responsive center-block" src="aspect1/img/contact-from.png" alt="">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 form-block">
                            <form onsubmit="return submitForm();" action="./" method="post" name="contactform" id="contact-form">
                                <div class="form-text">Required fields are <span class="text-blue">*</span>. Fill out the form and we'll contact you soon</div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <input class="form-input" name="name" required="" placeholder="Name *" type="text">
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <input class="form-input" name="email" required="" placeholder="E-mail *" type="text">                                  
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <input class="form-input" name="phone" required="" placeholder="Phone *" type="text">
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <input class="form-input" name="subject" required="" placeholder="Subject *" type="text">                                   
                                    </div>                                  
                                    <div class="col-xs-12">
                                        <textarea class="form-input" name="message" placeholder="Message"></textarea>                                   
                                    </div>
                                    <div class="col-xs-12">
                                        <span class="button"><button class="submit" type="submit">submit</button></span>
                                        <span class="success"></span>
                                    </div>                                  
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <div>             
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242117.68137583963!2d73.72253501752829!3d18.52489016918859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1483200964273" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>          
            
        </div>
                          

    
    
    