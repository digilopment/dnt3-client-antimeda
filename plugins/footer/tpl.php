<?php
use DntLibrary\Base\Dnt;
?>
<div class="before-footer">

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="jb4-form-fields">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Enter your email address">
                        <span class="input-group-btn">
                            <button class="btn theme-bg" type="submit"><span class="fa fa-paper-plane-o"></span></button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 hill">
                <ul class="job stock-facts">
                    <li><span>1</span></br>Offers Posted</li>
                    <li><span>6</span></br>Recruitments</li>
                    <li><span>2</span></br>Practical guide</li>
                    <li><span>2</span></br>Language courses</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<footer class="dark-footer skin-dark-footer">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="footer-widget">
                        <h4 class="widget-title">Contact</h4>
                        <div class="footer-add">
                            <p><?php echo $this->data['plugin_data']['setting']('vendor_company'); ?><br/>
                                <?php echo $this->data['plugin_data']['setting']('vendor_street'); ?>, <?php echo $this->data['plugin_data']['setting']('vendor_psc'); ?><br>
                                <?php echo $this->data['plugin_data']['setting']('vendor_city'); ?></p></p>
                            <p><strong>Email:</strong></br><?php echo $this->data['plugin_data']['setting']('vendor_email'); ?></p>
                            <p><strong>Call:</strong></br><?php echo $this->data['plugin_data']['setting']('vendor_tel'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="footer-widget">
                        <h4 class="widget-title">Navigations</h4>
                        <ul class="footer-menu">
                            <?php
                            $menu = $data['menu_items'];
                            foreach (Dnt::orderby($menu, 'order', 'ASC') as $item) {
                                echo '<li><a href="' . WWW_PATH . $item['name_url'] . '">' . $item['name'] . '</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="footer-widget">
                        <h4 class="widget-title">Job Market</h4>
                        <ul class="footer-menu">
                            <li><a href="index-2.html">Home Page 2</a></li>
                            <li><a href="index-3.html">Home Page 3</a></li>
                            <li><a href="index-4.html">Home Page 4</a></li>
                            <li><a href="index-5.html">Home Page 5</a></li>
                            <li><a href="login.html">LogIn</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3">
                    <div class="footer-widget">
                        <h4 class="widget-title"></h4>
                        <a href="<?php echo WWW_PATH . 'signup' ?>" class="other-store-link">
                            <div class="other-store-app">
                                <div class="os-app-icon">
                                    <i class="ti-user theme-cl"></i>
                                </div>
                                <div class="os-app-caps">
                                    Sign up
                                    <span>Recruitments</span>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo WWW_PATH . 'contact' ?>" class="other-store-link">
                            <div class="other-store-app">
                                <div class="os-app-icon">
                                    <i class="ti-star theme-cl"></i>
                                </div>
                                <div class="os-app-caps">
                                    Contact us
                                    <span>Cooperation</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <p class="mb-0">© <?php echo date('Y'); ?> <?php echo $data['web_title']; ?> | Created By Digilopment</p>
                </div>
                <div class="col-lg-6 col-md-6 text-right">
                    <ul class="footer-bottom-social">

                        <?php if ($data['meta_settings']['keys']['facebook_page']['show'] == 1) { ?>
                            <li><a target="_blank" href="<?php echo $data['meta_settings']['keys']['facebook_page']['value']; ?>"><i class="ti-facebook"></i></a></li>
                        <?php } ?>
                        <?php if ($data['meta_settings']['keys']['instagram']['show'] == 1) { ?>
                            <li><a target="_blank" href="<?php echo $data['meta_settings']['keys']['instagram']['value']; ?>"><i class="ti-instagram"></i></a></li>
                        <?php } ?>
                        <?php if ($data['meta_settings']['keys']['linked_in']['show'] == 1) { ?>
                            <li><a target="_blank" href="<?php echo $data['meta_settings']['keys']['linked_in']['value']; ?>"><i class="ti-linkedin"></i></a></li>
                        <?php } ?>
                        <?php if ($data['meta_settings']['keys']['twitter']['show'] == 1) { ?>
                            <li><a target="_blank" href="<?php echo $data['meta_settings']['keys']['twitter']['value']; ?>"><i class="ti-twitter"></i></a></li>
                        <?php } ?>
                        <?php if ($data['meta_settings']['keys']['youtube_channel']['show'] == 1) { ?>
                            <li><a target="_blank" href="<?php echo $data['meta_settings']['keys']['youtube_channel']['value']; ?>"><i class="ti-twitter"></i></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>