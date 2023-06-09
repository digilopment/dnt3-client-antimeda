<!-- ========== Begin: Brows job ===============  -->
<section>
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

        <!--Browse Job In Grid-->
        <div class="row extra-mrg">

            <?php
            if ($data['hasItems']) {
                foreach ($data['items'] as $item) {
                    ?>
            <div class="col-md-4 col-sm-6">
                        <div class="grid-view brows-job-list">
                            <div class="brows-job-company-img">
                                <img src="<?php echo $data['postImage']($item['id_entity']); ?>" class="img-responsive" alt="" />
                            </div>
                            <div class="brows-job-position">
                                <h3><a href="<?php echo $data['detailtUlr']($item['id_entity'], $item['name_url']) ?>">
                                        <?php echo $item['position']; ?> - <?php echo $item['specialization']; ?>
                                    </a></h3>
                                <p><span><?php echo $item['company_name']; ?></span></p>
                            </div>
                            <div class="job-position">
                                <span class="job-num"><?php echo $item['company_state']; ?></span>
                            </div>
                            <div class="brows-job-type">
                                <span class="full-time">Full Time</span>
                            </div>
                            <ul class="grid-view-caption">
                                <li>
                                    <div class="brows-job-location">
                                        <p><i class="fa fa-map-marker"></i><?php echo $item['company_street']; ?>, <?php echo $item['company_city']; ?></p>
                                    </div>
                                </li>
                                <li>
                                    <p><span class="brows-job-sallery"><i class="fa fa-money"></i><?php echo $item['price']; ?></span>€</p>
                                </li>
                            </ul>
                            <?php if ($item['is_premium']) { ?>
                                <span class="tg-themetag tg-featuretag">Premium</span>
                            <?php } ?>
                        </div>
                    </div>

                    <?php
                }
            }
            ?>

        </div>
        <!--/.Browse Job In Grid-->

        <div class="row">
            <ul class="pagination">
      <?php foreach ($data['pages'] as $page => $active) { ?>
                        <li class="<?php echo $active; ?>" ><a href="<?php echo $data['currentUrl']($page) ?>"><?php echo $page ?></a></li>
                    <?php } ?>
            </ul>
        </div>

    </div>
</section>
<!-- ========== Begin: Brows job Grid End ===============  -->
 <?php /*                       
<div class="col-md-9 product">
    <section class="panel tree-path">
        <div class="panel-body no-padding">
            <div class="pull-left">
                <ul class="pagination pagination-sm pro-page-list">
                    <li class="">
                        <a><i class="fa fa-arrow-right"></i></a>
                    </li>
                    <?php
                    $i = 0;
                    foreach ($this->data['plugin_data']['categoryTree'] as $catId) {
                        if ($i > 0) {
                            ?>
                            <li class="" ><a href="<?php echo $this->data['plugin_data']['path'] . '' . $this->data['plugin_data']['modulUrl'] . '/category/' . $catId; ?>"><?php echo $this->data['plugin_data']['categoryElement']($catId)['name'] ?></a></li>
                            <?php
                        }
                        $i++;
                    }
                    ?>
                    <li class="active"><a href=""><?php echo ($this->data['plugin_data']['categoryElement']($this->data['plugin_data']['routeCategory'])['name']) ?? 'Bicykle' ?></a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="panel filter col-xs-12">
        <div class="col-md-3" style="padding-left: 0px;">
            <label for="sel1">Použitie bicykla:</label>
            <select id="filterType" name="type" class="form-control">
                <?php
                foreach ($data['types'] as $val => $name) {
                    if ($val == $data['aggrDecode']['type']) {
                        echo '<option selected value="' . $val . '">' . $name . '</option>';
                    } else {
                        echo '<option value="' . $val . '">' . $name . '</option>';
                    }
                }
                ?>
            </select>
        </div>
        <div class="col-md-3">
            <label for="sel1">Cena:</label>
            <select id="filterPrice" name="price" class="form-control">
                <option value="0">bez ohraničenia</option>
                <?php
                foreach ($data['priceRange'] as $val => $name) {
                    if ($val == explode('-', $data['aggrDecode']['range'])[1]) {
                        echo '<option selected value="' . $val . '">' . $name . '</option>';
                    } else {
                        echo '<option value="' . $val . '">' . $name . '</option>';
                    }
                }
                ?>
            </select>
        </div>
        <div class="col-md-3">
            <label for="sel1">Zoradiť:</label>
            <select id="filterSort" class="form-control">
                <option <?php echo ($data['aggrDecode']['sort'] == 'price' && $data['aggrDecode']['sortType'] == 'DESC') ? 'selected' : false; ?> value="price-DESC">od najdrahších</option>
                <option <?php echo ($data['aggrDecode']['sort'] == 'price' && $data['aggrDecode']['sortType'] == 'ASC') ? 'selected' : false; ?> value="price-ASC">od najlacnejších</option>
                <option <?php echo ($data['aggrDecode']['sort'] == 'name' && $data['aggrDecode']['sortType'] == 'ASC') ? 'selected' : false; ?> value="name_url-ASC">podľa abecedy [A-Z]</option>
                <option <?php echo ($data['aggrDecode']['sort'] == 'name' && $data['aggrDecode']['sortType'] == 'DESC') ? 'selected' : false; ?> value="name_url-DESC">podľa abecedy [Z-A]</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="sel1">&nbsp;</label>
            <span id="submitFilter" class="form-control btn btn-info">Filtrovať produkty</span>
        </div>
    </section>


    <script>
        function strToHex(str) {
            var hex = '';
            for (var i = 0; i < str.length; i++) {
                hex += '' + str.charCodeAt(i).toString(16);
            }
            return hex;
        }

        $("#submitFilter").click(function () {
            var domain = location.protocol + '//' + location.host + location.pathname;

            var filterType = $("#filterType").val();
            var filterPrice = $("#filterPrice").val();
            var filterSort = $("#filterSort").val();
            var sort = 'sort:' + filterSort.split('-')[0] + ';';
            var sortType = 'sortType:' + filterSort.split('-')[1] + ';';
            var range = 'range:0-' + filterPrice + ';';
            var type = 'type:' + filterType + ';';
            var page = 'page:1;';

            var finalStr = sort + sortType + range + type + page;
            var aggrBuilder = strToHex(finalStr);
            window.location = domain + '?aggrBuilder=' + aggrBuilder;
        });
    </script>

    <div class="row product-list">
        <?php
        if ($data['hasItems']) {
            foreach ($data['items'] as $item) {
                ?>
                <div class="col-md-4">
                    <section class="panel">
                        <div class="pro-img-box">
                            <a href="<?php echo $data['detailtUlr']($item['id_entity'], $item['name_url']) ?>">
                                <img src="<?php echo $data['postImage']($item['id_entity']); ?>" alt="" />
                            </a>
                            <a href="<?php echo $data['detailtUlr']($item['id_entity'], $item['name_url']) ?>" class="adtocart">
                                <i class="fa fa-info-circle"></i>
                            </a>
                        </div>
                        <div class="panel-body text-center">
                            <h4><a href="<?php echo $data['detailtUlr']($item['id_entity'], $item['name_url']) ?>" class="pro-title"> <?php echo $item['name']; ?> </a></h4>
                            <p class="price"><?php echo $item['price']; ?>€</p>
                        </div>
                    </section>
                </div>
                <?php
            }
        } else {
            ?>
            <div class="col-md-12">
                <section class="panel">
                    <div class="panel-body text-left">
                        <i class="fa fa-exclamation-circle" style="font-size: 50px;color: #da0809;"></i>
                        <h3>Ľutujeme, ale táto sekcia neobsahuje žiadne bicykle.</h3>
                        <p>Skúste si prosím vybrať inú kategóriu, alebo použiť vyhľadávač.</p>
                            <?php if ($data['aggrDecode']['type']) {?>
                            <h3>Všimli sme si, že máte aktívny filter. </h3>
                                 <h4>V kategórii bicyklov <b><?php echo $data['categoryElement']($data['routeCategory'])['name'] ?></b> 
                                vyhľadávate bicykle zaradené do typu <b><?php echo $data['types'][$data['aggrDecode']['type']]?></b> .</h4>
                            <p><i class="fa fa-info-circle" style="font-size: 20px;color: #da0809;"></i> Pre vyhľadávanie všetkých bicyklov (Použitie bicykla <b><?php echo $data['types'][$data['aggrDecode']['type']]?></b>) prejdite do kategórie <b><?php echo $data['categoryElement'](131)['name'] ?></b> v ľavom stĺpci úplne hore a použite filter <b>Použitie bicykla</b> a kliknite na <b><?php echo $data['types'][$data['aggrDecode']['type']]?></b></p>
                            <?php } ?>
                    </div>
                </section>
            </div>
            <?php
        }
        ?>
    </div>
    <section class="panel">
        <div class="panel-body">
            <div class="pull-right">
                <ul class="pagination pagination-sm pro-page-list">
                    <?php foreach ($data['pages'] as $page => $active) { ?>
                        <li class="<?php echo $active; ?>" ><a href="<?php echo $data['currentUrl']($page) ?>"><?php echo $page ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </section>
</div>
  * */?>