    <header id="header">
        <nav class="gradient-bg bot-border">
            <div class="subnav" style="margin-bottom: 10px;">
                <ul class="nav nav-pills pull-9">
<?php foreach($main as $menu): ?>
                    <li class="<?php echo $menu['active'] ?>"><a href="<?php echo $menu['url'] ?>"><span class="glyphicon <?php echo $menu['icon'] ?>"> <?php echo $menu['name'] ?> </span></a></li>
<?php endforeach; ?>
                    <ul class="nav nav-pills pull-right" style="padding-right: 18px;">
                        <li class="dropdown" >
                            <a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-expand"> Extras <b class="caret"></b></span</a>
                            <ul class="dropdown-menu">
<?php foreach($extras as $menu): ?>
                                <li class="<?php echo $menu['active'] ?>"><a href="<?php echo $menu['url'] ?>">
                                        <span class="fontNew glyphicon <?php echo $menu['icon'] ?>"> <?php echo $menu['name'] ?> </span></a>
                                </li>
<?php endforeach; ?>
                            </ul>
                        </li>
                    </ul>
                </ul>
            </div>
        </nav>
    </header>
