<footer>
    <div class="nav navbar-fixed-bottom">
        <div class="gradient-bg top-border footer-height">
            <!-- <a class="btn btn-large btn-primary" href="#">
                 <i class="icon-comment"></i> Comment</a>-->
            <div class="row">
                <!-- start: copyright -->
                <div class="col-lg-4 pull-left">
                    <div class="copyright">
                        <p class="copyright">© <?php echo date("Y");?> J & R Custom Builders.</p>
                    </div>
                </div>
                <div class="col-lg-4"  style="text-align: center;">
                    <span><p>PHIL 4:13</p></span>
                </div>
                <div class="col-lg-4 pull-right">
                    <div class="footer-social" style="float: right;">
                        <p class="copyright">
                            <a href="#"><i class="icon-twitter"></i></a>
                            <a href="#"><i class="icon-github"></i></a>
                            <a href="#"><i class="icon-linkedin"></i></a>
                            <a href="#"><i class="icon-facebook"></i></a>
                            <a href="#"><i class="icon-google-plus"></i></a>
                            <a href="#"><i class="icon-pinterest"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
</footer>
<div class="col-lg-12 footer-height">
</div>

<!-- Placed at the end of the document so the pages load faster -->
<?php $statics = getIncludes(); ?>
<?php foreach ($statics['js'] as $js): ?>
    <script src="<?php echo $js ?>"></script>
<?php endforeach; ?>
<?php if (isset($overjs)) { ?>
    <?php if (sizeof($overjs) > 0) { ?>
        <?php foreach ($overjs as $j): ?>
            <script src="<?php echo $j ?>"></script>
        <?php endforeach; ?>
    <?php } ?>
    <?php if (sizeof($overjsie9) > 0) { ?>
        <?php foreach ($overjsie9 as $j9): ?>
            <!--[if lt IE 9]>
            <script src="<?php echo $j9 ?>"></script><![endif]-->
        <?php endforeach; ?>
    <?php } ?>
<?php } ?>
</body>
</html>
