<?php if(have_posts()): while(have_posts()): the_post();?>

  
    <!--Content-->
    <?php the_content();?>

    <!--Tags-->
    <?php
    $tags = get_the_tags();
    if ($tags) :
        foreach ($tags as $tag):?>
            <a href ="<?php echo get_tag_link($tag->term_id);?>" class="badge bg-success">
            <?php echo $tag->name;?>
            </a>

        <?php endforeach; endif;?>

    <!--Categories-->
    <?php
    $categories = get_the_category();
    if ($categories) :
        foreach($categories as $cat):?>
            <a href= "<?php echo get_category_link($cat->term_id);?>">
            <?php echo $cat->name;?>
            </a>
        <?php endforeach; endif;?>

    <!--Date-->
    <p> <?php echo get_the_date('l, F jS Y');?></p>
    

    <!--Comments-->
    <p class="comment"><?php comments_template();?></P?



<?php endwhile; else: endif;?>