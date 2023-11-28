<?php
get_header();
?>
<div class="container">
    <div class="card single-page-card">
        <div class="row single-page-row">
            <div class="col-sm-6 img-fluid img-responsive">
                <?php if (has_post_thumbnail()): ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-sm-6">
                <?php while (have_posts()):
                    the_post(); ?>
                    <div class="">
                        <div class="custom-single">
                            <h1>
                                <?php the_title(); ?>
                            </h1>
                            <div class="post-content">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <div class="Add-buy-cart">
                        <div class="row">
                            <div class="col-sm-6 add-cart">
                                <form id="add-to-cart-form" method="post"
                                    action="<?php echo esc_url(site_url('/checkout/')); ?>">
                                    <input type="hidden" name="add_to_cart" value="1">
                                    <button type="submit">
                                        <i class="fa fa-cart-shopping"></i> Add to Carta
                                    </button>
                                </form>
                            </div>
                            <div class="col-sm-6 buy-cart">
                                <form method="post" action="">
                                    <input type="hidden" name="buy_now" value="1">
                                    <button type="submit">
                                        <i class="fas fa-bolt"></i> Buy Now
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>