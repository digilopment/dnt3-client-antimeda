<?php
$date = new DateTime($data['article']['datetime_publish']);
?>
<section class="blog-grid">
    <div class="container">
        <!--Browse Job In Grid-->
        <div class="row extra-mrg">
            <div class="col-md-8 col-xs-12">
                <article class="blog-news col-md-12">
                    <div class="full-blog">
                        <figure class="img-holder">
                            <img src="<?php echo $data['article']['img']; ?>" class="img-responsive" alt="News"></a>
                            <div class="blog-post-date">
                                <?php echo $date->format('d.m.Y, H:i'); ?>                          
                            </div>
                        </figure>
                        <div class="blog-content">
                            <div class="post-meta">By: <span class="author">MedDigilopment</span></div>
                            <h2><?php echo $data['article']['name']; ?></h2>
                            <div class="blog-text">
                                <p><?php echo $data['article']['perex']; ?></p>
                                <p><?php echo $data['article']['content']; ?></p>
                                <div class="post-meta">Filed Under: <span class="category"><a href="<?php echo WWW_PATH . $data['article']['name_url'] ?>"><?php echo $data['article']['name'] ?></a></span></div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="sidebar-widget">
                    <h4>Recent Category</h4>
                    <div class="blog-item">
                        <div class="post-thumb"><a href="blog-detail.html"><img src="assets/img/blog/1.jpg" class="img-responsive" alt=""></a></div>
                        <div class="blog-detail">
                            <a href="blog-details.html"><h4>Enim Ad Minim Veniam, Quis Nostrud Exercitation</h4></a>
                            <div class="post-info">Aug 10 2016</div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="post-thumb"><a href="blog-detail.html"><img src="assets/img/blog/2.jpg" class="img-responsive" alt=""></a></div>
                        <div class="blog-detail">
                            <a href="blog-details.html"><h4>Enim Ad Minim Veniam, Quis Nostrud Exercitation</h4></a>
                            <div class="post-info">Aug 10 2016</div>
                        </div>
                    </div><div class="blog-item">
                        <div class="post-thumb"><a href="blog-detail.html"><img src="assets/img/blog/3.jpg" class="img-responsive" alt=""></a></div>
                        <div class="blog-detail">
                            <a href="blog-details.html"><h4>Enim Ad Minim Veniam, Quis Nostrud Exercitation</h4></a>
                            <div class="post-info">Aug 10 2016</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>