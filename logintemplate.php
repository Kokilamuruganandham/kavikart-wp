<?php
/**
 * Template Name: login Template*/

get_header();
global $user_ID;
?>
<div class="container">
    <div class="width50">
        <div class="row custom-login d-flex justify-content-center">
            <div class="card login-card">
                <div class="col-sm-12 justify-content-center">
                    <form action="<?php echo esc_url(wp_login_url()); ?>" method="post">
                        <input type="text" name="log" id="username" placeholder="Username" required>
                        <br>
                        <input type="password" name="pwd" id="password" placeholder="Password" required>
                        <br>
                        <?php wp_nonce_field('custom-login-nonce'); ?>

                        <button type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
get_footer();

