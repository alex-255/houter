<?php
get_header(); 
?>

<section id="our-recommendations">
    <h6 class="our-rec--title">Our Recommendations</h6>
    <div class="our-rec--top-bar">
        <h2 class="our-rec--top-bar--title">Featured House</h2>
        <div class="our-rec--top-bar--menu">
            <a class="our-rec--top-bar--menu--item house" href="#">House</a>
            <a class="our-rec--top-bar--menu--item villa" href="#">Villa</a>
            <a class="our-rec--top-bar--menu--item apartment" href="#">Apartment</a>
            <a class="our-rec--top-bar--menu--item all shown" href="#">All</a>
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
                        <div class="our-rec--slider--item shown <?php 
                        $types = wp_get_post_terms(get_the_ID(), "real_estate_type");
                        if ($types[0]->slug) {echo esc_html($types[0]->slug);}
                        ?>">
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
                            
                            
                            <div class="our-rec--slider--item--caption">
                                
                                    <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                
                                <p class="price"><?php echo esc_html( get_field('price') ); ?></p>
                                <div class="person">
                                    <img class="person--img" src="<?php echo esc_html( get_field('avatar')['sizes']['thumbnail'] ); ?>" alt="avatar">
                                    <div class="person--desc">
                                        <h4 class="name"><?php echo esc_html( get_field('name') ); ?></h4>
                                        <p class="occupation"><?php echo esc_html( get_field('occupation') ); ?></p>
                                    </div>
                                </div>
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