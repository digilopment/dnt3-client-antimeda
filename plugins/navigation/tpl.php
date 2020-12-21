<?php
$dnt = $data['plugin_data']['dnt'];
?>
<nav class="navbar navbar-default navbar-fixed navbar-light white bootsnav">
    <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"><i class="fa fa-bars"></i></button>
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo WWW_PATH ?>"><img src="<?php echo $this->data['plugin_data']['logo'] ?>" class="logo logo-scrolled" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">

                <?php
                $menu = $this->data['menu_items'];
                foreach ($dnt->orderby($menu, 'order', 'ASC') as $row) {
                    $name_url_1 = WWW_PATH . '' . $row['name_url'];
                    ?>
                    <li class="<?php echo $row['name_url'] == $this->data['webhook'][1] ? 'active' : false; ?>">
                        <?php if ($row['name_url'] == "no_url") { ?>
                            <a><?php echo $row['name']; ?></a>
                        <?php } else { ?>
                            <a href="<?php echo $name_url_1; ?>"><?php echo $row['name']; ?></a>
                        <?php } ?>
                    </li>
                <?php } ?>
            </ul>
            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                <?php /* <li><a href="login.html"><i class="fa fa-pencil" aria-hidden="true"></i>SignUp</a></li> */ ?>
                <li class="left-br"><a href="<?php echo WWW_PATH . 'signup'?>" class="signin">SignUp</a></li>
            </ul>
        </div>
    </div>
</nav>