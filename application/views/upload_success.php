<div id="container" class="col-lg-12 col-lg-offset-0">
    <section>
        <div id="content" class="content">
            <div class="row">
                <div id="header" class="col-lg-12">
                    <span class="glyphicon glyphicon-file" style="margin-left: 10px; margin-top: 3px;"> File Upload</span>
                </div>
            </div>
            <div class="col-lg-7 well col-lg-offset-3 radius20" style="padding: 0px;">
                <ul>
                    <?php foreach ($upload_data as $item => $value):?>
                        <li><?php echo $item;?>: <?php echo $value;?></li>
                    <?php endforeach; ?>
                </ul>

                <p><?php echo anchor('upload', 'Upload Another File!'); ?></p>
            </div>
        </div>
    </section>