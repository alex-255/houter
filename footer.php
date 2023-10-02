<footer id="footer">
    <div class="row">
        <div class="col-12 col-xl-6">
            <div class="header-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                    <path
                        d="M0 4C0 1.79086 1.79086 0 4 0H28C30.2091 0 32 1.79086 32 4V8C32 21.2548 21.2548 32 8 32H4C1.79086 32 0 30.2091 0 28V4Z"
                        fill="#F59E0B" />
                    <path
                        d="M4 8C4 5.79086 5.79086 4 8 4H32C34.2091 4 36 5.79086 36 8V12C36 25.2548 25.2548 36 12 36H8C5.79086 36 4 34.2091 4 32V8Z"
                        fill="#4BE4C9" />
                </svg>
                <h6>Houter</h6>
            </div>
            <p class="paragraph" >We provide information about properties such as houses, villas and apartments to help people find their
                dream home</p>
            <div class="footer--social-icons">
                <?php wp_nav_menu( array( 'theme_location' => 'footer_social_icons') ); ?>
            </div>
        </div>
        <div class="col-12 col-xl-2">
          <h6>Property</h6>
          
            <?php wp_nav_menu( array( 'theme_location' => 'footer_menu_1') ); ?>
        </div>
        <div class="col-12 col-xl-2">
        <h6>Article</h6>
            <?php wp_nav_menu( array( 'theme_location' => 'footer_menu_2') ); ?>
        </div>
        <div class="col-12 col-xl-2">
        <h6>Contact</h6>
            <?php wp_nav_menu( array( 'theme_location' => 'footer_menu_3') ); ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>