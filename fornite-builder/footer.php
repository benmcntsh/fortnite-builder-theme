
<!--Footer-->
<footer class="page-footer primary-color-dark center-on-small-only">
       <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">
            <!--First column-->
            <div class="col-md-3 offset-md-1">
              <?php if ( is_active_sidebar( 'footer' ) ) : ?>
              <?php dynamic_sidebar( 'footer' ); ?>
              <?php endif; ?>
            </div>
            <!--/.First column-->

            <hr class="hidden-md-up">

            <!--Second column-->
            <div class="col-md-2 offset-md-1">
                <h5 class="title">First column:</h5>
                <?php
                wp_nav_menu( array(
                'menu'              => 'footer1',
                'theme_location'    => 'footer1',
                'depth'             => 1
                )
                );
                ?>
            </div>
            <!--/.Second column-->

            <hr class="hidden-md-up">

            <!--Third column-->
            <div class="col-md-2">
                <h5 class="title">Second column:</h5>
                <?php
                wp_nav_menu( array(
                'menu'              => 'footer2',
                'theme_location'    => 'footer2',
                'depth'             => 1
                )
                );
                ?>
            </div>
            <!--/.Third column-->

            <hr class="hidden-md-up">

            <!--Fourth column-->
            <div class="col-md-2">
                <h5 class="title">Third column:</h5>
                <?php
                wp_nav_menu( array(
                'menu'              => 'footer3',
                'theme_location'    => 'footer3',
                'depth'             => 1
                )
                );
                ?>
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2017 Copyright: <a href="https://www.MDBootstrap.com"  rel="nofollow"> MDBootstrap.com </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<?php wp_footer(); ?>
<script>
$("#mdb-navigation > ul > li").addClass("page-item")
$("#mdb-navigation > ul > li > a").addClass("page-link")
</script>

</body>
</html>     
