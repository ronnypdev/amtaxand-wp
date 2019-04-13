<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amtaxand
 */

$footer_address = get_field('footer_address');
$footer_header_ = get_field('footer_header_');
$copy_right = get_field('copy_right');
$footer_logo = get_field('footer_logo');
?>

	</div><!-- #content -->

<!-- Footer  Partial -->
<footer class="am-footer py-5">
    <div class="container">
        <div class="footer-info footer-flex">
            <div class="am_address">
                <?php if($footer_logo) :?>
                    <img class="am-white-logo" src="<?php echo $footer_logo; ?>" alt="am white logo"/>
                <?php endif; ?>
                <p>  <?php echo $footer_address; ?></p>
            </div>
            <div class="social-media">
                <h6><?php echo $footer_header_; ?></h6>
                <ul class="social-media-list">
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
        <p class="copy-right">  <?php echo $copy_right; ?></p>
    </div>
</footer>
<!-- End Footer Partial-->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
