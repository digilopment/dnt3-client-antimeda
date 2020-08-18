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
                foreach (DntLibrary\Base\Dnt::orderby($menu, 'order', 'ASC') as $row) {
                    $name_url_1 = WWW_PATH . '' . $row['name_url'];
                    ?>
                    <li class="<?php echo $row['name_url'] == $this->data['webhook'][1] ? 'active' : false; ?>">
                        <?php if ($row['name_url'] == "no_url") { ?>
                            <a><?php echo $row['name']; ?></a>
                        <?php } else { ?>
                            <a class="dropdown-toggle" href="<?php echo $name_url_1; ?>"><?php echo $row['name']; ?></a>
                        <?php } ?>
                    </li>
                <?php } ?>

                <!--<li class="active">
                    <input type="text" class="form-control" placeholder="Find job">
                </li>
                <li>
                    <a href="/" class="dropdown-toggle">Home</a>
                </li>
                <li>
                    <a href="/" class="dropdown-toggle" >Job Market</a>
                </li>
                <li>
                    <a href="/" class="dropdown-toggle" >Practical guide</a>
                </li>
                <li>
                    <a href="/" class="dropdown-toggle" >Recruitment Companies</a>
                </li>-->
                <?php /* <li class="dropdown">
                  <a href="login.html" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                  <ul class="dropdown-menu animated fadeOutUp">
                  <li><a href="index.html">Home Page 1</a></li>
                  <li><a href="index-2.html">Home Page 2</a></li>
                  <li><a href="index-3.html">Home Page 3</a></li>
                  <li><a href="index-4.html">Home Page 4</a></li>
                  <li><a href="index-5.html">Home Page 5</a></li>
                  <li><a href="index-6.html">Home Page 6</a></li>
                  <li><a href="freelancing.html">Freelancing</a></li>
                  </ul>
                  </li> */ ?>

            </ul>
            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                <?php /* <li><a href="login.html"><i class="fa fa-pencil" aria-hidden="true"></i>SignUp</a></li> */ ?>
                <li class="left-br"><a href="<?php echo WWW_PATH . 'signup'?>" class="signin">SignUp</a></li>
            </ul>
        </div>
    </div>
</nav>