<?php
$about_header = get_field('about_header');
$about_content = get_field('about_content');
?>

<!-- About us Partial -->
<section class="container py-5 text-center">
    <h1 class="my-2"><?php echo $about_header; ?></h1>
    <?php echo $about_content; ?>
</section>
<!-- End About us Partial-->