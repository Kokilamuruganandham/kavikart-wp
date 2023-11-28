<?php
get_header();
?>

<?php
$args = array(
  'post_type' => 'custom_post',
  'orderby' => 'ID',
  'post_status' => 'publish',
  'order' => 'DESC',
  'posts_per_page' => -1 // Retrieve all published posts
);

$result = new WP_Query($args);

if ($result->have_posts()):
  ?>
  <div class="container">
    <div class="row">

      <?php while ($result->have_posts()):
        $result->the_post(); ?>

        <div class="col-sm-3">
          <div class="product-card">
            <?php if (has_post_thumbnail()):
              $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail');
              ?>
              <a href="<?php echo get_permalink(get_the_ID()); ?>">
                <img src="<?php echo $image[0]; ?>" class="card-img-top" alt="img-not-found">
              </a>
            <?php endif; ?>
            <div class="card-body">
              <h5 class="product-title">
                <?php the_title(); ?>
              </h5>
              <p class="product-para">
                <?php the_content(); ?>
              </p>
              <p><a href="<?php echo get_permalink(get_the_ID()); ?>">Read More</a></p>
            </div>
          </div>
        </div>

      <?php endwhile; ?>

    </div>
  </div>

  <?php
  wp_reset_postdata();
endif;

get_footer();
?>