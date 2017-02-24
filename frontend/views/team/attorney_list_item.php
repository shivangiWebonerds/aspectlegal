

<div class="icon-entry col-sm-6 col-md-3 post fadeInUp animated">
    <img class="corner-rounding" src="images/attorneys/<?= $model->image_file; ?>" alt="">
    <div class="content">
        <div class="information">
            <h3 class="name"><?= $model->name?></h3>
            <div class="job"><?= $model->designation?></div>
        </div>
        <div class="text"><?= $model->about_me?></div>
        <div class="social-block">
            <a href="<?= $model->fb_link; ?>"><img src="aspect1/img/info-facebook.png" alt=""></a>
            <a href="<?= $model->twitter_link; ?>"><img src="aspect1/img/info-twitter.png" alt=""></a>
            <a href="<?= $model->linkdin_link; ?>"><img src="aspect1/img/info-in.png" alt=""></a>                                      
        </div>
    </div>
</div>