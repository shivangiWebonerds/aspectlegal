    <?php
use yii\helpers\Url;
?>
    <!-- <div class="blog-entry"> -->
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
                        <img class="img-responsive" src="images/blogs/<?= $model->image_file ;?>" alt="" style="width:553px; height:306px;">
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
                    <a class="title" href="#"><?= $model->title ?></a>
                    <div class="author">Tech by <a href="#">Dorian Gray</a></div>
                    <div class="description"><?= $model->content ?>
                    </div>
                    <span class="button"><a href="<?php echo Url::toRoute('blogs/index');?>">read more</a></span>
                </div>                              
            </div>                      
        </div>
    <!-- </div> -->