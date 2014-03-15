<div id="container" class="col-lg-12 col-lg-offset-0">
    <section>
        <div id="content" class="content">
            <div class="row">
                <div id="header" class="col-lg-12">
                    <span class="glyphicon glyphicon-file" style="margin-left: 10px; margin-top: 3px;"> File Upload</span>
                </div>
            </div>
            <div class="col-lg-7 well col-lg-offset-3 radius20" style="padding: 0px;">
                <?php echo $error;?>
                <?php echo form_open_multipart('upload/do_upload');?>
                    <input type="file" name="userfile" size="20" />
                    <br /><br />
                    <input type="submit" value="upload" />
                <?php echo  form_close(); ?>
            </div>
        </div>
    </section>
