<!-- Title Header Start -->
<?php 
$originalImage = $data['postImageOriginal']($data['item']->id_entity); 

?>
<section class="inner-header-page">
    <div class="container">

        <div class="col-md-8">
            <div class="left-side-container">
                <div class="freelance-image"><a href="company-detail.html"><img src="assets/img/com-2.jpg" class="img-responsive" alt=""></a></div>
                <div class="header-details">
                    <h4>Front End Developer</h4>
                    <p>Google</p>
                    <ul>
                        <?php
                    $i = 0;
                    foreach ($this->data['plugin_data']['categoryTreeProduct'] as $catId) {
                        if ($i > 0) {
                            ?>
                            <li class="" ><a href="<?php echo $this->data['plugin_data']['path'] . '' . $this->data['plugin_data']['modulUrl'] . '/category/' . $catId; ?>"><?php echo $this->data['plugin_data']['categoryElement']($catId)['name'] ?></a></li>
                            <?php
                        }
                        $i++;
                    }
                    ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-4 bl-1 br-gary">
            <div class="right-side-detail">
                <ul>
                    <li><span class="detail-info">Availability</span>Full Time</li>
                    <li><span class="detail-info">Experience</span>5 Year</li>
                    <li><span class="detail-info">Age</span>22+ Year</li>
                </ul>
                <ul class="social-info">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>
        </div>

    </div>
</section>
<div class="clearfix"></div>
<!-- Title Header End -->

<!-- Job Detail Start -->
<section>
    <div class="container">

        <div class="col-md-8 col-sm-12">
            <div class="container-detail-box">

                <div class="apply-job-header">
                    <h4>Front End Developer</h4>
                    <a href="company-detail.html" class="cl-success"><span><i class="fa fa-building"></i>Google</span></a>
                    <span><i class="fa fa-map-marker"></i>United Kingdom</span>
                </div>

                <div class="apply-job-detail">
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                    <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
                </div>

                <div class="apply-job-detail">
                    <h5>Skills</h5>
                    <ul class="skills">
                        <li>Css3</li>
                        <li>Html5</li>
                        <li>Photoshop</li>
                        <li>Wordpress</li>
                        <li>PHP</li>
                        <li>Java Script</li>
                    </ul>
                </div>

                <div class="apply-job-detail">
                    <h5>Requirements</h5>
                    <ul class="job-requirements">
                        <li><span>Availability</span> Hourly</li>
                        <li><span>Education</span> Graduate</li>
                        <li><span>Age</span> 25+</li>
                        <li><span>Experience</span> Intermidiate (3 - 5Year)</li>
                        <li><span>Language</span> English, Hindi</li>
                    </ul>
                </div>

                <a href="#" class="btn btn-success">Apply For This Job</a>

            </div>

            <div class="job-detail-statistic flex-middle-sm">

                <div class="statistic-item flex-middle">
                    <div class="icon text-theme">
                        <i class="ti-headphone theme-cl"></i></div>
                    <span class="text">+91 215 245 6584</span>
                </div>

                <div class="statistic-item flex-middle">
                    <div class="icon text-theme">
                        <i class="ti-email theme-cl"></i></div>
                    <span class="text">jobstock@gmail.com</span>
                </div>

                <div class="statistic-item flex-middle">
                    <div class="icon text-theme">
                        <i class="ti-skype theme-cl"></i></div>
                    <span class="text">themezhub</span>
                </div>

            </div>
            
        </div>

        <!-- Sidebar Start-->
        <div class="col-md-4 col-sm-12">

            <!-- Job Detail -->
            <div class="sidebar-container">
                <div class="sidebar-box">
                    <span class="sidebar-status">Full Time</span>
                    <h4 class="flc-rate">20K - 30K</h4>
                    <div class="sidebar-inner-box">
                        <div class="sidebar-box-thumb">
                            <img src="assets/img/com-2.jpg" class="img-responsive" alt="" />
                        </div>
                        <div class="sidebar-box-detail">
                            <h4>Google Info</h4>
                            <span class="desination">App Designer</span>
                        </div>
                    </div>
                    <div class="sidebar-box-extra">
                        <ul>
                            <li>Php</li>
                            <li>Android</li>
                            <li>Html</li>
                            <li class="more-skill bg-primary">+3</li>
                        </ul>
                        <ul class="status-detail">
                            <li class="br-1"><strong>Canada</strong>Location</li>
                            <li class="br-1"><strong>748</strong>View</li>
                            <li><strong>03</strong>Post</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="btn btn-sidebar bt-1 bg-success">Apply For This</a>
            </div>

            <!-- Share This Job -->
            <div class="sidebar-wrapper">
                <div class="sidebar-box-header bb-1">
                    <h4>Share This Job</h4>
                </div>

                <ul class="social-share">
                    <li><a href="#" class="fb-share"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="tw-share"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="gp-share"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="in-share"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" class="li-share"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="be-share"><i class="fa fa-behance"></i></a></li>
                </ul>
            </div>

        </div>
        <!-- End Sidebar -->

    </div>
</section>
<!-- Job Detail End -->

<?php /*
<div class="col-sm-9 col-md-9 col-lg-9 product">
    <section class="panel tree-path">
        <div class="panel-body no-padding">
            <div class="pull-left">
                <ul class="pagination pagination-sm pro-page-list">
                    <li class="">
                        <a><i class="fa fa-arrow-right"></i></a>
                    </li>
                    <?php
                    $i = 0;
                    foreach ($this->data['plugin_data']['categoryTreeProduct'] as $catId) {
                        if ($i > 0) {
                            ?>
                            <li class="" ><a href="<?php echo $this->data['plugin_data']['path'] . '' . $this->data['plugin_data']['modulUrl'] . '/category/' . $catId; ?>"><?php echo $this->data['plugin_data']['categoryElement']($catId)['name'] ?></a></li>
                            <?php
                        }
                        $i++;
                    }
                    ?>
                    <li class="active"><a href=""><?php echo $data['item']->name; ?></a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- product -->
    <div class="product-content product-wrap clearfix product-deatil">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 left-section">
                <div class="product-image">

                    <?php $originalImage = $data['postImageOriginal']($data['item']->id_entity); ?>
                    <a href="<?php echo $originalImage ?>" data-lightbox="roadtrip">
                        <img src="<?php echo $data['postImage']($data['item']->id_entity); ?>" class="img-responsive">
                    </a>
                    <a target="_blank" href="<?php echo $originalImage ?>"> <i class="fa fa-external-link"></i> <small>Zobraziť fotku na novej karte</small></a>
                   
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 right-section">
                <h2 class="name">
                    <?php echo $data['item']->name; ?>
                    <hr/>
                </h2>

                <?php if ($data['postMeta']($data['item']->id_entity, 'price')) { ?>
                    <h3 class="price-container">
                        <?php echo $data['price']($data['item']->id_entity); ?>
                        <small>s DPH</small>
                    </h3>
                <?php } ?>
                <div class="links">
                    <a href="<?php echo WWW_PATH; ?>kontakt?productId=<?php echo $data['item']->id_entity; ?>#form-area" class="btn btn-success"><i class="fa fa-external-link"></i> Spýtať sa na produkt</a>
                    <a href="<?php echo $data['categoryUrl'] ?>" class="btn btn-warning"><i class="fa fa-external-link"></i> Pozrieť iné bicykle v tejto kategórii</a>
                </div>


            </div>
            <div class="col-xs-12">
                <div class="description description-tabs">
                    <ul id="myTab" class="nav nav-pills no-padding">
                        <li class="active"><a href="#more-information" data-toggle="tab" class="no-margin">Informácie</a></li>
                        <li class=""><a href="#specifications" data-toggle="tab">Špecifikácia</a></li>
                        <li class=""><a href="#variants" data-toggle="tab">Varianty</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="more-information">
                            <br/>
                            <strong> <?php echo $data['item']->name ?></strong>
                            <p>
                                <?php
                                $content = explode('<!--params-->', $data['item']->content);
                                echo $content[0];
                                ?>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="specifications">
                            <br />
                            <?php
                            if (isset($content[1])) {
                                echo $content[1];
                            }
                            ?>
                        </div>
                        <div class="tab-pane fade" id="variants">
                            <br />
                            <div class="params">
                                <table>
                                    <?php
                                    $str = $data['postMeta']($data['item']->id_entity, 'variants');
                                    $str = str_replace('")"', ')"', $str);
                                    $str = str_replace('""}]', '"}]', $str);
                                    $variants = json_decode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $str), true);
                                    if (is_array($variants)) {
                                        foreach ($variants as $key => $variant) {
                                            if (isset($variant['variant'])) {
                                                echo '<tr><td>' . $variant['variant'] . '</td></tr>';
                                            }
                                        }
                                    } else {
                                        if ($data['postMeta']($data['item']->id_entity, 'variant')) {
                                            echo '<tr><td>' . $data['postMeta']($data['item']->id_entity, 'variant') . '</td></tr>';
                                        } else {
                                            echo '<tr><td>' . $data['item']->name . '</td></tr>';
                                        }
                                    }
                                    
                                    ?>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product -->
</div>
 * */?>