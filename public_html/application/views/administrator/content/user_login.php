<?php
//echo "<pre>";
//print_r($_SESSION);
/**
 * Page Security
 */
//echo $this->yel->encrypt("a");
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Administrator|Login</title>
    <!--    <link rel="stylesheet" href="<?= MAIN_SITE_URL ?>assets/global/template/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= MAIN_SITE_URL ?>assets/library/fonts/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?= MAIN_SITE_URL ?>assets/library/fonts/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="<?= SITE_ASSETS ?>library/fonts/fontawesome/css/all.css">
    <link rel="stylesheet" href="<?= MAIN_SITE_URL ?>assets/modules/administrator/css/user_login.css">-->

    <link rel="stylesheet" href="<?= SITE_ASSETS ?>global/template/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= SITE_ASSETS ?>library/fonts/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?= SITE_ASSETS ?>library/fonts/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="<?= SITE_ASSETS ?>library/fonts/fontawesome/css/all.css">
    <link rel="stylesheet" href="<?= SITE_ASSETS ?>modules/administrator/css/user_login.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="bg-white overflow-hidden row">

    <div class="col-6 p-0 d-flex justify-content-end">
        <!-- welcome header-->
        <!-- <div class="d-flex justify-content-end h-100"> -->
        <div class="user_card_left bg-card-dWhite ">
            <div class="user_card_left sign_in-card_left">
                <div class=" p2-10">
                    <p class="card-title int_card-title">
                        WELCOME
                        <br>
                        <span class="card-subtitle">INTEGRATED CASE MANAGEMENT SYSTEM</span>
                    </p>

                </div>

                <div class="mt-3 ">
                    <img src="<?php echo SITE_ASSETS ?>global/images/iacat_logo.png" class="brand_logo" alt="Logo">
                    <!-- <img src="<?php echo SITE_ASSETS ?>global/images/icms-login-logo.png" class="brand_logo2" alt="Logo"> -->
                </div>
            </div>
        </div>
        <!-- </div> -->
        <!-- welcome header-->
    </div>
    <div class="col-6 p-0">
        <div class="user_card bg-card-dBlue">
            <div class="user_card sign_in-card">
                <p class="card-title title--head">
                    Sign in
                </p>
                <div class="d-flex form--login">
                    <form id="frm_login">
                        <div class="form-group">
                            <label for="txt_user">Username</label>
                            <input type="text" name="txt_user" class="form-control input_user" id="txt_user"
                                aria-describedby="" placeholder="username">
                        </div>
                        <div class="form-group">
                            <label for="txt_pass">Password <span
                                    class="lbl-capslock text-danger font-weight-bold"></span>
                            </label>
                            <input type="password" name="txt_pass" class="form-control input_pass" id="txt_pass"
                                aria-describedby="" placeholder="password">
                            <span class="spn_icon-show"><i class="fa fa-eye-slash toggle-password_icon"
                                    aria-hidden="true"></i></span>
                        </div>
                        <div class="form-group mb-3">
                            <div class="g-recaptcha" data-sitekey="<?= GCAPTCHA_SITEKEY ?>"></div>
                            <div id="recaptcha-error" class="error" style="display: none;">This field is required.</div>
                        </div>
                        <button type="submit" name="button" id="btn-login" class="btn login_btn">Login</button>
                    </form>
                </div>
                <div class="mt-4 forgot-container" style="display: none;">
                    <div class="d-flex justify-content-center links">
                        <a class="forgot-pw" href="#">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="user_card bg-card-orange"></div>
    <div class="user_card bg-card-orange bg-upper"></div>
    <div class="user_card bg-card-orange bg-upper"></div>

    </div>



</body>

<footer>
    <div class="modal" id="msgmodal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h5-title"> Please wait...</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="p-msg">
                    </p>
                </div>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // i add auto next input if the input fill was inputed
    $(document).ready(function () {
        $('.inp-cd').on('input', function () {
            var maxLength = parseInt($(this).attr('maxLength'));
            var inputValue = $(this).val();
            if (inputValue.length >= maxLength) {
                $(this).next('.inp-cd').focus();
            }
        });
    });
</script>


    <script src="<?= SITE_ASSETS ?>global/jquery/jquery.js"></script>
    <script src="<?= SITE_ASSETS ?>global/jquery/jquery.min.js"></script>
    <script src="<?= SITE_ASSETS ?>global/template/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= SITE_EXT_LIBRARY_PLUGIN ?>jquery.validate.min.js"></script>
    <script src="<?= SITE_ASSETS ?>library/js/global_methods.js" type="text/javascript"></script>
    <script src="<?= SITE_ASSETS ?>library/js/icms_message.js" type="text/javascript"></script>
    <script src="<?= SITE_ASSETS ?>modules/administrator/js/config.js"></script>
    <script src="<?= SITE_ASSETS ?>modules/administrator/js/user_login.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
</footer>

</html>