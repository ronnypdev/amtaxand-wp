<?php
$services_heading = get_field('services_heading');
$services_content = get_field('services_content');
$services_chart = get_field('services_chart');
$services_bg = get_field('services_bg');
?>
<!-- Services  Partial -->
<section class="py-5 amtax-bg" style="background: url('<?php echo $services_bg; ?>') no-repeat center center; background-size: cover;">
    <div class="container grey-bg py-5">
        <div class="row">
            <div class="col-md-4">
                <h1><?php echo $services_heading; ?></h1>
                <?php echo $services_content; ?>
            </div>
            <div class="col-md-8">
                <div class="am-chart">
                    <?php if ($services_chart) : ?>
                        <img class="am-chart-img" src="<?php echo $services_chart; ?>" alt="am logo"/>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Partial-->