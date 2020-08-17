<!-- Title Header Start -->
<?php
$originalImage = $data['postImageOriginal']($data['item']->id_entity);
?>
<!-- Job Detail Start -->
<section>
    <div class="container">

        <div class="col-md-8 col-sm-12">
            <div class="container-detail-box">

                <div class="apply-job-header">
                    <h4><?php echo $data['postMeta']($data['item']->id_entity, 'position') ?></h4>
                    <h5><?php echo $data['postMeta']($data['item']->id_entity, 'specialization') ?></h5>
                    <a href="#" class="cl-success"><span><i class="fa fa-building"></i><?php echo $data['recruitment']->name; ?></span></a>
                    <span><i class="fa fa-map-marker"></i><?php echo $data['postMeta']($data['item']->id_entity, 'company_state') ?></span>
                </div>

                <div class="apply-job-detail">
                    <?php echo $data['article']['content'] ?>
                </div>

                <div class="apply-job-detail">
                    <h5>Requirements</h5>
                    <ul class="job-requirements">
                        <li><span>Availability</span> Hourly</li>
                        <li><span>Education</span> Graduate</li>
                        <li><span>Age</span> 25+</li>
                        <li><span>Experience</span> <?php echo $data['postMeta']($data['item']->id_entity, 'position') ?></li>
                        <li><span>Language</span> German</li>
                        <li><span>€</span> <?php echo $data['postMeta']($data['item']->id_entity, 'price') ?></li>
                    </ul>
                </div>

                <a href="#" class="btn btn-success">Apply For This Job</a>

            </div>

            <div class="job-detail-statistic flex-middle-sm">

                <div class="statistic-item flex-middle">
                    <div class="icon text-theme">
                        <i class="ti-headphone theme-cl"></i></div>
                    <span class="text"><?php echo $data['recruitment']->embed; ?></span>
                </div>

                <div class="statistic-item flex-middle">
                    <div class="icon text-theme">
                        <i class="ti-email theme-cl"></i></div>
                    <span class="text"><?php echo $data['recruitment']->tags; ?></span>
                </div>

                <div class="statistic-item flex-middle">
                    <div class="icon text-theme">
                        <i class="ti-user theme-cl"></i></div>
                    <span class="text"><a target="_blank" href="<?php echo $data['recruitment']->name_url; ?>"><?php echo $data['recruitment']->name_url; ?></a></span>
                </div>

            </div>

        </div>

        <!-- Sidebar Start-->
        <div class="col-md-4 col-sm-12">
            <!-- Job Detail -->
            <div class="sidebar-container">
                <div class="sidebar-box">
                    <div class="sidebar-inner-box">
                        <div class="sidebar-box-thumb">
                            <img src="<?php echo $data['recruitment_img']; ?>" class="img-responsive" alt="" />
                        </div>
                        <div class="sidebar-box-detail">
                            <h4><?php echo $data['recruitment']->name; ?> Info</h4>
                            <span class="desination"><?php echo $data['postMeta']($data['item']->id_entity, 'position') ?></span>
                            <br/>
                            <span class="desination"><?php echo $data['postMeta']($data['item']->id_entity, 'specialization') ?></span>
                        </div>
                    </div>

                </div>
                <a target="_blank" href="<?php echo $data['recruitment']->name_url; ?>" class="btn btn-sidebar bt-1 bg-success">Apply For This</a>
            </div>
            <!-- Share This Job -->
            <div class="sidebar-wrapper">
                <div class="sidebar-box-header bb-1">
                    <h4>Share This Job</h4>
                </div>
                <ul class="social-share">
                    <li><a href="#" class="fb-share"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="tw-share"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="li-share"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>

        </div>
        <!-- End Sidebar -->
    </div>
</section>
<!-- Job Detail End -->
