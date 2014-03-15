<div id="container" class="container">
    <div class="hero-unit">
        <section>
            <div id="content" class="row content">
                <div class="row">
                    <div id="header" class="col-lg-12">
                        <span class="glyphicon glyphicon-home" style="margin-left: 10px; margin-top: 3px;"> Home</span>
                    </div>
                </div>
                <div class="col-lg-10 well col-lg-offset-1 radius20" style="padding: 0px;">
                    <div id="this-carousel-id" class="carousel slide radius20">
                        <ol class="carousel-indicators">
<?php $x=0; foreach($images as $image): ?>
                            <li data-target="#this-carousel-id" data-slide-to="<?php echo $x++ ?>" class="<?php echo $image['act']?>"></li>
<?php endforeach; ?>
                        </ol>
                        <div class="carousel-inner radius20">
<?php foreach($images as $image): ?>
                                <div class="radius20 gold-border item <?php echo $image['act']?>">
                                    <img class="radius20" src="<?php echo $image['src']?>" alt="<?php echo $image['cap']?>" />
                                    <div class="carousel-caption">
                                        <p><?php echo $image['cap']?></p>
                                    </div>
                                </div>
<?php endforeach; ?>
                        </div>
                        <a class="carousel-control left"  href="#this-carousel-id" data-slide="prev"> <span class="glyphicon icon-chevron-sign-left" style="margin-top: 3px;"> Prev</span></a>
                        <a class="carousel-control right" href="#this-carousel-id" data-slide="next"> <span class="glyphicon icon-chevron-sign-right" style="margin-top: 3px;"> Next</span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-default no-top-radius">
                        <div class="panel-heading panel-head-green">
                            <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body panel-size">
                            <img src="http://images.all-free-download.com/images/graphicmedium/beautiful_nature_landscape_01_hd_pictures_166207.jpg" alt="..." class="img-circle col-lg-offset-2">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-primary no-top-radius">
                        <div class="panel-heading  panel-head-blue">
                            <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body panel-size">
                            <img src="http://images.grooveshark.com/static/amazonart/m8206730.jpg" alt="..." class="img-circle col-lg-offset-2">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-danger no-top-radius">
                        <div class=" panel-heading panel-head-purple">
                            <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body panel-size">
                            <img src="http://d2f29brjr0xbt3.cloudfront.net/462_birdroundup/preview.jpg" alt="..." class="img-circle col-lg-offset-2">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
