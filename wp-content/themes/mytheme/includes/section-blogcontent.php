<?php if(have_posts()): while(have_posts()): the_post();?>

    <!--Date-->
    <p> <?php echo get_the_date('l, F jS Y');?></p>
    
    <!--Content-->
    <?php the_content();?>

    <!--Author Name-->
    <?php 
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
    ?>

    <p>Posted by <?php echo $fname;?> <?php echo $lname;?> </p>

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

    <!--Comments-->
    <p class="comment"><?php comments_template();?></P?



<?php endwhile; else: endif;?>