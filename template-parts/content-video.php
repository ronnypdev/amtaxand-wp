<?php
    $amtax_video = get_field('amtax_video');
    $conference_date = get_field('conference_date');
    $global_logo = get_field('global_logo');
    $conference_text = get_field('conference_text');
    $scroll_down_text = get_field('scroll_down_text');
?>

<!-- Video section-->
<section class="container-fullsize-video">
    <!-- Video-->
    <video class="fullsize-video" muted="muted" autoplay="autoplay" loop="loop">
        <?php if ($amtax_video): ?>
            <source id="amtax" src="<?php echo $amtax_video; ?>" type="video/mp4"/>
        <?php endif; ?>
    </video>
    <div class="fullsize-content container">
        <div class="row">
            <div class="col-lg-6 video-col-flex">
                <p class="purple-circle"><?php echo $conference_date; ?></p>
            </div>
            <div class="col-lg-6">
                <?php if ($global_logo) : ?>
                    <img class="gb-logo" src="<?php echo $global_logo; ?>" alt="global logo"/>
                <?php endif;?>
                <p class="conference-text"><?php echo $conference_text; ?></p>
            </div>
        </div>
        <p class="scroll-down text-center"><?php echo $scroll_down_text; ?></p>
    </div>
</section>
<!-- End Video Partial-->
