<?php
/**
 * The template for displaying single gallery post.
 *
 * @package WordPress
 * @subpackage Corus Exercise
 * @since 1.0.0
 */
 get_header();

 ?>

<main id="content" role="main">
	<?php
        global $post;
        if( $post ) :

            $post_id = $post->ID;

            // Gallery Items IDs.
            $slider_image_1_id = get_post_meta( $post_id, 'slider_image_1', true );
            $slider_image_2_id = get_post_meta( $post_id, 'slider_image_2', true );
            $slider_image_3_id = get_post_meta( $post_id, 'slider_image_3', true );

            // Gallery Items Attachments.
            $slider_image_1 = wp_get_attachment_url( $slider_image_1_id );
            $slider_image_2 = wp_get_attachment_url( $slider_image_2_id );
            $slider_image_3 = wp_get_attachment_url( $slider_image_3_id );

            ?>
            <!-- start of slick -->
            <div class="carousel">
                <div class="single-image" data-id = "<?php echo $slider_image_1_id; ?>"><img src = "<?php echo $slider_image_1; ?>" /></div>
                <div class="single-image" data-id = "<?php echo $slider_image_2_id; ?>"><img src = "<?php echo $slider_image_2; ?>" /></div>
                <div class="single-image" data-id = "<?php echo $slider_image_3_id; ?>"><img src = "<?php echo $slider_image_3; ?>" /></div>
            </div>
        <?php
        endif;
    ?>
</main>
<?php get_footer(); ?>
