<!-- ========== Begin: Brows job ===============  -->
<section>
    <div class="container">
        <!--Browse Job In Grid-->
        <div class="row extra-mrg">

            <?php
            if ($this->data['plugin_data']['hasPosts']) {
                foreach ($this->data['plugin_data']['items'] as $row) {
                    $img = $row['img'];
                    $content = $row['content'];
                    $perex = $row['perex'];
                    $name = $row['name'];
                    $url = $row['url'];
                    ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="grid-view brows-job-list">
                            <div class="brows-job-company-img">
                                <img src="assets/img/com-1.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="brows-job-position">
                                <h3><a href="job-detail.html"><?php echo $name; ?></a></h3>
                                <p><span>Google</span></p>
                            </div>
                            <div class="job-position">
                                <span class="job-num">5 Position</span>
                            </div>
                            <div class="brows-job-type">
                                <span class="full-time">Full Time</span>
                            </div>
                            <ul class="grid-view-caption">
                                <li>
                                    <div class="brows-job-location">
                                        <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                                    </div>
                                </li>
                                <li>
                                    <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
                                </li>
                            </ul>
                            <span class="tg-themetag tg-featuretag">Premium</span>
                        </div>
                    </div> <?php
                }
            } else {
                ?>
                <h3 class="title"><?php echo $data['article']['perex']; ?></h3>
                <?php echo $data['article']['content']; ?>
                <?php
            }
            ?>



        </div>
        <!--/.Browse Job In Grid-->

        <!--<div class="row">
            <ul class="pagination">
                <li><a href="#"><i class="ti-arrow-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li> 
                <li><a href="#">4</a></li> 
                <li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li> 
                <li><a href="#"><i class="ti-arrow-right"></i></a></li> 
            </ul>
        </div>-->

    </div>
</section>
<!-- ========== Begin: Brows job Grid End ===============  -->

<!--
<div class="col-md-9">
    <div class="blog-grid margin-bottom-30">
        <h2 class="title-v4"><?php echo $data['article']['name']; ?></h2>
        <?php
        if ($this->data['plugin_data']['hasPosts']) {
            foreach ($this->data['plugin_data']['items'] as $row) {
                $img = $row['img'];
                $content = $row['content'];
                $perex = $row['perex'];
                $name = $row['name'];
                $url = $row['url'];
                ?>
                <div class="row">
                    <div class="col-sm-4" style="margin-top: 10px;">
                        <a href="<?php echo $url; ?>" class=""><img src="<?php echo $img; ?>" class="img-responsive"></a>
                    </div>
                    <div class="col-sm-8">
                        <h3 class="title"><a href="<?php echo $url; ?>"><?php echo $name; ?></a></h3>
                        <p class="text-muted"><?php echo $perex ?></p>
                    </div>
                </div>
                <hr>
                <?php
            }
        } else {
            ?>
            <h3 class="title"><?php echo $data['article']['perex']; ?></h3>
            <?php echo $data['article']['content']; ?>
            <?php
        }
        ?>
    </div>
</div>
-->