<?php get_header();?>

<section class="page-wrap">
<div class="container">
     
     <h1><?php echo single_cat_title();?></h1>
     <?php get_template_part('includes/section','archive');?>
     <?php the_posts_pagination();?>

</div>
</section>
<?php get_footer();?>

