<div class="clearfix"></div>
<!-- Title Header Start -->
<section class="inner-header-title" <?php if ($this->data['article']['img']) { ?> style="background-image:url(<?php echo $this->data['article']['img'] ?>);" <?php } ?>>
    <div class="container">
        <h1><?php echo $this->data['article']['name'] ?></h1>
    </div>
</section>
<?php if (!$this->data['article']['img']) { ?>
    <style>
        .inner-header-title:before {
            background: #03a84e;
            opacity: 1;
        }
    </style>
<?php } ?>