<section class="blog-grid">
    <div class="container">
        <!--Browse Job In Grid-->
        <div class="row extra-mrg">

            <?php
            if ($this->data['plugin_data']['hasPosts']) {
                foreach ($this->data['plugin_data']['items'] as $row) {
                    $img = $row['img'];
                    if (!$img) {
                        $img = 'http://med.localhost/dnt3/dnt-view/data/uploads/formats/350/66_7d2c48b02d9641d0386f69d4653b0e6d_o.jpg';
                    }
                    $content = $row['content'];
                    $perex = $row['perex'];
                    $name = $row['name'];
                    $url = $row['url'];
                    $date = new DateTime($row['date']);
                    ?>

                    <article class="blog-news col-md-4">
                        <div class="short-blog">
                            <figure class="img-holder">
                                <a href="blog-detail.html"><img src="<?php echo $img; ?>" class="img-responsive" alt="News"></a>
                                <div class="blog-post-date">
                                    <?php echo $date->format('d.m.Y, H:i'); ?>
                                </div>
                            </figure>
                            <div class="blog-content">
                                <div class="post-meta">By: <span class="author">MedDigilopment</span></div>
                                <a href="<?php echo $url; ?>"><h2><?php echo $name; ?></h2></a>
                                <div class="blog-text">
                                    <p><?php echo $perex; ?></p>
                                    <div class="post-meta">Filed Under: <span class="category"><a href="<?php echo WWW_PATH . $data['article']['name_url'] ?>"><?php echo $data['article']['name'] ?></a></span></div>
                                </div>
                            </div>
                        </div>
                    </article>

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
        <!--/.Browse Job In Grid-->

        <div class="row">
            <ul class="pagination">
                <li class="active"><a href="/">1</a></li>
                    <?php /*
                      <li><a href="#"><i class="ti-arrow-left"></i></a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li>
                      <li><a href="#"><i class="ti-arrow-right"></i></a></li>
                     */ ?>
            </ul>
        </div>

    </div>
</section>