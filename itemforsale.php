<?php
$current_path = getcwd();
require("$current_path/wp-load.php");
get_header();

$args = array('post_type' => 'item_for_sale');
$loop = new WP_Query($args);
while ($loop->have_posts()) : $loop->the_post();
?>

<h1 class="entry-title"><?php the_title(); ?></h1>
<div class="entry-content">
<?php $meta = get_post_meta(get_the_ID(), 'cuteness_factor'); ?>
<h3><?php the_meta(); ?></h3>
<?php the_content(); ?>
</div>
<?php endwhile; ?>
