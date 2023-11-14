<?php get_header();?>

<section class = "page-wrap">
<div class="container">

    <div class="search">

        <h1><?php the_title();?></h1>
         
        <div id="search1">
            <?php get_search_form();?>
        </div>
       
     </div>

    <?php get_template_part('includes/section','content');?>
    

</div>
</section>

<?php get_footer();?>

