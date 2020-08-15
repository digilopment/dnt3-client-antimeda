<div class="clearfix"></div>
<!-- Title Header End -->

<!-- Contact Page Section Start -->
<section class="contact-page">
    <div class="container">
        <h2>Drop A Mail</h2>

        <div class="col-md-4 col-sm-4">
            <div class="contact-box">
                <i class="fa fa-map-marker"></i>
                <p><?php echo $this->data['plugin_data']['setting']('vendor_company'); ?><br/>
                    <?php echo $this->data['plugin_data']['setting']('vendor_street'); ?> <?php echo $this->data['plugin_data']['setting']('vendor_psc'); ?><br>
                    <?php echo $this->data['plugin_data']['setting']('vendor_city'); ?></p>
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <div class="contact-box">
                <i class="fa fa-envelope"></i>
                <p>
                    <?php echo $this->data['plugin_data']['setting']('vendor_email'); ?></p>
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <div class="contact-box">
                <i class="fa fa-phone"></i>
                <p><?php echo $this->data['plugin_data']['setting']('vendor_tel'); ?></p>
            </div>
        </div>

    </div>
</section>
<!-- contact section End -->

<!-- contact form -->
<section class="contact-form">
    <div class="container">
        <h2>Drop A Mail</h2>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#form-request").validate({
                    rules: {
                        meno: {
                            required: true,
                            minlength: 1
                        },
                        tel_c: {
                            required: true,
                            minlength: 1
                        },
                        predmet: {
                            required: true,
                            minlength: 1
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        sprava: {
                            required: true,
                            minlength: 1
                        },
                        suhlas: {
                            required: true,
                            minlength: 1
                        }
                    },
                    messages: {
                        meno: "<?php echo $this->data['plugin_data']['translate']('field_word_err'); ?>",
                        tel_c: "<?php echo $this->data['plugin_data']['translate']('field_word_err'); ?>",
                        predmet: "<?php echo $this->data['plugin_data']['translate']('field_word_err'); ?>",
                        email: "<?php echo $this->data['plugin_data']['translate']('field_word_err'); ?>",
                        sprava: "<?php echo $this->data['plugin_data']['translate']('field_word_err'); ?>",
                        suhlas: "<?php echo $this->data['plugin_data']['translate']('field_word_err'); ?>"
                    },
                    submitHandler: function (form) {
                        $.ajax({
                            type: "POST",
                            url: '<?php echo WWW_PATH; ?>rpc/json/contact-form',
                            data: $(form).serialize(),
                            timeout: 10000,
                            dataType: 'json',
                            success: function (data) {
                                console.log(data);
                                if (data.success == 1) {
                                    $('#form-request').hide();
                                    $('#form_ok').show();
                                } else if (data.success == 0) {
                                    alert('Bat token');
                                } else {
                                    writeError(data.message);
                                }
                            },
                            error: function () {
                                alert('Momentálne sme zaneprázdnený.');
                            }
                        });
                        return false;
                    }
                }
                );

                function writeError(message) {
                    $("#form-result").html('<div class="alert alert-error">' + message + '</div>');
                }
            }
            );

        </script>

        <form action="" method="post" id="form-request" class="sky-form contact-style" novalidate="novalidate">

            <div class="col-md-6 col-sm-6">
                <input type="text" name="predmet" class="form-control" placeholder="Subject">
            </div>

            <div class="col-md-6 col-sm-6">
                <input type="text" name="meno" class="form-control" placeholder="Your Name">
            </div>

            <div class="col-md-6 col-sm-6">
                <input type="email" name="email" class="form-control" placeholder="Your Email">
            </div>

            <div class="col-md-6 col-sm-6">
                <input type="text" name="tel_c" class="form-control" placeholder="Phone Number">
            </div>

            <div class="col-md-12 col-sm-12">
                <textarea name="sprava" class="form-control" placeholder="Message"></textarea>
            </div>
            
            <div class="col-md-6 col-sm-6">
                <input type="checkbox" name="suhlas" class="form-control">
            </div>

            <div class="col-md-12 col-sm-12">
                <button name="sent_msg" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <div id="form_ok" style="display: none;">
            <div class="message">
                <h3><i class="rounded-x fa fa-check"></i><?php echo $this->data['plugin_data']['translate']('thankyou_for_registration'); ?></h3>
            </div>
        </div>

    </div>
</section>
<!-- Contact form End -->
