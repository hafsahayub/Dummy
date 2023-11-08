<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</h2>
    <h2>Heading 2</title>
    
    <?php wp_head();?>
</head>
<body>
    
<header>
    <div class='container'>
        <?php
        wp_nav_menu( 
            array(
            'theme_location' => 'top_menu',
            'menu_class' => 'top-bar'        
         )
        );
        ?>
</div>
</header>