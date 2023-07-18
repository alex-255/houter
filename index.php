<?php
get_header(); 
?>

<section id="our-recommendations">
    <h6>Our Recommendations</h6>
    <div class="our-rec--top-bar">
        <h2>Featured House</h2>
        <div class="our-rec--top-bar--menu">
            <a href="#">House</a>
            <a href="#">Villa</a>
            <a href="#">Apartment</a>
        </div>
    </div>
    <div class="our-rec--slider">
    <?php
            // Arguments
            $args = array(
                'posts_per_page' => 10,
                'post_type' => 'real_estate_item'
                // 'order' => "ASC"
            );

            // The Query
            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() ) {

                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); ?>
                        <div class="our-rec--slider--item">
                            <div class="our-rec--slider--item--image">
                                <?php if(has_post_thumbnail()) { 
                                    $alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>
                                    <img  src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php echo esc_html($alt); ?>" loading="lazy" />
                                <?php } else { ?>
                                    <img  src="<?php echo get_template_directory_uri() . "/assets/images/placeholder.jpg"?>" alt="placeholder" loading="lazy" />
                                <?php } ?> 
                                <?php
                                $terms = wp_get_post_terms(get_the_ID(), "real_estate_deal_type");

                                if ($terms[0]->name) {
                                    if ($terms[0]->name == "Popular") {
                                        echo '<div class="term deal-type-popular"><i class="bi bi-fire"></i>' . esc_html($terms[0]->name) . "</div>";
                                    } else if ($terms[0]->name == "Best Deals") {
                                        echo '<div class="term deal-type-best-deals"><i class="bi bi-wallet2"></i>' . esc_html($terms[0]->name) . "</div>";
                                    } else if ($terms[0]->name == "New House") {
                                        echo '<div class="term deal-type-new-house"><i class="bi bi-house-door-fill"></i>' . esc_html($terms[0]->name) . "</div>";
                                    } else {
                                        echo '<div class="term deal-type-other">' . esc_html($terms[0]->name) . "</div>";
                                    }
                                    
                                } 
                                
                                ?>

                            </div>
                            
                            
                            <div class="our-rec--slider--caption">
                                <a href="<?php the_permalink(); ?>">
                                    <h3><?php the_title(); ?></h3>
                                </a>
                                <p><?php echo esc_html( get_field('heading') ); ?></p>
                            </div>
                        </div>
                    <?php
                }

            } 
            /* Restore original Post Data */
            wp_reset_postdata(); ?>
    </div>
</section>

<?php
get_footer(); 
?>