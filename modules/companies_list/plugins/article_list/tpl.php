<!-- Browse Company List Start -->
<section class="browse-company">
    <div class="container">

        <!-- Company Searrch Filter Start -->
        <div class="row extra-mrg">
            <div class="wrap-search-filter">
                <form>
                    <div class="col-md-4 col-sm-4">
                        <input type="text" class="form-control" placeholder="Keyword: Name, Tag">
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <input type="text" class="form-control" placeholder="Location: City, State, Zip">
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <select class="form-control" id="j-category">
                            <option value="">&nbsp;</option>
                            <option value="1">Information Technology</option>
                            <option value="2">Mechanical</option>
                            <option value="3">Hardware</option>
                            <option value="4">Hospitality & Tourism</option>
                            <option value="5">Education & Training</option>
                            <option value="6">Government & Public</option>
                            <option value="7">Architecture</option>
                        </select>

                    </div>
                    <div class="col-md-2 col-sm-2">
                        <button type="submit" class="btn btn-primary full-width">Filter</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Company Searrch Filter End -->

        <!-- Single Browse Company -->
        <?php
        if ($this->data['plugin_data']['hasPosts']) {
            foreach ($this->data['plugin_data']['items'] as $row) {
                $img = $row['img'];
                $content = $row['content'];
                $perex = $row['perex'];
                $name = $row['name'];
                $url = $row['url'];
                ?>
                <div class="item-click">
                    <article>
                        <div class="brows-company">
                            <div class="col-md-6 col-sm-6">
                                <div class="item-fl-box">
                                    <div class="brows-company-pic">
                                        <img src="<?php echo $img; ?>" class="img-responsive" alt="" />
                                    </div>
                                    <div class="brows-company-name">
                                        <h4><a target="_blank" href="<?php echo $url; ?>"><?php echo $name; ?></a></h4>
                                        <span class="brows-company-tagline">Software Company</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="brows-company-location">
                                    <p><i class="fa fa-map-marker"></i> FALBROOK NSW 2330</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="brows-company-position">
                                    <p>6 Opening</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <?php
            }
        } else {
            ?>
            <h3 class="title"><?php echo $data['article']['perex']; ?></h3>
            <?php echo $data['article']['content']; ?>
            <?php
        }
        ?>


        <div class="row">
            <ul class="pagination">
                <li><a href="#"><i class="ti-arrow-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li> 
                <li><a href="#">4</a></li> 
                <li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li> 
                <li><a href="#"><i class="ti-arrow-right"></i></a></li> 
            </ul>
        </div>

    </div>
</section>
<!-- Browse Company List End -->
