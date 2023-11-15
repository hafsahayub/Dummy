<?php get_header();?>
<section class = "page-wrap">
<div class="container">

    <h1><?php the_title();?></h1>
    <!--Featured image-->
    <?php if(has_post_thumbnail()):?>

    <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" 
    class="img-fluid mb-3 img-thumbnail me-4">
    
    <?php endif;?>

    <div class="row">
        <div class="col-lg-6">

            <?php get_template_part('includes/section','cars');?>
            <?php wp_link_pages();?>

        </div>
    </div>

    <div class="col-lg-6">
            <ul>
                <li>
        
                    Colour: <?php the_field('colour');?>

                </li>

                
                <li>

                    Registration Number: <?php the_field('registration_number');?>

                </li>
               
            </ul>
    </div>

</div>
</section>
<?php get_footer();?>

